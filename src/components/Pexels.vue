<template>
    <div class="k-pexels-field">
        <k-field :label="label">
            <k-input
                theme="field"
                icon="search"
                @input="onInput"
                @keyup="onSubmit"
                type="text"
                name="textfield"
                :value="value"
            />
        </k-field>

        <div>
            <div class="loader" v-if="loading"><k-loader /></div>
            <div class="imagegrid" v-if="!loading && photos.length > 0">
                <k-grid>
                    <k-column width="1/6" v-for="photo in this.photos" :key="photo.id">
                        <k-image
                            ratio="16/9"
                            cover="true"
                            :src="photo.small"
                            v-on:click="
                                onSelect(
                                    photo.id,
                                    photo.large,
                                    photo.photographer,
                                    photo.photographerUrl,
                                    photo.downloadUrl
                                )
                            "
                            @click="$refs.dialog.open()"
                        />
                    </k-column>
                </k-grid>
                <div class="prev-next">
                    <button class="k-link k-button" v-on:click="showPrev"><k-icon type="angle-left" /></button>
                    <span>{{ pexelPage }} of {{ pages }}</span>
                    <button class="k-link k-button" v-on:click="showNext"><k-icon type="angle-right" /></button>
                </div>
            </div>
        </div>

        <div>
            <k-dialog
                ref="dialog"
                submitButton="Download"
                theme="positive"
                icon="download"
                size="large"
                @submit="downloadImage"
            >
                A photo by <strong>{{ selectedPhoto.photographer }}</strong>
                <k-image :src="selectedPhoto.photo" />
            </k-dialog>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        label: String,
        value: String,
        apiKey: String,
    },

    data: function () {
        return {
            photos: [],
            selectedPhoto: { id: '', photo: '', photographer: '', photographerUrl: '', downloadUrl: '' },
            keyword: '',
            pexelPage: 1,
            remaining: 0,
            totalResults: 0,
            loading: false,
            timer: null,
        }
    },
    computed: {
        pageId() {
            return this.$store.getters['content/id']()
        },
        pages() {
            return Math.round(this.totalResults / this.photos.length, 10)
        },
    },
    methods: {
        onInput(value) {
            this.keyword = value
        },

        onSubmit(value) {
            if (this.timer !== null) {
                clearTimeout(this.timer)
            }

            if (this.keyword.length < 3) {
                return
            }

            this.timer = setTimeout(() => {
                this.search(this.keyword)
            }, 250)
        },

        onSelect(id, photo, photographer, photographerUrl, downloadUrl) {
            this.selectedPhoto = {
                id: id,
                photo: photo,
                photographer: photographer,
                photographerUrl: photographerUrl,
                downloadUrl: downloadUrl,
            }
        },

        showNext() {
            if (this.pexelPage * this.perPage > this.remaining) {
                return
            }

            this.pexelPage++
            this.search(this.keyword)
        },

        showPrev() {
            if (this.pexelPage === 1) {
                return
            }

            this.pexelPage--
            this.search(this.keyword)
        },

        search(query) {
            this.loading = true
            this.$api.get(`pexels/search/${query}/${this.pexelPage}`).then((result) => {
                this.photos = result.photos
                this.page = result.page
                this.perPage = result.perPage
                this.remaining = result.remaining
                this.totalResults = result.totalResults
                this.loading = false
            })
        },

        downloadImage(id) {
            this.$api
                .post('pexels/download', {
                    downloadUrl: this.selectedPhoto.downloadUrl,
                    pageId: this.pageId.split('?')[0],
                    imageId: this.selectedPhoto.id,
                    photographer: this.selectedPhoto.photographer,
                    photographerUrl: this.selectedPhoto.photographerUrl,
                })
                .then(() => {
                    this.$refs.dialog.close()
                })
        },
    },
}
</script>

<style lang="scss">
.k-pexels-field {
    .k-image {
        cursor: pointer;
    }

    .loader {
        text-align: center;
    }

    .k-loader {
        padding: 50px;
        margin: 25px;
        background: lightgray;
        border-radius: 7px;
        display: inline-block;
    }

    .imagegrid {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .prev-next {
        margin-top: 15px;
        text-align: center;
    }
}
</style>
