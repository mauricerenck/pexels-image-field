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
                        <div class="k-items k-cards-items" data-layout="cards" data-size="auto">
                            <article
                                data-has-figure="true"
                                data-has-info="true"
                                data-has-options="true"
                                tabindex="-1"
                                data-id="note/pexels-photo.jpg"
                                class="k-item k-cards-item"
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
                            >
                                <div class="k-item-figure" style="background: var(--color-gray-800) var(--bg-pattern)">
                                    <span data-ratio="3/2" data-cover="true" class="k-image k-item-image">
                                        <span style="padding-bottom: 66.67%">
                                            <img alt="pexels photo" :src="photo.small" />
                                        </span>
                                    </span>
                                </div>
                                <header class="k-item-content">
                                    <h3 class="k-item-title">
                                        <span>
                                            {{ photo.photographer }}
                                        </span>
                                    </h3>
                                    <p class="k-item-info">{{ photo.width }} × {{ photo.height }}</p>
                                </header>
                            </article>
                        </div>
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

                <k-info-field text="Downloading file" v-if="this.downloading" />
                <k-info-field theme="positive" text="Downloaded file, refresh page to see it" v-if="this.downloaded" />
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
            downloading: false,
            downloaded: false,
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
            this.downloading = true
            this.downloaded = false
            this.$api
                .post('pexels/download', {
                    downloadUrl: this.selectedPhoto.downloadUrl,
                    pageId: this.pageId.split('?')[0],
                    imageId: this.selectedPhoto.id,
                    photographer: this.selectedPhoto.photographer,
                    photographerUrl: this.selectedPhoto.photographerUrl,
                })
                .then(() => {
                    this.downloading = false
                    this.downloaded = true
                    setTimeout(() => {
                        this.$refs.dialog.close()
                        this.downloaded = false
                    }, 2000)
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
