
Runner.pages.PageSettings.addPageEvent('t_meeting_book',Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject,row){pageObj.hideField("meet_approve");;});