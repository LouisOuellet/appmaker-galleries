Engine.Plugins.galleries = {
	init:function(){
		Engine.GUI.Sidebar.Nav.add('galleries', 'main_navigation');
	},
	load:{
		index:function(){},
		details:function(){},
	},
}

Engine.Plugins.galleries.init();
