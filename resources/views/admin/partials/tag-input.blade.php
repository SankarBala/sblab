<div>
    <input type="text" name="{{ $name }}" id="hiddenTags" hidden />
    <div class="tag-input-container" id="tagContainer">
        <input type="text" id="tagInput" class="tag-input" placeholder="New Tag" />
    </div>
</div>

@once
    @push('styles')
        <style>
            .tag-input-container {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                padding: 5px;
                border: 1px solid #ced4da;
                border-radius: 5px;
                min-height: 40px;
                cursor: text;
            }

            .tag {
                background-color: #e7e7e7;
                color: rgb(0, 0, 0);
                padding: 5px 10px;
                margin: 2px;
                border-radius: 15px;
                display: flex;
                align-items: center;
            }

            .tag .remove-tag {
                margin-left: 5px;
                cursor: pointer;
                font-weight: bold;
            }

            .tag-input {
                border: none;
                outline: none;
                flex-grow: 1;
                min-width: 100px;
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            $(document).ready(function() {
                function updateHiddenTags() {
                    let tags = [];
                    $(".tag").each(function() {
                        let text = $(this).text().replace("×", "").trim();
                        tags.push(text);
                    });
                    $("#hiddenTags").val(JSON.stringify(tags));
                }

                $("#tagInput").on("keypress", function(e) {
                    if (e.which === 13 || e.which === 44) {
                        e.preventDefault();
                        let tagText = $(this).val().trim();
                        if (tagText) {
                            let tagElement =
                                `<span class="tag">${tagText} <span class="remove-tag">&times;</span></span>`;
                            $(this).before(tagElement);
                            $(this).val("");
                            updateHiddenTags();
                        }
                    }
                });

                $(document).on("click", ".remove-tag", function() {
                    $(this).parent().remove();
                    updateHiddenTags();
                });

                $("#tagContainer").click(function() {
                    $("#tagInput").focus();
                });
            });
        </script>
    @endpush
@endonce
