
Runner.pages.PageSettings.addPageEvent('t_delivery_x',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){var ctrl3=Runner.getControl(pageid,'t_delivery_type');var ctrl7=Runner.getControl(pageid,'t_select_table_text');if(ctrl3.getValue()=='Expedition')
{pageObj.toggleItem("section",false);pageObj.toggleItem("section1",true);}else
if(ctrl3.getValue()=='Internal')
{pageObj.toggleItem("section",true);pageObj.toggleItem("section1",false);}
if(ctrl7.getValue()=='Address book')
{pageObj.toggleItem("integrated_edit_field6",true);pageObj.toggleItem("integrated_edit_field7",false);}else
if(ctrl7.getValue()=='Free Text')
{pageObj.toggleItem("integrated_edit_field6",false);pageObj.toggleItem("integrated_edit_field7",true);};});