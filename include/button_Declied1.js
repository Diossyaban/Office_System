
Runner.buttonEvents["Declied1"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Declied1';if(!pageObj.buttonEventBefore['Declied1']){pageObj.buttonEventBefore['Declied1']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;$('#loadingSpinner').show();return true;}}
if(!pageObj.buttonEventAfter['Declied1']){pageObj.buttonEventAfter['Declied1']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;if(result.hideButton){$('#Declied').hide();}
refreshRoomStatus();$('#loadingSpinner').hide();}
function refreshRoomStatus(){location.reload();}}
$('a[id="Declied1"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Declied1"+"_"+Runner.genId();var button_Declied1=new Runner.form.Button({id:this.id,btnName:"Declied1"});button_Declied1.init({args:[pageObj,proxy,pageid]});});};