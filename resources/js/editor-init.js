import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';
import List from '@editorjs/list';


const editor = new EditorJS({
    holder: 'editorjs',
    autofocus: true,
    placeholder: "Commence à écrire ici…",
    tools: {
        header: Header,
        list: List
    },
    data: {
        blocks: [{
            type: "paragraph",
            data: {
                text: "Commence à écrire ici…"
            }
        }]
    },
});
