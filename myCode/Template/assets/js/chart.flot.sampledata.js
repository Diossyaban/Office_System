'use strict'
var flotSampleData1=[[0,36.57749563156254],[1,38.990117798360984],[2,42.33951429212372],[3,41.81299261981016],[4,37.43049180497279],[5,32.50742948537699],[6,28.15321230561721],[7,24.734038382708317],[8,23.48248771261796],[9,20.406002456692214],[10,16.59886277727973],[11,12.156859927914581],[12,9.229765251904174],[13,5.183401848384374],[14,9.605706708466142],[15,10.832074796645134],[16,13.268792742800557],[17,18.216203428328363],[18,13.963666987062208],[19,18.712081450016612],[20,13.72401606510321],[21,11.305095416130975],[22,13.773906992422056],[23,15.834031310396583],[24,12.926545228583812],[25,17.595569228566347],[26,21.90850212276817],[27,18.29990271583387],[28,14.340994854410802],[29,18.22389641710976],[30,14.883609800856053],[31,13.019139849150623],[32,14.553083951054631],[33,15.417025583778472],[34,16.640872368623782],[35,19.456813236353057],[36,14.595960349995135],[37,17.729784515799526],[38,13.86824197051369],[39,9.492952801660538],[40,11.912479814449945],[41,9.798782954230068],[42,6.117552232900492],[43,1.4130313413037507],[44,2.3640186232524685],[45,2.3620174492590778],[46,4.523611468529182],[47,3.7627065666017216],[48,5.7686167365911043],[49,5.08594242151745846],[50,1.905264426860338],[51,8.27642052341136036],[52,7.9183672429606382],[53,5.027341617316905],[54,2.8449308083068967],[55,6.827661569105635],[56,6.215632967625112],[57,9.831855054294463],[58,9.393752601741996],[59,11.962549642491954],[60,10.01016629019579],[61,9.03698508678906],[62,6.053332776990388],[63,4.56216961329746],[64,2.7601184969979364],[65,4.345620131013858],[66,3.6626759042117385],[67,4.27936456640813],[68,2.0166954203189142],[69,1.4881023513956224],[70,3.7196511214339196],[71,1.5333390837655454],[72,5.780072548768565],[73,4.904719814229008],[74,1.0799012554825165],[75,4.72338119051706],[76,6.314725021867233],[77,4.277597816664166],[78,5.1544567140954225],[79,5.239845249502064],[80,3.877879174711641],[81,8.225872226683242],[82,7.264487465012946],[83,6.504325850409032],[84,1.7088839316517497],[85,11.49433994707275364],[86,10.5002886069980867],[87,3.8186248032905223],[88,4.790166662214078],[89,8.584014466610698],[90,10.231484497623207],[91,11.085662593015236],[92,15.692957864072707],[93,19.729820239992353],[94,18.14728404932766],[95,13.557879905430191],[96,12.0222003194338],[97,7.527743748664358],[98,3.7125580070986235],[99,9.7561429229810717],[100,9.24510598794585],[101,13.491288627936356],[102,18.422574259759138],[103,22.48813237262491],[104,18.7617308169055],[105,15.200987690731651],[106,14.567673790440317],[107,14.493364129654488],[108,12.06862995100759],[109,13.792354597964184],[110,13.398123710429495],[111,15.43357006142243],[112,15.838711304223441],[113,17.717113116366015],[114,14.363451521168152],[115,10.632076034419065],[116,12.704986280918988],[117,14.730515775966076],[118,18.64339616589121],[119,22.966268490839116],[120,18.086847938929818],[121,22.85442941807395],[122,23.862425058129165],[123,27.15039006269054],[124,24.7853194960341],[125,20.05439683907793],[126,22.789014412927482],[127,20.999064905231663],[128,16.665833423656743],[129,15.119579474719686],[130,13.122059029397477],[131,10.758963293991616],[132,11.409391406435187],[133,13.187657409342435],[134,10.191416382864197],[135,9.299880450312266],[136,9.200558705463123],[137,10.3761519864489],[138,15.201427613560849],[139,12.563611410586677],[140,14.01025663372129],[141,18.218049208936158],[142,16.36071205382429],[143,17.780867922487836],[144,18.918372217382256],[145,15.30583162112299],[146,18.133034345626925],[147,16.378646720850767],[148,14.835942770608781],[149,10.041195447639177]];var flotSampleData2=[[0,49.331065063219285],[1,48.79814898366035],[2,50.61793547911337],[3,53.31696317779434],[4,54.78560952831719],[5,53.84293992505776],[6,54.682958355082874],[7,56.742547193381654],[8,56.99677491680908],[9,56.144488388681445],[10,56.567122269843885],[11,60.355022877262684],[12,58.7457726121753],[13,61.445407102315514],[14,61.112870581452086],[15,58.57202276349258],[16,54.72497594269612],[17,52.070341498681124],[18,51.09867716530438],[19,47.48185519192089],[20,48.57861168097493],[21,48.99789250679436],[22,53.582491800119456],[23,50.28407438696142],[24,46.24606628705599],[25,48.614330310543856],[26,51.75313497797672],[27,51.34463925296746],[28,50.217320673443936],[29,54.657281647073304],[30,52.445057217757245],[31,53.063914668561345],[32,57.07494250387825],[33,52.970403392565515],[34,48.723854145068756],[35,52.69064629353968],[36,53.590890118378205],[37,58.52332126105745],[38,55.1037709679581],[39,58.05347017020425],[40,61.350810521199946],[41,57.746188675088575],[42,60.276910973029786],[43,61.00841651851749],[44,57.786733623457636],[45,56.805721677811356],[46,58.90301959619822],[47,62.45091969566289],[48,58.75007922945926],[49,58.405842466185355],[50,56.746633122658444],[51,52.76631598845634],[52,52.3020769891715],[53,50.56370473325533],[54,55.407205992344544],[55,50.49825590435839],[56,52.4975614755482],[57,48.79614749316488],[58,47.46776704767111],[59,43.317880548036456],[60,38.96296121124144],[61,34.73218432559628],[62,31.033700732272116],[63,32.637987000382296],[64,36.89513637594264],[65,35.89701755609185],[66,32.742284578187544],[67,33.20516407297906],[68,30.82094321791933],[69,28.64770271525896],[70,28.44679026902145],[71,27.737654438195236],[72,27.755190738237744],[73,25.96228929938593],[74,24.38197394166947],[75,21.95038772723346],[76,22.08944448751686],[77,23.54611335622507],[78,27.309610481106425],[79,30.276849322378055],[80,27.25409223418214],[81,29.920374921780102],[82,25.143447932376702],[83,23.09444253479626],[84,23.79459089729409],[85,23.46775072519832],[86,27.9908486073969],[87,23.218855925354447],[88,23.9163141686872],[89,19.217667423877607],[90,15.135179958932145],[91,15.08666008920407],[92,11.006269617032526],[93,9.201671310476282],[94,7.475865090236113],[95,11.645754524211824],[96,15.76161040821357],[97,13.995208323029495],[98,12.59338056489445],[99,13.536707176236195],[100,15.01308268888571],[101,13.957161242832626],[102,13.237091619700053],[103,18.10178875669874],[104,20.634765519499563],[105,21.064946755449817],[106,25.370593801826132],[107,25.321453557866203],[108,20.947464543531186],[109,18.750516645477425],[110,15.382042945356737],[111,14.569147793065632],[112,17.949159188821604],[113,15.965876707018058],[114,16.359355082317443],[115,14.163139419453657],[116,12.106761506858124],[117,14.843319717588216],[118,17.24291158460492],[119,17.799018581487058],[120,14.038359368301329],[121,18.658227817264983],[122,18.463689935573676],[123,22.687619584142652],[124,25.088957744790036],[125,28.184893996099582],[126,28.03276492115397],[127,24.11167758305713],[128,24.28007484247854],[129,28.23487421795626],[130,26.246971673504287],[131,29.330939820784877],[132,26.07749855928238],[133,23.921786397788168],[134,28.825012181053275],[135,25.140449169947626],[136,21.79048000172746],[137,23.05414699421924],[138,20.712904460250886],[139,19.727388210287337],[140,15.219713454550508],[141,16.567062865467058],[142,21.46105146001275],[143,24.699736621958863],[144,20.05510726036824],[145,16.200669070105356],[146,16.938945414022744],[147,15.50411643355061],[148,14.788500646665874],[149,16.97330575970296]];var flotSampleData3=[[0,-7],[1,-7],[2,7],[3,0],[4,-2],[5,10],[6,12],[7,3],[8,-6],[9,-6],[10,-1],[11,-8],[12,18],[13,7],[14,-2],[15,-2],[16,3],[17,19],[18,0],[19,10],[20,11],[21,-5],[22,-5],[23,-4],[24,17],[25,11],[26,16],[27,12],[28,-3],[29,-7],[30,-6],[31,4],[32,4],[33,7],[34,2],[35,10],[36,10],[37,-3],[38,10],[39,9],[40,0],[41,11],[42,11],[43,11],[44,-3],[45,10],[46,2],[47,14],[48,19],[49,7],[50,5],[51,-6],[52,-4],[53,0],[54,11],[55,6],[56,-4],[57,19],[58,0],[59,1],[60,14]];var males={'15%':[[2,88.0],[3,93.3],[4,102.0],[5,108.5],[6,115.7],[7,115.6],[8,124.6],[9,130.3],[10,134.3],[11,141.4],[12,146.5],[13,151.7],[14,159.9],[15,165.4],[16,167.8],[17,168.7],[18,169.5],[19,168.0]],'90%':[[2,96.8],[3,105.2],[4,113.9],[5,120.8],[6,127.0],[7,133.1],[8,139.1],[9,143.9],[10,151.3],[11,161.1],[12,164.8],[13,173.5],[14,179.0],[15,182.0],[16,186.9],[17,185.2],[18,186.3],[19,186.6]],'25%':[[2,89.2],[3,94.9],[4,104.4],[5,111.4],[6,117.5],[7,120.2],[8,127.1],[9,132.9],[10,136.8],[11,144.4],[12,149.5],[13,154.1],[14,163.1],[15,169.2],[16,170.4],[17,171.2],[18,172.4],[19,170.8]],'10%':[[2,86.9],[3,92.6],[4,99.9],[5,107.0],[6,114.0],[7,113.5],[8,123.6],[9,129.2],[10,133.0],[11,140.6],[12,145.2],[13,149.7],[14,158.4],[15,163.5],[16,166.9],[17,167.5],[18,167.1],[19,165.3]],'mean':[[2,91.9],[3,98.5],[4,107.1],[5,114.4],[6,120.6],[7,124.7],[8,131.1],[9,136.8],[10,142.3],[11,150.0],[12,154.7],[13,161.9],[14,168.7],[15,173.6],[16,175.9],[17,176.6],[18,176.8],[19,176.7]],'75%':[[2,94.5],[3,102.1],[4,110.8],[5,117.9],[6,124.0],[7,129.3],[8,134.6],[9,141.4],[10,147.0],[11,156.1],[12,160.3],[13,168.3],[14,174.7],[15,178.0],[16,180.2],[17,181.7],[18,181.3],[19,182.5]],'85%':[[2,96.2],[3,103.8],[4,111.8],[5,119.6],[6,125.6],[7,131.5],[8,138.0],[9,143.3],[10,149.3],[11,159.8],[12,162.5],[13,171.3],[14,177.5],[15,180.2],[16,183.8],[17,183.4],[18,183.5],[19,185.5]],'50%':[[2,91.9],[3,98.2],[4,106.8],[5,114.6],[6,120.8],[7,125.2],[8,130.3],[9,137.1],[10,141.5],[11,149.4],[12,153.9],[13,162.2],[14,169.0],[15,174.8],[16,176.0],[17,176.8],[18,176.4],[19,177.4]]};var females={'15%':[[2,84.8],[3,93.7],[4,100.6],[5,105.8],[6,113.3],[7,119.3],[8,124.3],[9,131.4],[10,136.9],[11,143.8],[12,149.4],[13,151.2],[14,152.3],[15,155.9],[16,154.7],[17,157.0],[18,156.1],[19,155.4]],'90%':[[2,95.6],[3,104.1],[4,111.9],[5,119.6],[6,127.6],[7,133.1],[8,138.7],[9,147.1],[10,152.8],[11,161.3],[12,166.6],[13,167.9],[14,169.3],[15,170.1],[16,172.4],[17,169.2],[18,171.1],[19,172.4]],'25%':[[2,87.2],[3,95.9],[4,101.9],[5,107.4],[6,114.8],[7,121.4],[8,126.8],[9,133.4],[10,138.6],[11,146.2],[12,152.0],[13,153.8],[14,155.7],[15,158.4],[16,157.0],[17,158.5],[18,158.4],[19,158.1]],'10%':[[2,84.0],[3,91.9],[4,99.2],[5,105.2],[6,112.7],[7,118.0],[8,123.3],[9,130.2],[10,135.0],[11,141.1],[12,148.3],[13,150.0],[14,150.7],[15,154.3],[16,153.6],[17,155.6],[18,154.7],[19,153.1]],'mean':[[2,90.2],[3,98.3],[4,105.2],[5,112.2],[6,119.0],[7,125.8],[8,131.3],[9,138.6],[10,144.2],[11,151.3],[12,156.7],[13,158.6],[14,160.5],[15,162.1],[16,162.9],[17,162.2],[18,163.0],[19,163.1]],'75%':[[2,93.2],[3,101.5],[4,107.9],[5,116.6],[6,122.8],[7,129.3],[8,135.2],[9,143.7],[10,148.7],[11,156.9],[12,160.8],[13,163.0],[14,165.0],[15,165.8],[16,168.7],[17,166.2],[18,167.6],[19,168.0]],'85%':[[2,94.5],[3,102.8],[4,110.4],[5,119.0],[6,125.7],[7,131.5],[8,137.9],[9,146.0],[10,151.3],[11,159.9],[12,164.0],[13,166.5],[14,167.5],[15,168.5],[16,171.5],[17,168.0],[18,169.8],[19,170.3]],'50%':[[2,90.2],[3,98.1],[4,105.2],[5,111.7],[6,118.2],[7,125.6],[8,130.5],[9,138.3],[10,143.7],[11,151.4],[12,156.7],[13,157.7],[14,161.0],[15,162.0],[16,162.8],[17,162.2],[18,162.8],[19,163.3]]};var pieData1=[{label:'Series 1',data:[[1,10]],color:'#6610f2'},{label:'Series 2',data:[[1,30]],color:'#007bff'},{label:'Series 3',data:[[1,90]],color:'#85d00b'},{label:'Series 4',data:[[1,70]],color:'#00cccc'},{label:'Series 5',data:[[1,80]],color:'#00275e'}];function getRandomData(totalPoints=150,start=50){var data=[];while(data.length<totalPoints){var prev=data.length>0?data[data.length-1]:start;var y=prev+Math.random()*10-5;if(y<0){y=Math.random()*10;}
else if(y>100){y=80;}
data.push(y);}
var res=[];for(var i=0;i<data.length;++i){res.push([i,data[i]])}
return res;}