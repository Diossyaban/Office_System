
Runner.pages.PageSettings.addPageEvent('t_meeting_book',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){pageObj.hideField("meet_approve");;});Runner.pages.fieldsEvents["t_meeting_total_participant_event"]=function(pageObj,pageid,row){if(row){row=new Runner.AjaxRow(pageObj,row);}
var ret,reqParams,ctrl=this,fieldsData={},params={},ajax=new Runner.form.Button({id:'t_meeting_total_participant_event',btnName:'t_meeting_total_participant_event'}),before=function(){params["value"]=this.getValue();},after=function(result){ctrl.setValue(result["upper"]);},submit=function(){params["table"]="t_meeting_book";params["field"]=ctrl.fieldName;params.page=pageObj.pageName;(Runner.controls.ControlStorage.byId(pageid)||[]).forEach(function(ctrl){if(!(ctrl instanceof Runner.controls.MultiUploadField)&&!(ctrl instanceof Runner.controls.FileControl)){fieldsData[ctrl.fieldName]=ctrl.getStringValue();}});reqParams={params:JSON.stringify(params),event:"t_meeting_total_participant_event",pageType:pageObj.pageType,keys:JSON.stringify(pageObj.keys?pageObj.keys:(row&&row.getKeys())),fieldsData:JSON.stringify(fieldsData)};if(pageObj.masterTable){reqParams.masterTable=pageObj.masterTable;reqParams=Runner.apply(reqParams,pageObj.masterKeys);}
$.post(Runner.getPageUrl("buttonhandler"),reqParams,function(result){var _result;try{_result=JSON.parse(result);}catch(e){Runner.displayGenericAjaxError(result);}
after.call(ctrl,_result);}).fail(function(jqXHR,textStatus,errorThrown){Runner.displayGenericAjaxError(jqXHR.responseText||textStatus+' '+errorThrown);});submit=function(){};};ajax.submitHandler=submit;ajax.submit=submit;ret=before.call(this);if(ret===false){return;}
submit();};