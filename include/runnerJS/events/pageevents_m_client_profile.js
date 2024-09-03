
Runner.pages.PageSettings.addPageEvent('m_client_profile',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var sob=Runner.getControl(pageid,'referral_type');sobType=sob.getValue();if(sobType.toUpperCase()=="PARTNERSHIP"){pageObj.toggleItem("integrated_edit_field43",true);}
else{pageObj.toggleItem("integrated_edit_field43",false);}
if(sobType.toUpperCase()=="MARKETING"){pageObj.toggleItem("integrated_edit_field44",true);}
else{pageObj.toggleItem("integrated_edit_field44",false);}
if(sobType.toUpperCase()=="EMPLOYEE"){pageObj.toggleItem("integrated_edit_field45",true);}
else{pageObj.toggleItem("integrated_edit_field45",false);};});Runner.pages.fieldsEvents["client_type_event"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'client_type_event',btnName:'client_type_event'}),before=function(){},after=function(result){var ctrltypeId=Runner.getControl(pageid,'client_type');typeId=ctrltypeId.getValue();if(typeId=='Company'){pageObj.toggleItem("integrated_edit_field9",true);pageObj.toggleItem("integrated_edit_field10",true);}
else
{pageObj.toggleItem("integrated_edit_field9",false);pageObj.toggleItem("integrated_edit_field10",false);}
if(typeId=='Individual'){pageObj.toggleItem("integrated_edit_field11",true);}
else
{pageObj.toggleItem("integrated_edit_field11",false);}},submit=function(){params["table"]="m_client_profile";params["field"]=ctrl.fieldName;params.page=pageObj.pageName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"client_type_event",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),fieldsData:JSON.stringify(fieldsData)};if(pageObj.masterTable){reqParams.masterTable=pageObj.masterTable;reqParams=Runner.apply(reqParams,pageObj.masterKeys);}
$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};Runner.pages.fieldsEvents["referral_type_event"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'referral_type_event',btnName:'referral_type_event'}),before=function(){params["value"]=this.getValue();},after=function(result){var sob=Runner.getControl(pageid,'referral_type');sobType=sob.getValue();if(sobType.toUpperCase()=="PARTNERSHIP"){pageObj.toggleItem("integrated_edit_field43",true);}
else{pageObj.toggleItem("integrated_edit_field43",false);}
if(sobType.toUpperCase()=="MARKETING"){pageObj.toggleItem("integrated_edit_field44",true);}
else{pageObj.toggleItem("integrated_edit_field44",false);}
if(sobType.toUpperCase()=="EMPLOYEE"){pageObj.toggleItem("integrated_edit_field45",true);}
else{pageObj.toggleItem("integrated_edit_field45",false);}},submit=function(){params["table"]="m_client_profile";params["field"]=ctrl.fieldName;params.page=pageObj.pageName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"referral_type_event",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),fieldsData:JSON.stringify(fieldsData)};if(pageObj.masterTable){reqParams.masterTable=pageObj.masterTable;reqParams=Runner.apply(reqParams,pageObj.masterKeys);}
$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};