import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';
import List from '@editorjs/list';
import Paragraph from '@editorjs/paragraph';
import Quote from '@editorjs/quote';
import CodeTool from '@editorjs/code';
import Delimiter from '@editorjs/delimiter';
import InlineCode from '@editorjs/inline-code';
import Embed from '@editorjs/embed';
import Warning from '@editorjs/warning';
import Marker from '@editorjs/marker';

document.addEventListener('DOMContentLoaded', () => {
    const editor = new EditorJS({
        holder: 'editorjs',
        autofocus: true,
        placeholder: "Commence à écrire ici…",
        tools: {
            header: Header,
            list: List,
            paragraph: Paragraph,
            quote: Quote,
            code: CodeTool,
            delimiter: Delimiter,
            inlineCode: InlineCode,
            embed: Embed,
            warning: Warning,
            marker: Marker
        },
    });
    const saveBtn = document.getElementById('saveBtn');
    const container = document.querySelector('#folioFormContainer');
    const route = container.dataset.route;
    const token = container.querySelector('meta[name="csrf-token"]').content;


    console.log('Route:', route);
    console.log('Token:', token);

    saveBtn.addEventListener('click', async () => {
        try {
            const outputData = await editor.save();
            console.log('Données sauvegardées :', JSON.stringify({ content: outputData }));
            console.log('Route de sauvegarde :', route);

            const response = await fetch(`${route}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json', // ✅ Ajoute ceci
                    'X-CSRF-TOKEN': token,
                },
                credentials: 'same-origin',
                body: JSON.stringify({ content: outputData })
            });


            if (!response.ok) throw new Error('Erreur lors de la sauvegarde');
            console.log(response);
            alert('Folio sauvegardé avec succès');
        } catch (e) {
            console.error('❌ Erreur :', e);
            alert('Une erreur est survenue');
        }
    });
});
