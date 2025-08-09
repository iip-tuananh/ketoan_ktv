@include('admin.abouts.ResultsAchieved')
@include('admin.abouts.AboutGallery')

<script>
    class About extends BaseClass {
        no_set = [];

        before(form) {
            this.image = {};
            this.image_back = {};
            this.image_banner = {};
        }

        after(form) {
            this.results = form.results && form.results.length
                ? form.results
                : [
                    new Result({ title: null}),
                ];
        }

        get results() {
            return this._results || [];
        }

        set results(value) {
            this._results = (value || []).map(val => new Result(val, this));
        }

        addResult(result) {
            if (!this._results) this._results = [];
            let new_result = new Result(result, this);
            this._results.push(new_result);
            return new_result;
        }

        removeResult(index) {
            this._results.splice(index, 1);
        }

        get image() {
            return this._image;
        }

        set image(value) {
            this._image = new Image(value, this);
        }

        get image_back() {
            return this._image_back;
        }

        set image_back(value) {
            this._image_back = new Image(value, this);
        }

        get image_banner() {
            return this._image_banner;
        }

        set image_banner(value) {
            this._image_banner = new Image(value, this);
        }


        clearImage() {
            if (this.image) this.image.clear();
            if (this.image_back) this.image_back.clear();
            if (this.image_banner) this.image_banner.clear();
        }

        get galleries() {
            return this._galleries || [];
        }

        set galleries(value) {
            this._galleries = (value || []).map(val => new AboutGallery(val, this));
        }

        addGallery(gallery) {
            if (!this._galleries) this._galleries = [];
            let new_gallery = new AboutGallery(gallery, this);
            this._galleries.push(new_gallery);
            return new_gallery;
        }

        removeGallery(index) {
            this._galleries.splice(index, 1);
        }

        get submit_data() {
            let data = {
                title_1: this.title_1,
                intro_text: this.intro_text,
                body_text: this.body_text,

            }

            data = jsonToFormData(data);

            let image = this.image.submit_data;
            if (image) data.append('image', image);
            let image_back = this.image_back.submit_data;
            if (image_back) data.append('image_back', image_back);
            let image_banner = this.image_banner.submit_data;
            if (image_banner) data.append('image_banner', image_banner);

            this.galleries.forEach((g, i) => {
                if (g.id) data.append(`galleries[${i}][id]`, g.id);
                let gallery = g.image.submit_data;
                if (gallery) data.append(`galleries[${i}][image]`, gallery);
                else data.append(`galleries[${i}][image_obj]`, g.id);
            })

            return data;
        }
    }
</script>
