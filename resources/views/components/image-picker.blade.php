<div id="{{ $uniqueId }}_container" class="imagePickerContainer">
    <input type="text" name="{{$name}}" value="remove" id="{{ $uniqueId }}_toRemove" hidden disabled/>
    <input type="file" name="{{$name}}" id="{{ $uniqueId }}_fileInput" hidden {{ $attributes->merge() }}/>

    <div class="imagePickerPlaceHolder" id="{{ $uniqueId }}_placeholder" role="button"  style="{{ $src ? 'display: none;': '' }}">
        CLICK HERE TO UPLOAD IMAGE
    </div>

    <img src="{{ $src ?  asset('storage/'. $src) : '' }}" 
         alt="Image Preview" 
         class="img-fluid" 
         id="{{ $uniqueId }}_preview"
         style="{{ $src ? '' : 'display: none;' }}"/>

    <div id="{{ $uniqueId }}_control" class="imagePickerControl"  style="{{ $src ? '' : 'display: none;' }}">
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-sm btn-info mr-2" id="{{ $uniqueId }}_change_btn">Change</button>
            <button type="button" class="btn btn-sm btn-danger" id="{{ $uniqueId }}_remove_btn">Remove</button>
        </div>
    </div>
</div>

@once
  @push('styles')
      <style>
          .imagePickerContainer {
            position:relative;
          }
          .imagePickerContainer .imagePickerControl {
              position: absolute;
              bottom: 8px;
              right: 8px;
          }
          .imagePickerContainer .imagePickerPlaceHolder {
              width: 100%;
              aspect-ratio: 1/1;
              border: 1px dashed gray;
              display: flex;
              align-items: center;
              justify-content: center;
              user-select: none;
              cursor: pointer;
          }
      </style>
  @endpush
@endonce

@push('scripts')
<script>

    document.addEventListener("DOMContentLoaded", function() {
        const fileInput = document.getElementById("{{ $uniqueId }}_fileInput");
        const imagePreview = document.getElementById("{{ $uniqueId }}_preview");
        const imageControl = document.getElementById("{{ $uniqueId }}_control");
        const imagePlaceholder = document.getElementById("{{ $uniqueId }}_placeholder");
        const changeButton = document.getElementById("{{ $uniqueId }}_change_btn");
        const removeButton = document.getElementById("{{ $uniqueId }}_remove_btn");
        const toRemoveInput = document.getElementById("{{ $uniqueId }}_toRemove");

        let imageToBeRemove = false;

        const changeImage = () => {
            fileInput.click();
        };

        imagePlaceholder.addEventListener("click", changeImage);
        changeButton.addEventListener("click", changeImage);

        fileInput.addEventListener("change", function(event) {
            if (fileInput.type === "file") {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                        imagePreview.style.display = "block";
                        imageControl.style.display = "block";
                        imagePlaceholder.style.display = "none";
                        toRemoveInput.disabled = true;
                    }
                    reader.readAsDataURL(file);
                } 
            }
        });

        removeButton.addEventListener("click", () => {
            imagePreview.src = ""; 
            imagePreview.style.display = "none";
            imageControl.style.display = "none";
            imagePlaceholder.style.display = "flex";
            fileInput.value = "";
            toRemoveInput.disabled = false;
        });
    });

</script>
@endpush