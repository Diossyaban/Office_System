
Runner.buttonEvents["btn_refresh"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='btn_refresh';if(!pageObj.buttonEventBefore['btn_refresh']){pageObj.buttonEventBefore['btn_refresh']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['btn_refresh']){pageObj.buttonEventAfter['btn_refresh']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;window.parent.location.reload();}}
$('a[id="btn_refresh"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="btn_refresh"+"_"+Runner.genId();var button_btn_refresh=new Runner.form.Button({id:this.id,btnName:"btn_refresh"});button_btn_refresh.init({args:[pageObj,proxy,pageid]});});};