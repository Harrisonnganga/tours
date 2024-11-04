/* @license GPL-2.0-or-later https://www.drupal.org/licensing/faq */
(function($,Drupal){Drupal.behaviors.layoutParagraphsComponentForm={attach:function attach(context){$('[name="layout_paragraphs[layout]"]').on('change',(e)=>{$('.lpb-btn--save').prop('disabled',e.currentTarget.disabled);});$('.lpb-btn--save').prop('disabled',false);}};})(jQuery,Drupal);;
(function($,Drupal){Drupal.behaviors.fileValidateAutoAttach={attach(context,settings){const $context=$(context);let elements;function initFileValidation(selector){$(once('fileValidate',$context.find(selector))).on('change.fileValidate',{extensions:elements[selector]},Drupal.file.validateExtension);}if(settings.file&&settings.file.elements){elements=settings.file.elements;Object.keys(elements).forEach(initFileValidation);}},detach(context,settings,trigger){const $context=$(context);let elements;function removeFileValidation(selector){$(once.remove('fileValidate',$context.find(selector))).off('change.fileValidate',Drupal.file.validateExtension);}if(trigger==='unload'&&settings.file&&settings.file.elements){elements=settings.file.elements;Object.keys(elements).forEach(removeFileValidation);}}};Drupal.behaviors.fileAutoUpload={attach(context){$(once('auto-file-upload','input[type="file"]',context)).on('change.autoFileUpload',Drupal.file.triggerUploadButton);},detach(context,settings,trigger){if(trigger==='unload')$(once.remove('auto-file-upload','input[type="file"]',context)).off('.autoFileUpload');}};Drupal.behaviors.fileButtons={attach(context){const $context=$(context);$context.find('.js-form-submit').on('mousedown',Drupal.file.disableFields);$context.find('.js-form-managed-file .js-form-submit').on('mousedown',Drupal.file.progressBar);},detach(context,settings,trigger){if(trigger==='unload'){const $context=$(context);$context.find('.js-form-submit').off('mousedown',Drupal.file.disableFields);$context.find('.js-form-managed-file .js-form-submit').off('mousedown',Drupal.file.progressBar);}}};Drupal.behaviors.filePreviewLinks={attach(context){$(context).find('div.js-form-managed-file .file a').on('click',Drupal.file.openInNewWindow);},detach(context){$(context).find('div.js-form-managed-file .file a').off('click',Drupal.file.openInNewWindow);}};Drupal.file=Drupal.file||{validateExtension(event){event.preventDefault();$('.file-upload-js-error').remove();const extensionPattern=event.data.extensions.replace(/,\s*/g,'|');if(extensionPattern.length>1&&this.value.length>0){const acceptableMatch=new RegExp(`\\.(${extensionPattern})$`,'gi');if(!acceptableMatch.test(this.value)){const error=Drupal.t('The selected file %filename cannot be uploaded. Only files with the following extensions are allowed: %extensions.',{'%filename':this.value.replace('C:\\fakepath\\',''),'%extensions':extensionPattern.replace(/\|/g,', ')});$(this).closest('div.js-form-managed-file').prepend(`<div class="messages messages--error file-upload-js-error" aria-live="polite">${error}</div>`);this.value='';event.stopImmediatePropagation();}}},triggerUploadButton(event){$(event.target).closest('.js-form-managed-file').find('.js-form-submit[data-drupal-selector$="upload-button"]').trigger('mousedown');},disableFields(event){const $clickedButton=$(this);$clickedButton.trigger('formUpdated');let $enabledFields=[];if($clickedButton.closest('div.js-form-managed-file').length>0)$enabledFields=$clickedButton.closest('div.js-form-managed-file').find('input.js-form-file');const $fieldsToTemporarilyDisable=$('div.js-form-managed-file input.js-form-file').not($enabledFields).not(':disabled');$fieldsToTemporarilyDisable.prop('disabled',true);setTimeout(()=>{$fieldsToTemporarilyDisable.prop('disabled',false);},1000);},progressBar(event){const $clickedButton=$(this);const $progressId=$clickedButton.closest('div.js-form-managed-file').find('input.file-progress');if($progressId.length){const originalName=$progressId.attr('name');$progressId.attr('name',originalName.match(/APC_UPLOAD_PROGRESS|UPLOAD_IDENTIFIER/)[0]);setTimeout(()=>{$progressId.attr('name',originalName);},1000);}setTimeout(()=>{$clickedButton.closest('div.js-form-managed-file').find('div.ajax-progress-bar').slideDown();},500);$clickedButton.trigger('fileUpload');},openInNewWindow(event){event.preventDefault();$(this).attr('target','_blank');window.open(this.href,'filePreview','toolbar=0,scrollbars=1,location=1,statusbar=1,menubar=0,resizable=1,width=500,height=550');}};})(jQuery,Drupal);;
(function($,Drupal){Drupal.behaviors.filterGuidelines={attach(context){function updateFilterGuidelines(event){const $this=$(event.target);const {value}=event.target;$this.closest('.js-filter-wrapper').find('[data-drupal-format-id]').hide().filter(`[data-drupal-format-id="${value}"]`).show();}$(once('filter-guidelines','.js-filter-guidelines',context)).find(':header').hide().closest('.js-filter-wrapper').find('select.js-filter-list').on('change.filterGuidelines',updateFilterGuidelines).trigger('change.filterGuidelines');}};})(jQuery,Drupal);;
