const forms = document.querySelectorAll('#form-like');

forms.forEach(form => {
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const url = this.getAttribute('action');
        const token = document.querySelector('meta[name="csrf-token"]').content;
        const postId = this.querySelector('#post-id-like').value;
        const countLike = this.querySelector('#count-like');

        // AJAX
        fetch(url, {
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token
            },
            method: 'post',
            body: JSON.stringify({
                id: postId
            })
        }).then(response => {
            response.json().then(data => {
                countLike.innerHTML = data.count + ' Like(s)';
            })
        }).catch(error => {
            console.log(error)
        });
    })
});
