// vars
let result = document.querySelector('.result'),
    img_result = document.querySelector('.img-result'),
    img_w = document.querySelector('.img-w'),
    img_h = document.querySelector('.img-h'),
    options = document.querySelector('.options'),
    save = document.querySelector('.save'),
    cropped = document.querySelector('.cropped'),
    sub = document.getElementById('uploadButton'),
    dwn = document.querySelector('#image_data'),
    oldImage = document.querySelector('#oldImage'),
    upload = document.querySelector('#file-input'),
    cropper = '';

// on change show image with crop options
upload.addEventListener('change', e => {
    if (e.target.files.length) {
        // start file reader
        const reader = new FileReader();
        reader.onload = e => {
            if (e.target.result) {
                // create new image
                let img = document.createElement('img');
                img.id = 'image';
                img.src = e.target.result;
                // clean result before
                result.innerHTML = '';
                // append new image
                result.appendChild(img);
                // show save btn and options
                save.classList.remove('hide');
                
                oldImage.classList.add('hide');
                
                // init cropper
                // cropper = new Cropper(img);
                cropper = new Cropper(img, {
                    aspectRatio: 16 / 9,
                    crop: function (e) {
                        console.log(e.detail.width);
                        img_w.value = e.detail.width;
                        console.log(e.detail.height);
                    }
                });
            }
        };
        reader.readAsDataURL(e.target.files[0]);
    }
});

save.addEventListener('click', e => {
    e.preventDefault();
    // get result to data uri
    let imgSrc = cropper.getCroppedCanvas({
        width: img_w.value // input value
    }).toDataURL();

    // remove hide class of img
    cropped.classList.remove('hide');
    img_result.classList.remove('hide');
    // show image cropped
    cropped.src = imgSrc;
    document.getElementById('image_data').value = imgSrc;
    sub.classList.remove('hide');
});

document.getElementById('uploadButton').addEventListener('click', function (e) {
    document.querySelector('.formBlog').submit();
});
