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
            <div class="loader" v-if="loading">
                <div><k-icon type="loader" /></div>
            </div>
            <div class="imagegrid" v-else>
                <k-collection layout="cards" :items="items" />

                <div class="prev-next" v-if="pages > 0">
                    <button class="k-link k-button" v-on:click="showPrev"><k-icon type="angle-left" /></button>
                    <span>{{ pexelPage }} of {{ pages }}</span>
                    <button class="k-link k-button" v-on:click="showNext"><k-icon type="angle-right" /></button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        label: String,
        value: String,
        downloadSize: String,
    },

    data: function () {
        return {
            items: [],
            selectedPhoto: { id: '', photo: '', photographer: '', photographerUrl: '', downloadUrl: '' },
            keyword: '',
            pexelPage: 1,
            perPage: 1,
            remaining: 0,
            totalResults: 0,
            loading: false,
            downloaded: false,
        }
    },
    computed: {
        pageId() {
            return this.$store.getters['content/id']()
        },
        pages() {
            return Math.round(this.totalResults / this.perPage, 10)
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
            this.$api.get(`pexels/search/${query}/${this.pexelPage}/${this.downloadSize}`).then((result) => {
                this.page = result.page
                this.perPage = result.perPage
                this.remaining = result.remaining
                this.totalResults = result.totalResults
                this.loading = false

                this.items = result.photos.map((photo) => {
                    return {
                        id: photo.id,
                        downloadUrl: photo.downloadUrl,
                        link: photo.downloadUrl,
                        photographer: photo.photographer,
                        photographerUrl: photo.photographerUrl,
                        text: `${photo.photographer} <br /> ${photo.width} × ${photo.height}`,
                        options: [
                            {
                                icon: 'open',
                                text: 'View',
                                link: photo.downloadUrl,
                                target: '_blank',
                            },
                            {
                                icon: 'download',
                                text: 'Download',
                                click: () => {
                                    this.downloadImage(photo.id)
                                },
                            },
                        ],
                        image: {
                            src: photo.small,
                            width: photo.width,
                        },
                    }
                })
            })
        },

        downloadImage(id) {
            this.downloaded = false

            const selectedPhoto = this.items.find((item) => item.id === id)
            const currentText = selectedPhoto.text
            selectedPhoto.text = 'Downloading…'

            panel.api
                .post('pexels/download', {
                    imageId: id,
                    pageId: this.pageId.split('?')[0],
                    downloadUrl: selectedPhoto.downloadUrl,
                    photographer: selectedPhoto.photographer,
                    photographerUrl: selectedPhoto.photographerUrl,
                })
                .then(() => {
                    this.downloaded = false
                    panel.view.reload()
                    window.panel.notification.success('Image downloaded');
                    selectedPhoto.text = currentText
                })
                .catch(() => {
                    this.downloaded = false
                    window.panel.notification.error('Image download failed');
                    selectedPhoto.text = currentText
                })
        },
    },
}
</script>

<style lang="scss">
.k-pexels-field {
    .loader {
        display: flex;
        justify-content: center;

        div {
            margin-top: var(--spacing-4);
            width: 100px;
            height: 100px;
            background-color: var(--color-gray-300);
            border-radius: var(--rounded);
            display: flex;
            place-items: center;
            justify-content: center;
        }
    }

    .imagegrid {
        margin: var(--spacing-4) 0;
    }

    .prev-next {
        margin-top: 15px;
        text-align: center;
    }
}
</style>
