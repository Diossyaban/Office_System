
Runner.buttonEvents["btn_self_pickup"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='btn_self_pickup';if(!pageObj.buttonEventBefore['btn_self_pickup']){pageObj.buttonEventBefore['btn_self_pickup']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;params["txt"]="Hello";ajax.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['btn_self_pickup']){pageObj.buttonEventAfter['btn_self_pickup']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;var message=result["txt"]+" !!!";ajax.setMessage(message);location.reload();}}
$('a[id="btn_self_pickup"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="btn_self_pickup"+"_"+Runner.genId();var button_btn_self_pickup=new Runner.form.Button({id:this.id,btnName:"btn_self_pickup"});button_btn_self_pickup.init({args:[pageObj,proxy,pageid]});});};