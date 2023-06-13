import * as FilePond from "filepond";
import "filepond/dist/filepond.min.css";

// Import the plugin code
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';

// Import the plugin styles
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';

FilePond.registerPlugin(FilePondPluginImagePreview);

const inputElements = document.querySelectorAll('input[type="file"].filepond');

const csrfToken = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");

inputElements.forEach((inputElement) => {
    FilePond.create(inputElement).setOptions({
        server: {
            process: "./filepond/process",
            headers: {
                "X-CSRF-TOKEN": csrfToken,
            },
            files: [
                {
                    // the server file reference
                    source: inputElement.dataset.img,
        
                    // set type to local to indicate an already uploaded file
                    options: {
                        type: 'limbo',
                    },
                },
            ],
        },
    });
});
