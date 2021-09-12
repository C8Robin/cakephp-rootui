<?php
/**
 * Form control templates adapted for use with RootUI HTML
 */
return [
    // Used for button elements in button().
    'button' => '<button{{attrs}}>{{text}}</button>',
    // Used for checkboxes in checkbox() and multiCheckbox().
    'checkbox' => '<input type="checkbox" class="custom-control-input" name="{{name}}" value="{{value}}"{{attrs}}>',
    //this container uses form-group to get the margin bottom, rest is cf. RootUI
    'checkboxContainer' => '<div class="form-group custom-control custom-checkbox">{{content}}</div>',
    'checkboxContainerError' => '<div class="form-group custom-control custom-checkbox error">{{content}}{{error}}</div>',
    // Input group wrapper for checkboxes created via control().
    //for Root UI : input first, then label, or it won't work!
    'checkboxFormGroup' => '{{input}}{{label}}',
    // Wrapper container for checkboxes. I assume not created via control()?
    'checkboxWrapper' => '<div class="checkbox">{{label}}</div>',
    // Widget ordering for date/time/datetime pickers.
    'dateWidget' => '{{year}}{{month}}{{day}}{{hour}}{{minute}}{{second}}{{meridian}}',
    // Error message wrapper elements.
    'error' => '<div class="error-message">{{content}}</div>',
    // Container for error items.
    'errorList' => '<ul>{{content}}</ul>',
    // Error item wrapper.
    'errorItem' => '<li>{{text}}</li>',
    // File input used by file().
    'file' => '<input type="file" name="{{name}}"{{attrs}}>',
    // Fieldset element used by allControls().
    'fieldset' => '<fieldset{{attrs}}>{{content}}</fieldset>',
    // Open tag used by create().
    'formStart' => '<form{{attrs}}>',
    // Close tag used by end().
    'formEnd' => '</form>',
    // General grouping container for control(). Defines input/label ordering.
    'formGroup' => '{{label}}{{input}}',
    // Wrapper content used to hide other content.
    'hiddenBlock' => '<div style="display:none;">{{content}}</div>',
    // Generic input element.
    'input' => '<input class="form-control" type="{{type}}" name="{{name}}"{{attrs}}/>',
    // Submit input element.
    'inputSubmit' => '<input type="{{type}}"{{attrs}}/>',
    // Container element used by control().
    'inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
    // Container element used by control() when a field has an error.
    'inputContainerError' => '<div class="form-group {{type}}{{required}} error">{{content}}{{error}}</div>',
    // Label element when inputs are not nested inside the label.
    'label' => '<label{{attrs}}>{{text}}</label>',
    // Label element used for radio and multi-checkbox inputs.
    'nestingLabel' => '{{hidden}}<label{{attrs}}>{{input}}{{text}}</label>',
    // Legends created by allControls()
    'legend' => '<legend>{{text}}</legend>',
    // Multi-Checkbox input set title element.
    'multicheckboxTitle' => '<legend>{{text}}</legend>',
    // Multi-Checkbox wrapping container.
    'multicheckboxWrapper' => '<fieldset{{attrs}}>{{content}}</fieldset>',
    // Option element used in select pickers.
    'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
    // Option group element used in select pickers.
    'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
    // Select element,
    'select' => '<select class="form-control{{class2}}" name="{{name}}"{{attrs}}>{{content}}</select>',
    // Multi-select element,
    'selectMultiple' => '<select class="form-control{{class2}}" name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
    // Radio input element,
    'radio' => '<input class="custom-control-input" type="radio" name="{{name}}" value="{{value}}"{{attrs}}>',
    'radioContainer' => '<div class="form-group custom-control custom-radio">{{content}}</div>',
    'radioFormGroup' => '{{input}}{{label}}',
    // Wrapping container for radio input/label,
    'radioWrapper' => '{{label}}',
    // Textarea input element,
    'textarea' => '<textarea name="{{name}}" class="form-control{{class2}}"{{attrs}}>{{value}}</textarea>',
    // Container for submit buttons.
    'submitContainer' => '<div class="submit">{{content}}</div>',
    //Confirm javascript template for postLink()
    'confirmJs' => '{{confirm}}',
];
