document.getElementById('avatar-input').addEventListener('change', function(){
    document.getElementById('avatar-form').submit();
    document.getElementById('avatar-image').src = URL.createObjectURL(this.files[0]);
})