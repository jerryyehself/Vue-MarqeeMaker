@extends('model.model')
@section('content')
<div class="customize-option">
    <form action="{{route('customizeslidescontent')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="slide-content">
            <p>
                選擇基底圖片：
                <input type="file" targetID="preview_progressbarTW_img" accept="image/gif, image/jpeg, image/png" required />
            </p>
            <p>
                幻燈片文字說明：
                <input type="text" name="slide-description" maxlength="20" placeholder="請輸入圖片說明" required />
            </p>
        </div>

        <button class="btn btn-info" type="submit" onclick="readURL(this)">預覽</button>
        <p>
            <label class="text-center mb-5 image-preview-wrapper" for="file-uploader"></label>
            <img style="height:30%; width:30%;" id="preview_progressbarTW_img" src="#" />
        </p>
    </form>

</div>


<script type="text/javascript">
    /*const imagePreview = document.querySelector('[data-target="image-preview"]');
    const fileUploader = document.querySelector('[data-target="file-uploader"]');
    fileUploader.addEventListener("change", handleFileUpload);
    async function handleFileUpload(e) {
        try {
            const file = e.target.files[0];
            setUploading(true);
            if (!file) return;

            const beforeUploadCheck = await beforeUpload(file);
            if (!beforeUploadCheck.isValid) throw beforeUploadCheck.errorMessages;

            const arrayBuffer = await getArrayBuffer(file);
            const response = await uploadFileAJAX(arrayBuffer);

            alert("File Uploaded Success");
            showPreviewImage(file);
        } catch (error) {
            alert(error);
            console.log("Catch Error: ", error);
        } finally {
            e.target.value = ''; // reset input file
            setUploading(false);
        }
    }

    function showPreviewImage(fileObj) {
        const image = URL.createObjectURL(fileObj);
        imagePreview.src = image;
    }

    function getArrayBuffer(fileObj) {
        return new Promise((resolve, reject) => {
            const reader = new FileReader();
            // Get ArrayBuffer when FileReader on load
            reader.addEventListener("load", () => {
                resolve(reader.result);
            });


            reader.addEventListener("error", () => {
                reject("error occurred in getArrayBuffer");
            });

            reader.readAsArrayBuffer(fileObj);
        });
    }

    function uploadFileAJAX(arrayBuffer) {

        return fetch("https://jsonplaceholder.typicode.com/posts/", {
                headers: {
                    version: 1,
                    "content-type": "application/json"
                },
                method: "POST",
                body: JSON.stringify({
                    imageId: 1,
                    icon: Array.from(new Uint8Array(arrayBuffer))
                })
            })
            .then(res => {
                if (!res.ok) {
                    throw res.statusText;
                }
                return res.json();
            })
            .then(data => data)
            .catch(err => console.log("err", err));
    }

    function beforeUpload(fileObject) {
        return new Promise(resolve => {
            const validFileTypes = ["image/jpeg", "image/png"];
            const isValidFileType = validFileTypes.includes(fileObject.type);
            let errorMessages = [];

            if (!isValidFileType) {
                errorMessages.push("You can only upload JPG or PNG file!");
            }

            const isValidFileSize = fileObject.size / 1024 / 1024 < 2;
            if (!isValidFileSize) {
                errorMessages.push("Image must smaller than 2MB!");
            }

            resolve({
                isValid: isValidFileType && isValidFileSize,
                errorMessages: errorMessages.join("\n")
            });
        });
    }

    function setUploading(isUploading) {
        if (isUploading === true) {
            spinner.classList.add("opacity-1");
        } else {
            spinner.classList.remove("opacity-1");
        }
    }*/
    function readURL(input) {

        if (input.files && input.files[0]) {

            var imageTagID = input.getAttribute("targetID");

            var reader = new FileReader();

            reader.onload = function(e) {

                var img = document.getElementById(imageTagID);

                img.setAttribute("src", e.target.result)

            }

            reader.readAsDataURL(input.files[0]);

        }

    }
</script>
@endsection