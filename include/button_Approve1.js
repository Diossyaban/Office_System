
Runner.buttonEvents["Approve1"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Approve1';if(!pageObj.buttonEventBefore['Approve1']){pageObj.buttonEventBefore['Approve1']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;$('#loadingSpinner').show();return true;$('#loadingSpinner').show();return true;}}
if(!pageObj.buttonEventAfter['Approve1']){pageObj.buttonEventAfter['Approve1']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;if(result.hideButton){$('#Declied').hide();}
refreshRoomStatus();$('#loadingSpinner').hide();}
function refreshRoomStatus(){location.reload();}}
$('a[id="Approve1"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Approve1"+"_"+Runner.genId();var button_Approve1=new Runner.form.Button({id:this.id,btnName:"Approve1"});button_Approve1.init({args:[pageObj,proxy,pageid]});});};