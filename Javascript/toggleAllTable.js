
    function toggleAll(source) {
        const checkboxes = document.querySelectorAll('.row-checkbox');
        checkboxes.forEach((checkbox) => {
            checkbox.checked = source.checked;
        });
    }

