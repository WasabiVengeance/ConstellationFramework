var csn={'hooks':{}};

// configure JVC to handle bootstrap stuff, link in validator
jvc['afterAjaxResponseJS'] = '$(\'[rel=popover]\').popover();$(\'[rel=tooltip]\').tooltip();';
jvc['beforeAjaxSubmit'] = dvr.validate;
jvc['showFormErrors'] = bsc.form.showErrors;
jvc['clearFormErrors'] = bsc.form.clearErrors;