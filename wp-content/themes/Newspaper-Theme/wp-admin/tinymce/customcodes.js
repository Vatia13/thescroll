// JavaScript Document



( function() {
    tinymce.PluginManager.add( 'fb_test', function( editor, url ) {






        editor.addButton( 'fb_test_button_key', {
            type: 'listbox',
            text: 'Shortcodes',
            classes: 'td_tinymce_shortcode_dropdown widget btn td-tinymce-dropdown',
            icon: false,
            onselect: function(e) {
            },
            values: [

                {text: 'Quotes', classes: 'td_tinymce_dropdown_title'},
                {text: '[quote_center]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[quote_center]' + tinyMCE.activeEditor.selection.getContent() + '[/quote_center]');
                }},
                {text: '[quote_right]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[quote_right]' + tinyMCE.activeEditor.selection.getContent() + '[/quote_right]');
                }},
                {text: '[quote_left]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[quote_left]' + tinyMCE.activeEditor.selection.getContent() + '[/quote_left]');
                }},
                {text: '[quote_box_center]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[quote_box_center]' + tinyMCE.activeEditor.selection.getContent() + '[/quote_box_center]');
                }},
                {text: '[quote_box_left]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[quote_box_left]' + tinyMCE.activeEditor.selection.getContent() + '[/quote_box_left]');
                }},
                {text: '[quote_box_right]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[quote_box_right]' + tinyMCE.activeEditor.selection.getContent() + '[/quote_box_right]');
                }},


                {text: '[pull_quote_center]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[pull_quote_center]' + tinyMCE.activeEditor.selection.getContent() + '[/pull_quote_center]');
                }},
                {text: '[pull_quote_left]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[pull_quote_left]' + tinyMCE.activeEditor.selection.getContent() + '[/pull_quote_left]');
                }},
                {text: '[pull_quote_right]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[pull_quote_right]' + tinyMCE.activeEditor.selection.getContent() + '[/pull_quote_right]');
                }},

                {text: 'Dropcaps', classes: 'td_tinymce_dropdown_title'},
                {text: '[dropcap box]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[dropcap]' + tinyMCE.activeEditor.selection.getContent() + '[/dropcap]');
                }},
                {text: '[dropcap circle]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[dropcap type="1"]' + tinyMCE.activeEditor.selection.getContent() + '[/dropcap]');
                }},
                {text: '[dropcap regular]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[dropcap type="2"]' + tinyMCE.activeEditor.selection.getContent() + '[/dropcap]');
                }},
                {text: '[dropcap bold]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[dropcap type="3"]' + tinyMCE.activeEditor.selection.getContent() + '[/dropcap]');
                }},



                {text: 'Columns', classes: 'td_tinymce_dropdown_title'},
                {text: '[1/1]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[vc_row][vc_column width="1/1"]Add content here[/vc_column][/vc_row]');
                }},
                {text: '[1/2]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[vc_row][vc_column width="1/2"]Add content here[/vc_column][vc_column width="1/2"]Add content here[/vc_column][/vc_row]');
                }},
                {text: '[1/3]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[vc_row][vc_column width="1/3"]Add content here[/vc_column][vc_column width="1/3"]Add content here[/vc_column][vc_column width="1/3"]Add content here[/vc_column][/vc_row]');
                }},
                {text: '[2/3 - 1/3]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[vc_row][vc_column width="2/3"]Add content here[/vc_column][vc_column width="1/3"]Add content here[/vc_column][/vc_row]');
                }},
                {text: '[1/3 - 2/3]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[vc_row][vc_column width="1/3"]Add content here[/vc_column][vc_column width="2/3"]Add content here[/vc_column][/vc_row]');
                }},
                {text: '[1/4]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[vc_row][vc_column width="1/4"]Add content here[/vc_column][vc_column width="1/4"]Add content here[/vc_column][vc_column width="1/4"]Add content here[/vc_column][vc_column width="1/4"]Add content here[/vc_column][/vc_row]');
                }},



                {text: 'Buttons', classes: 'td_tinymce_dropdown_title'},
                {text: '[vc_button_small]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[vc_button title="Button" target="_self" color="default" size="size_small" href="#"]');
                }},
                {text: '[vc_button_medium]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[vc_button title="Button" target="_self" color="default" href="#"]');
                }},
                {text: '[vc_button_large]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[vc_button title="Button" target="_self" color="default" size="size_large" href="#"]');
                }},
                {text: '[vc_button_small2]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[vc_button title="Button" target="_self" color="default" size="size_small2" href="#"]');
                }},
                {text: '[vc_button_medium2]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[vc_button title="Button" target="_self" color="default" size="default2" href="#"]');
                }},
                {text: '[vc_button_large2]', onclick : function() {
                    tinymce.activeEditor.execCommand('mceInsertContent', false, '[vc_button title="Button" target="_self" color="default" size="size_large2" href="#"]');
                }}

/*
                {text: 'H2 Title', onclick : function() {

                    var selected2 = false;
                    var content2 = selected2 = tinyMCE.activeEditor.selection.getContent();
                    var h2titleclass = prompt("Would you like a custom class?", "");

                    if(h2titleclass != ''){
                        h2titleclass = ' class= "'+h2titleclass+'"';
                    }

                    if (selected2 !== '') {
                        content2 = '[h2'+h2titleclass+']' + selected2 + '[/h2]';
                    } else {
                        content2 = '[h2'+h2titleclass+'][/h2]';
                    }

                    tinymce.execCommand('mceInsertContent', false, content2);
                }}
*/
            ]

        });

    } );

} )();


