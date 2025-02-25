
$(document).ready(function () {
    function updateHiddenTags() {
        let tags = [];
        $(".tag").each(function () {
            let text = $(this).text().replace("×", "").trim();
            tags.push(text);
        });
        $("#hiddenTags").val(JSON.stringify(tags));
    }

    function addTag(tagText) {
        if (tagText && $(".tag").filter(function () {
            return $(this).text().trim() === tagText;
        }).length === 0) {
            let tagElement = `<span class="tag">${tagText} <span class="remove-tag">&times;</span></span>`;
            $("#tagInput").before(tagElement);
            updateHiddenTags();
        }
    }

    // Load existing tags from hidden input (Edit mode)
    let existingTags = $("#hiddenTags").val();
    if (existingTags) {
        try {
            let tags = JSON.parse(existingTags);
            tags.forEach(tag => addTag(tag));
        } catch (e) {
            console.error("Invalid tag format", e);
        }
    }

    $("#tagInput").on("keypress", function (e) {
        if (e.which === 13 || e.which === 44) {
            e.preventDefault();
            let tagText = $(this).val().trim();
            addTag(tagText);
            $(this).val("");
        }
    });

    $(document).on("click", ".remove-tag", function () {
        $(this).parent().remove();
        updateHiddenTags();
    });

    $("#tagContainer").click(function () {
        $("#tagInput").focus();
    });
});
