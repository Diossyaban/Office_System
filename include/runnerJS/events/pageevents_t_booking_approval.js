
Runner.pages.PageSettings.addPageEvent('t_booking_approval',Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){$(document).ready(function(){var ctrlVehicle=Runner.getControl(pageid,'m_vehicle_id');function handleFieldVisibility(){var selectedVehicle=ctrlVehicle.getValue();if(selectedVehicle==3){pageObj.toggleItem("voucher",true);pageObj.toggleItem("m_vehicle_driver",false);}else if(selectedVehicle==!3){pageObj.toggleItem("voucher",false);pageObj.toggleItem("m_vehicle_driver",true);}else{pageObj.toggleItem("voucher",false);pageObj.toggleItem("m_vehicle_driver",true);}}
handleFieldVisibility();ctrlVehicle.on('change',function(e){handleFieldVisibility();});});;});