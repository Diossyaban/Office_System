
Runner.buttonEvents["btn_invoice"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='btn_invoice';if(!pageObj.buttonEventBefore['btn_invoice']){pageObj.buttonEventBefore['btn_invoice']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;}}
if(!pageObj.buttonEventAfter['btn_invoice']){pageObj.buttonEventAfter['btn_invoice']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;var nomor=result['txt'];window.open(nomor,'_blank');}}
$('a[id="btn_invoice"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="btn_invoice"+"_"+Runner.genId();var button_btn_invoice=new Runner.form.Button({id:this.id,btnName:"btn_invoice"});button_btn_invoice.init({args:[pageObj,proxy,pageid]});});};