<?php /* Smarty version 3.1.27, created on 2015-08-06 01:40:02
         compiled from "D:\web\test\templates\COmboBoxTest.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2898755c2baf26cc188_38384557%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3b025a6b7ee5487d52423fcd211792980235163' => 
    array (
      0 => 'D:\\web\\test\\templates\\COmboBoxTest.tpl',
      1 => 1438825173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2898755c2baf26cc188_38384557',
  'variables' => 
  array (
    'OpMenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55c2baf2758ba3_94848372',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55c2baf2758ba3_94848372')) {
function content_55c2baf2758ba3_94848372 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2898755c2baf26cc188_38384557';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Autocomplete - Combobox</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.10.2.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="//code.jquery.com/ui/1.11.4/jquery-ui.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  .custom-combobox {
    position: relative;
    display: inline-block;
  }
  .custom-combobox-toggle {
    position: absolute;
    top: 0;
    bottom: 0;
    margin-left: -1px;
    padding: 0;
  }
  .custom-combobox-input {
    margin: 0;
    padding: 5px 10px;
  }
  </style>
  <?php echo '<script'; ?>
>
  (function( $ ) {
    $.widget( "custom.combobox", {
      _create: function() {
        this.wrapper = $( "<span>" )
          .addClass( "custom-combobox" )
          .insertAfter( this.element );
 
        this.element.hide();
        this._createAutocomplete();
        this._createShowAllButton();
      },
 
      _createAutocomplete: function() {
        var selected = this.element.children( ":selected" ),
          value = selected.val() ? selected.text() : "";
 
        this.input = $( "<input>" )
          .appendTo( this.wrapper )
          .val( value )
          .attr( "title", "" )
          .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: $.proxy( this, "_source" )
          })
          .tooltip({
            tooltipClass: "ui-state-highlight"
          });
 
        this._on( this.input, {
          autocompleteselect: function( event, ui ) {
            ui.item.option.selected = true;
            this._trigger( "select", event, {
              item: ui.item.option
            });
          },
 
          autocompletechange: "_removeIfInvalid"
        });
      },
 
      _createShowAllButton: function() {
        var input = this.input,
          wasOpen = false;
 
        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Show All Items" )
          .tooltip()
          .appendTo( this.wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: false
          })
          .removeClass( "ui-corner-all" )
          .addClass( "custom-combobox-toggle ui-corner-right" )
          .mousedown(function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .click(function() {
            input.focus();
 
            // Close if already visible
            if ( wasOpen ) {
              return;
            }
 
            // Pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
          });
      },
 
      _source: function( request, response ) {
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
        response( this.element.children( "option" ).map(function() {
          var text = $( this ).text();
          if ( this.value && ( !request.term || matcher.test(text) ) )
            return {
              label: text,
              value: text,
              option: this
            };
        }) );
      },
 
      _removeIfInvalid: function( event, ui ) {
 
        // Selected an item, nothing to do
        if ( ui.item ) {
          return;
        }
 
        // Search for a match (case-insensitive)
        var value = this.input.val(),
          valueLowerCase = value.toLowerCase(),
          valid = false;
        this.element.children( "option" ).each(function() {
          if ( $( this ).text().toLowerCase() === valueLowerCase ) {
            this.selected = valid = true;
            return false;
          }
        });
 
        // Found a match, nothing to do
        if ( valid ) {
          return;
        }
 
        // Remove invalid value
        this.input
          .val( "" )
          .attr( "title", value + " didn't match any item" )
          .tooltip( "open" );
        this.element.val( "" );
        this._delay(function() {
          this.input.tooltip( "close" ).attr( "title", "" );
        }, 2500 );
        this.input.autocomplete( "instance" ).term = "";
      },
 
      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });
  })( jQuery );
 
  $(function() {
    $( "#combobox" ).combobox();
    $( "#toggle" ).click(function() {
      $( "#combobox" ).toggle();
    });
  });
  <?php echo '</script'; ?>
>
</head>
<body>

<div class="ui-widget">
  <label>Your preferred programming language: </label>
  <select id="combobox">
	    <option value=""></option>
  	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['name'] = 'sec1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['OpMenu']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sec1']['total']);
?>
  		<option value="<?php echo $_smarty_tpl->tpl_vars['OpMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['Value'];?>
"><?php echo $_smarty_tpl->tpl_vars['OpMenu']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sec1']['index']]['Text'];?>
</option>
  	<?php endfor; endif; ?>
	    <option value="ActionScript">ActionScript</option>
	    <option value="AppleScript">AppleScript</option>
	    <option value="Asp">Asp</option>
	    <option value="BASIC">BASIC</option>
	    <option value="C">C</option>
	    <option value="C++">C++</option>
	    <option value="Clojure">Clojure</option>
	    <option value="COBOL">COBOL</option>
	    <option value="ColdFusion">ColdFusion</option>
	    <option value="Erlang">Erlang</option>
	    <option value="Fortran">Fortran</option>
	    <option value="Groovy">Groovy</option>
	    <option value="Haskell">Haskell</option>
	    <option value="Java">Java</option>
	    <option value="JavaScript">JavaScript</option>
	    <option value="Lisp">Lisp</option>
	    <option value="Perl">Perl</option>
	    <option value="PHP">PHP</option>
	    <option value="王永慶">王永慶</option>
	    <option value="Python">Python</option>
	    <option value="Ruby">Ruby</option>
	    <option value="Scala">Scala</option>
	    <option value="Scheme">Scheme</option>
  </select>
</div>
<button id="toggle">Show underlying select</button>
 
 
</body>
</html><?php }
}
?>