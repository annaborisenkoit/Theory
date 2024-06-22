(function(blocks, editor, element){
    var el = element.createElement;
    var RichText = editor.RichText;

    blocks.registerBlockType('thab/th-about', {
        title: 'TH About',
        icon: 'admin-users',
        category: 'common',
        attributes: {
            title: {
                type: 'string',
                default: 'Block Title',
            },
            content: {
                type: 'string',
                default: 'Hello Worldddd',
            },
        },
        edit: function(props){
            return (
                el('div', {className: props.className},
                    el(
                        RichText,
                        {
                            tagName: 'h2',
                            className: 'th-about-title',
                            value: props.attributes.title,
                            onChange: function (content) {
                                props.setAttributes({title: content});
                            }
                        }
                    ),
                    el(
                        RichText,
                        {
                            tagName: 'div',
                            className: 'th-about-text',
                            value: props.attributes.content,
                            onChange: function (content) {
                                props.setAttributes({content: content});
                            }
                        }
                    )
                )
            );
        },
        save: function(props){
            return (
                el('div', {className: props.className},
                    el(RichText.Content, {
                        tagName: 'h2',
                        className: 'th-about-title',
                        value: props.attributes.title,
                    }), 
                    el(RichText.Content, {
                        tagName: 'div',
                        className: 'th-about-text',
                        value: props.attributes.content,
                    })                    
                ) 
            );
        },
    });
})(window.wp.blocks, window.wp.editor, window.wp.element);
