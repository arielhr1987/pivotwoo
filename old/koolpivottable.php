<?php $_ql0 = "\063\0568.0.0";
function _qO0($_ql1, $_qO1, $_ql2){
	return str_replace($_ql1, $_qO1, $_ql2);
}

function _qO2($_ql3){
	return md5($_ql3);
}

function _qO3(){
	$_ql4 = _qO0("\134", "/", strtolower($_SERVER["S\103RI\120\124_N\101ME"]));
	$_ql4 = _qO0(strrchr($_ql4, "\057"), "", $_ql4);
	$_qO4 = _qO0("\134", "\057", realpath("."));
	$_ql5 = _qO0($_ql4, "", strtolower($_qO4));

	return $_ql5;
}

class _qi10{
	static $_qi10 = "\173trademark\175\1730}\074div id='\173id\175' class\075\047\173style\175KPT'\040st\171le='\160osition:relative;displa\171\072inline\055bloc\153;\173widt\150\175\173\150eig\150t}'\076\173table}\173\061}\173viewstate\175\173command\175\074/div>\173\062}";
}

function _qO5(){
	$_ql6 = _qO6();
	_ql7($_ql6, 0153);
	_ql7($_ql6, 0113);
	_ql7($_ql6, 0121);
	_ql7($_ql6, -014);
	_ql7($_ql6, 050);
	_ql7($_ql6, 057);
	_ql7($_ql6, 034);
	_ql7($_ql6, (_qO7() || _ql8() || _qO8()) ? -050 : -011);
	_ql7($_ql6, -062);
	_ql7($_ql6, -061);
	_ql7($_ql6, -0111);
	_ql7($_ql6, -0111);
	$_ql9 = "";
	for($_qO9 = 0; $_qO9 < _qla($_ql6); $_qO9++){
		$_ql9 .= _qOa($_ql6[$_qO9] + 013 * ($_qO9 + 1));
	}
	echo $_ql9;

	return $_ql9;
}

function _qlb(){
	$_ql6 = _qO6();
	$_qOb = "";
	_ql7($_ql6, 0151);
	_ql7($_ql6, 0123);
	_ql7($_ql6, 0114);
	_ql7($_ql6, 071);
	_ql7($_ql6, -017);
	_ql7($_ql6, -031);
	for($_qO9 = 0; $_qO9 < _qla($_ql6); $_qO9++){
		$_qOb .= _qOa($_ql6[$_qO9] + 013 * ($_qO9 + 1));
	}

	return _qlc($_qOb);
}

function _qO7(){
	$_qOc = "";
	$_ql6 = _qO6();
	_ql7($_ql6, 053);
	_ql7($_ql6, 037);
	_ql7($_ql6, 024);
	_ql7($_ql6, 4);
	_ql7($_ql6, 1);
	for($_qO9 = 0; $_qO9 < _qla($_ql6); $_qO9++){
		$_qOc .= _qOa($_ql6[$_qO9] + 013 * ($_qO9 + 1));
	}

	return (substr(_qO2(_qld()), 0, 5) != $_qOc);
}

class _qi11{
	static $_qi11 = 017;
}

function _ql8(){
	$_qOc = "";
	$_ql6 = _qO6();
	_ql7($_ql6, 045);
	_ql7($_ql6, 0120);
	_ql7($_ql6, 0102);
	_ql7($_ql6, 014);
	_ql7($_ql6, -5);
	for($_qO9 = 0; $_qO9 < _qla($_ql6); $_qO9++){
		$_qOc .= _qOa($_ql6[$_qO9] + 013 * ($_qO9 + 1));
	}

	return (substr(_qO2(_qOd()), 0, 5) != $_qOc);
}

function _qO8(){
	$_ql6 = _qO6();
	_ql7($_ql6, 0124);
	_ql7($_ql6, 0133);
	_ql7($_ql6, 0110);
	_ql7($_ql6, 5);
	_ql7($_ql6, -6);
	$_qle = "";
	for($_qO9 = 0; $_qO9 < _qla($_ql6); $_qO9++){
		$_qle .= _qOa($_ql6[$_qO9] + 013 * ($_qO9 + 1));
	}
	$_qOe = _qlf($_qle);

	return ((isset ($_qOe[$_qle]) ? $_qOe[$_qle] : 0) != 01053 / 045);
}

function _qOf(&$_qlg){
	$_ql6 = _qO6();
	_ql7($_ql6, 0124);
	_ql7($_ql6, 0133);
	_ql7($_ql6, 0110);
	_ql7($_ql6, 5);
	_ql7($_ql6, -6);
	$_qOg = "";
	for($_qO9 = 0; $_qO9 < _qla($_ql6); $_qO9++){
		$_qOg .= _qOa($_ql6[$_qO9] + 013 * ($_qO9 + 1));
	}
	$_qOe = _qlf($_qOg);
	$_qlh = $_qOe[$_qOg];
	$_qlg = _qO0(_qOa(0173) . (_qlb() % 3) . _qOa(0175), (!(_qlb() % _qOh())) ? _qld() : _qOi(), $_qlg);
	for($_qO9 = 0; $_qO9 < 3; $_qO9++){
		if((_qlb() % 3) != $_qO9){
			$_qlg = _qO0(_qOa(0173) . $_qO9 . _qOa(0175), _qOi(), $_qlg);
		}
	}
	$_qlg = _qO0(_qOa(0173) . (_qlb() % 3) . _qOa(0175), (!(_qlb() % $_qlh)) ? _qld() : _qOi(), $_qlg);

	return ($_qlh == _qOh());
}

function _qld(){
	$_ql6 = _qO6();
	_ql7($_ql6, 0124);
	_ql7($_ql6, 0133);
	_ql7($_ql6, 0110);
	_ql7($_ql6, 4);
	_ql7($_ql6, -6);
	$_qlj = "";
	for($_qO9 = 0; $_qO9 < _qla($_ql6); $_qO9++){
		$_qlj .= _qOa($_ql6[$_qO9] + 013 * ($_qO9 + 1));
	}
	$_qOe = _qlf($_qlj);

	return isset ($_qOe[$_qlj]) ? $_qOe[$_qlj] : "";
}

function _qOd(){
	$_ql6 = _qO6();
	_ql7($_ql6, 0124);
	_ql7($_ql6, 0133);
	_ql7($_ql6, 0110);
	_ql7($_ql6, 5);
	_ql7($_ql6, -7);
	$_qOj = "";
	for($_qO9 = 0; $_qO9 < _qla($_ql6); $_qO9++){
		$_qOj .= _qOa($_ql6[$_qO9] + 013 * ($_qO9 + 1));
	}
	$_qOe = _qlf($_qOj);

	return isset ($_qOe[$_qOj]) ? $_qOe[$_qOj] : "";
}

function _qOh(){
	$_ql6 = _qO6();
	_ql7($_ql6, 0124);
	_ql7($_ql6, 0133);
	_ql7($_ql6, 0110);
	_ql7($_ql6, 5);
	_ql7($_ql6, -6);
	$_qOg = "";
	for($_qO9 = 0; $_qO9 < _qla($_ql6); $_qO9++){
		$_qOg .= _qOa($_ql6[$_qO9] + 013 * ($_qO9 + 1));
	}
	$_qOe = _qlf($_qOg);

	return isset ($_qOe[$_qOg]) ? $_qOe[$_qOg] : (0207 / 011);
}

function _qO6(){
	return array();
}

function _qlf($_qlk){
	$_qOk = _qOa(044);
	$_qll = _qOa(072);

	return array($_qlk => _qlc($_qlk . $_qll . $_qll . $_qOk . $_qlk));
}

function _qlc($_qlm){
	return eval ("return\040" . $_qlm . ";");
}

function _qla($_qOm){
	return sizeof($_qOm);
}

function _qOi(){
	return "";
}

function _qln(){
	header("\103ontent\055type:\040text\057\152avascript");
}

function _ql7(&$_qOm, $_qOn){
	array_push($_qOm, $_qOn);
}

function _qlo(){
	return exit ();
}

function _qOa($_qOo){
	return chr($_qOo);
}

class _qi01{
	static $_qi01 = "\074div st\171le='font\055family:\101rial;font\055si\172e\07210pt\073background-color:#\106EFF\104\106;color:black\073dis\160lay\072bloc\153;visibility\072visible\073' class=\047_ye\0611ow\047>\074span st\171le=\047font-family:\101rial;font-si\172e:1\060pt;font\055weight:bold;color\072black;display:inline;visibilit\171:visible;'>\113oolPivotTable<\057span>\040- \124rial version \173version} \055 Co\160yright (\103\051 \113ool\120HP\040.Inc -\040<a style='font-family:Arial;font-size\07210\160t;display\072inline\073visibilit\171:visible\073' \150ref='\150tt\160:/\057www.koolp\150p.net\047>www.\153ool\160hp\056net</a>. \074span style='font-family:\101rial;color:blac\153\073font-size\072\0610pt\073display:inline;visibility\072visible;\047\076To remove\074/s\160an> t\150is message, please\040\074a style\075\047font-family\072\101rial\073font-si\172e:10\160t;dis\160la\171\072inline;visibility\072visible;\047\040href='\150ttp:\057\057www\056koolph\160\056net\057\077mod\075purchase'>p\165rchase a\040license\074\057a>\056\074/div>";
}

if(isset ($_GET[_qO2("js")])){
	_qln(); ?> function _qO(_qo){return document.getElementById(_qo); }function _qY(_qy){return (_qy!=null); }function _qI(_qi,_qA){return _qA.indexOf(_qi); }function _qa(_qE,_qe){var _qU=document.createElement(_qE); _qe.appendChild(_qU); return _qU; }function _qu(_qy,_qZ){if (!_qY(_qZ))_qZ=1; for (var i=0; i
    <_qZ; i++)_qy=_qy.nextSibling; return _qy; }function _qz(){return (typeof(_qiO1)=="undefined");}function _qX(_qy,_qZ){if (!_qY(_qZ))_qZ=1; for (var i=0; i
    <_qZ; i++)_qy=_qy.parentNode; return _qy; }function _qx(_qy,_qZ){if (!_qY(_qZ))_qZ=1; for (var i=0; i
    <_qZ; i++)_qy=_qy.firstChild; return _qy; }function _qW(_qy,_qw){_qy.style.height=_qw+"px"; }function _qV(_qy,_qw){_qy.style.width=_qw+"px"; }function _qv(_qy){return parseInt(_qy.style.width); }function _qT(_qy){return parseInt(_qy.style.height); }function _qt(_qS,_qs,_qR){_qR=_qY(_qR)?_qR:document.body; var _qr=_qR.getElementsByTagName(_qS); var _qQ=new Array(); for (var i=0; i
    <_qr.length; i++)if (_qr[i].className.indexOf(_qs)>=0){_qQ.push(_qr[i]); }return _qQ; }function _qq(_qS,_qs,_qR){var _qP=_qt(_qS,_qs,_qR); if (_qP.length>0){return _qP[0]; }return false; }function _qp(_qy,_qw){_qy.style.display=(_qw)?"": "none"; }function _qN(_qy){return (_qy.style.display!="none"); }function _qn(_qy){return _qy.className; }function _qM(_qy,_qw){_qy.className=_qw; }function _qm(_qi,_qL,_ql){_qM(_ql,_qn(_ql).replace(_qi,_qL)); }function _qK(_qy,_qs){if (!_qy)return; if (_qy.className.indexOf(_qs)<0){var _qk=_qy.className.split(" "); _qk.push(_qs); _qy.className=_qk.join(" "); }}function _qJ(_qy,_qs){if (_qy.className.indexOf(_qs)>-1){_qm(_qs,"",_qy);var _qk=_qy.className.split(" "); _qy.className=_qk.join(" "); }}function _qj(_qH,_qh,_qG,_qg){if (!_qH)return; if (_qH.addEventListener){_qH.addEventListener(_qh,_qG,_qg); return true; }else if (_qH.attachEvent){if (_qg){return false; }else {var _qF= function (){_qG.apply(_qH,[window.event]); };if (!_qH["ref"+_qh])_qH["ref"+_qh]=[]; else {for (var _qf in _qH["ref"+_qh]){if (_qH["ref"+_qh][_qf]._qG === _qG)return false; }}var _qD=_qH.attachEvent("on"+_qh,_qF); if (_qD)_qH["ref"+_qh].push( {_qG:_qG,_qF:_qF } ); return _qD; }}else {return false; }}function _qd(_qH,_qh,_qG,_qg){if (_qH.removeEventListener){_qH.removeEventListener(_qh,_qG,_qg); return true; }else if (_qH.detachEvent){if (_qH["ref"+_qh]){for (var _qf in _qH["ref"+_qh]){if (_qH["ref"+_qh][_qf]._qG === _qG){_qH.detachEvent("on"+_qh,_qH["ref"+_qh][_qf]._qF); _qH["ref"+_qh][_qf]._qG=null; _qH["ref"+_qh][_qf]._qF=null; delete _qH["ref"+_qh][_qf]; return true; }}}return false; }else {return false; }}function _qC(_qc){if (_qc.stopPropagation)_qc.stopPropagation(); else _qc.cancelBubble= true; }function _qB(_qc){if (_qc.preventDefault)_qc.preventDefault(); else event.returnValue= false; return false; }function _qb(){return false; }function _qo0(_ql){var _qO0=""; var _ql0=(_ql instanceof Array); for (var _qi0 in _ql){switch (typeof(_ql[_qi0])){case "string":_qO0+=(_ql0)?"\""+_ql[_qi0]+"\",": "\""+_qi0+"\":\""+_ql[_qi0]+"\","; break; case "number":_qO0+=(_ql0)?_ql[_qi0]+",": "\""+_qi0+"\":"+_ql[_qi0]+","; break; case "boolean":_qO0+=(_ql0)?(_ql[_qi0]?"true": "false")+",": "\""+_qi0+"\":"+(_ql[_qi0]?"true": "false")+","; break; case "object":_qO0+=(_ql0)?_qo0(_ql[_qi0])+",": "\""+_qi0+"\":"+_qo0(_ql[_qi0])+","; break; }}if (_qO0.length>0)_qO0=_qO0.substring(0,_qO0.length-1); _qO0=(_ql0)?"["+_qO0+"]": "{"+_qO0+"}"; if (_qO0=="{}")_qO0="null"; return _qO0; }function _qI0(_qo1){if (_qo1.pageX || _qo1.pageY){return {_qO1:_qo1.pageX,_ql1:_qo1.pageY } ; }else if (_qo1.clientX || _qo1.clientY){return {_qO1:_qo1.clientX+(document.documentElement.scrollLeft?document.documentElement.scrollLeft:document.body.scrollLeft),_ql1:_qo1.clientY+(document.documentElement.scrollTop?document.documentElement.scrollTop:document.body.scrollTop)} ; }else {return {_qO1:null,_ql1:null } ; }}var _qi1=null; var _qI1=null; function _qo2(_qc){if (_qi1!=null){ (new _qO2(_qi1))._ql2(_qc); }}function _qi2(_qc){if (_qi1!=null){ (new _qO2(_qi1))._ql2(_qc); }}function _qI2(_qc){if (_qi1!=null){ (new _qO2(_qi1))._qo3(_qc); }}function _qO3(_qc){if (_qi1!=null){ (new _qO2(_qi1))._qo3(_qc); }}function _qO2(_qo){ this._qo=_qo; this._ql3(); }_qO2.prototype= {_ql3:function (){} ,_qi3:function (){var _qI3=_qO(this._qo); _qK(_qI3,"dragobject"); _qj(_qI3,"mousedown",_qo4, false); _qj(_qI3,"touchstart",_qO4, false); _qI3.onselectstart=_qb; _qI3.ondragstart=_qb; _qI3.onmousedown=_qb; } ,_ql4:function (){var _qI3=_qO(this._qo); _qK(_qI3,"dragDisable"); } ,_qi4:function (){var _qI3=_qO(this._qo); _qJ(_qI3,"dragDisable"); } ,_qI4:function (_qc){var _qI3=_qO(this._qo); _qi1=this._qo; _qj(document,"mousemove",_qo2, false); _qj(document,"touchmove",_qi2, false); _qj(document,"mouseup",_qI2, false); _qj(document,"touchend",_qO3, false); var _qo5=_qO5(_qI3); _qo5._ql5(_qi1); _qI1= false; } ,_ql2:function (_qc){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); var _qi5=_qO("_dragdummy");if (_qi5==null){_qi5=_qI3.cloneNode( true); _qi5.id="_dragdummy"; _qM(_qi5,_qo5._qI5()+"DragDummy"); document.body.appendChild(_qi5); _qi5.style.position="absolute"; }var _qo6=_qI0(_qc); _qi5.style.left=(_qo6._qO1+5)+"px"; _qi5.style.top=(_qo6._ql1+5)+"px"; } ,_qo3:function (_qc){var _qi5=_qO("_dragdummy"); if (_qi5)document.body.removeChild(_qi5); _qi1=null; _qd(document,"mousemove",_qo2, false); _qd(document,"touchmove",_qi2, false); _qd(document,"mouseup",_qI2, false); _qd(document,"touchend",_qO3, false); _qI1= true; }};function _qo4(_qc){ (new _qO2(this.id))._qI4(_qc); }function _qO4(_qc){ (new _qO2(this.id))._qI4(_qc); }function _qO6(_qo){ this._qo=_qo; this._ql3(); }_qO6.prototype= {_ql3:function (){} ,_qi3:function (){var _qI3=_qO(this._qo); _qK(_qI3,"dropobject"); _qj(_qI3,"mouseover",_ql6, false); _qj(_qI3,"mouseout",_qi6, false); _qj(_qI3,"mouseup",_qI6, false); _qj(_qI3,"touchend",_qo7, false); } ,_ql4:function (){var _qI3=_qO(this._qo); _qK(_qI3,"dragDisable"); } ,_qi4:function (){var _qI3=_qO(this._qo); _qJ(_qI3,"dragDisable"); } ,_qO7:function (_qc){if (_qi1!=null && _qi1!=this._qo){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); _qo5._ql7(this._qo); }return _qC(_qc); } ,_qi7:function (_qc){if (_qi1!=null && _qi1!=this._qo){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); _qo5._qI7(this._qo); }return _qC(_qc); } ,_qo8:function (_qc){if (_qI1== false){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); _qo5._qO8(_qi1,this._qo); _qI1= true; }} ,_ql8:function (_qc){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); _qo5._qO8(_qi1,this._qo); }};function _ql6(_qc){return (new _qO6(this.id))._qO7(_qc); }function _qi6(_qc){return (new _qO6(this.id))._qi7(_qc); }function _qI6(_qc){return (new _qO6(this.id))._qo8(_qc); }function _qo7(_qc){var _qi8=document.elementFromPoint(_qc.changedTouches[0].pageX,_qc.changedTouches[0].pageY); var _qI8=_qi8; while (_qI8 && _qI8.className.indexOf("dropobject") === -1)_qI8=_qI8.parentElement; if (_qI8 && _qI8.className.indexOf("dropobject")>-1)return (new _qO6(_qI8.id))._ql8(_qc); }function PivotField(_qo){ this._qo=_qo; this.id=_qo; }PivotField.prototype= {sort:function (_qo9){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); if (!_qo5._qO9("OnBeforeFieldSort", { "Sort":_qo9 } ,this ))return; _qo5._ql9(this._qo,"Sort", { "Sort":_qo9 } ); _qo5._qi9("OnFieldSort", { "Sort":_qo9 } ,this ); } ,_qI9:function (_qo9){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); if (!_qo5._qO9("OnBeforeGroupSort", { "Sort":_qo9 } ,this ))return; _qo5._ql9(this._qo,"SortGroup", { "Sort":_qo9 } ); _qo5._qi9("OnGroupSort", { "Sort":_qo9 } ,this ); } ,_qoa:function (_qo9){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); if (!_qo5._qO9("OnBeforeGroupSort", { "Sort":_qo9 } ,this ))return; _qo5._ql9(this._qo,"SortGroup", { "Sort":_qo9 } ); _qo5._qi9("OnGroupSort", { "Sort":_qo9 } ,this ); } ,_qOa:function (_qla,_qia){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); if (!_qo5._qO9("OnBeforeChangeSortData", { "FieldName":_qla,"Check":_qia } ,this ))return; _qo5._ql9(_qo5._qo,"ChangeSortData", { "FieldName":_qla,"Check":_qia } ); _qo5._qi9("OnChangeSortData", { "FieldName":_qla,"Check":_qia } ,this ); } ,filter_by_expression:function (_qIa,_qob,_qOb){if (!_qY(_qOb))_qOb=null; var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); if (!_qo5._qO9("OnBeforeFieldFilter", { "FilterBy": "Values","Expression":_qIa,"value1":_qob,"value2":_qOb } ,this ))return; _qo5._ql9(this._qo,"CloseFilterPanel", { "Command": "ok","FilterBy": "Values","Expression":_qIa,"value1":_qob,"value2":_qOb } ); _qo5._qi9("OnFieldFilter", { "FilterBy": "Values","Expression":_qIa,"value1":_qob,"value2":_qOb } ,this ); } ,filter_by_selection:function (_qlb,_qib){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); if (!_qo5._qO9("OnBeforeFieldFilter", { "FilterBy": "Options","IncludeAll":_qlb,"ExceptionList":_qib } ,this ))return; _qo5._ql9(this._qo,"CloseFilterPanel", { "Command": "ok","FilterBy": "Options","IncludeAll":_qlb,"ExceptionList":_qib } ); _qo5._qi9("OnFieldFilter", { "FilterBy": "Options","IncludeAll":_qlb,"ExceptionList":_qib } ,this ); } ,open_filter_panel:function (){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); var _qIb=_qx(_qO(_qo5._qo)); if (!_qo5._qO9("OnBeforeFilterPanelOpen", {} ,this ))return; _qo5._ql9(this._qo,"OpenFilterPanel", { "Width":_qIb.offsetWidth,"Height":_qIb.offsetHeight } ); _qo5._qi9("OnFilterPanelOpen", {} ,this ); } ,expand:function (){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); if (!_qo5._qO9("OnBeforeFieldExpand", {} ,this ))return; _qo5._ql9(this._qo,"Expand", {} ); _qo5._qi9("OnFieldExpand", {} ,this ); } ,collapse:function (){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); if (!_qo5._qO9("OnBeforeFieldCollapse", {} ,this ))return; _qoc._ql9(this._qo,"Collapse", {} ); _qo5._qi9("OnFieldCollapse", {} ,this ); }};function PivotGroup(_qo){ this._qo=_qo; this.id=_qo; }PivotGroup.prototype= {expand:function (){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); if (!_qo5._qO9("OnBeforeGroupExpand", {} ,this ))return; _qo5._ql9(this._qo,"Expand", {} ); _qo5._ql9(_qo5._qo,"Expand", {} ); _qo5._qi9("OnGroupExpand", {} ,this ); } ,collapse:function (){var _qI3=_qO(this._qo); var _qo5=_qO5(_qI3); if (!_qo5._qO9("OnBeforeGroupCollapse", {} ,this ))return; _qo5._ql9(this._qo,"Collapse", {} ); _qo5._ql9(_qo5._qo,"Collapse", {} ); _qo5._qi9("OnGroupCollapse", {} ,this ); }};function KoolPivotTable(_qo,_qOc,_qlc){ this._qo=_qo; this.id=_qo; this._qOc=_qOc; this._qlc=_qlc; this._ql3(); }var _qic=0; var _qIc=1; var _qod=2; var _qOd=3; KoolPivotTable.prototype= {_ql3:function (){var _qI3=_qO(this._qo); var _qld=this._qid(); if (_qn(_qx(_qI3)).indexOf("kptFilterPanel")>-1){var _qId=_qx(_qI3); var _qoe=_qx(_qId); var _qOe=_qu(_qoe); _qW(_qOe,_qT(_qId)-_qoe.offsetHeight); var _qle=_qId.id; var _qie=_qO(_qle+"_ok"); var _qIe=_qO(_qle+"_cancel"); _qj(_qie,"click",_qof, false); _qj(_qIe,"click",_qOf, false); var _qIf=_qO(_qle+"_select"); var _qob=_qO(_qle+"_value1"); var _qOb=_qO(_qle+"_value2"); var _qog=_qX(_qOb); switch (_qIf.options[_qIf.selectedIndex].value){case "none":_qp(_qob,0); _qp(_qog,0); break; case "between":case "not_between":_qp(_qob,1); _qp(_qog,1); break; default:_qp(_qob,1); _qp(_qog,0); break; }_qj(_qIf,"change",_qOg, false); _qj(_qO(_qle+"_include"),"change",_qlg, false); _qj(_qO(_qle+"_exclude"),"change",_qlg, false); var _qig=_qt("input","kptCheck",_qI3); for (var i=0; i
    <_qig.length; i++){_qj(_qig[i],"change",_qIg, false); }_qj(_qob,"focus",_qoh, false); _qj(_qOb,"focus",_qoh, false); _qj(_qO(_qle+"_selectall"),"change",_qOh, false); var _qlh= true; for (i=1; i
    <_qig.length; i++){if (!_qig[i].checked)_qlh= false; }_qO(_qle+"_selectall").checked=_qlh; if (_qO(_qle+"_hidden").value=="ie"){_qK(_qO(_qle+"_filterwithoptions"),"kptHighlight"); }else {_qK(_qO(_qle+"_filterwithvalues"),"kptHighlight"); }}else {if (_qld[this._qo]["AllowReorder"]){var _qih=new _qO6(this._qo+"_filterzone"); if (_qih)_qih._qi3(); var _qih=new _qO6(this._qo+"_datazone"); if (_qih)_qih._qi3(); var _qih=new _qO6(this._qo+"_columnzone"); if (_qih)_qih._qi3(); var _qih=new _qO6(this._qo+"_rowzone"); if (_qih)_qih._qi3(); var _qIh=_qt("span","kptFieldItem",_qI3); for (i=0; i
    <_qIh.length; i++){if (_qld[_qIh[i].id]["AllowReorder"]){ (new _qO2(_qIh[i].id))._qi3(); } (new _qO6(_qIh[i].id))._qi3(); }}var _qoi=_qt("span","kptFilterButton",_qI3); for (i=0; i
    <_qoi.length; i++){_qj(_qoi[i],"click",_qOi, false); _qj(_qoi[i],"mousedown",_qC, false); }var _qli=_qt("span","kptSortButton",_qI3); for (i=0; i
    <_qli.length; i++){_qj(_qli[i],"mousedown",_qC, false); }if (_qii[this._qo]){ this.redraw(); }else {_qj(window,"load",eval("__=function(){pivot_redraw(\""+this._qo+"\");}"), false); }}if (_qii[this._qo]){ this._qO9("OnLoad", {} ,this ); }else { this._qO9("OnInit", {} ,this ); this._qO9("OnLoad", {} ,this ); }if (_qii[this._qo]){_qIi=_qii[this._qo]["PostLoadEvent"]; for (_qi0 in _qIi){if (typeof _qIi[_qi0]!="function"){try { this._qO9(_qi0,_qIi[_qi0]); }catch (_qoj){}}}}_qii[this._qo]= { "PostLoadEvent":{}} ; } ,go_page:function (_qOj){ this._ql9(this._qo+"_pg","GoPage", { "PageIndex":_qOj } ); } ,change_page_size:function (_qlj){ this._ql9(this._qo+"_pg","ChangePageSize", { "PageSize":_qlj } ); } ,_qI5:function (){var _qI3=_qO(this._qo); return (_qn(_qI3)).replace("KPT",""); } ,_ql9:function (_qo,_qij,_qIj){var _qok=_qO(this._qo+"_cmd"); var _qOk=new Object(); if (_qok.value!=""){_qOk=eval("__="+_qok.value); }_qOk[_qo]= { "Command":_qij,"Args":_qIj } ; _qok.value=_qo0(_qOk); } ,_qid:function (){var _qlk=_qO(this._qo+"_viewstate"); return JSON.parse(_qlk.value); } ,_qik:function (_qld){var _qlk=_qO(this._qo+"_viewstate"); _qlk.value=JSON.stringify(_qld); } ,_ql5:function (_qIk){} ,_qol:function (_qi0){if (_qi0.toLowerCase()=="column")return _qic; if (_qi0.toLowerCase()=="row")return _qIc; if (_qi0.toLowerCase()=="filter")return _qod; if (_qi0.toLowerCase()=="data")return _qOd; } ,_qO8:function (_qIk,_qll){if (_qIk==_qll)return; var _qI3=_qO(this._qo); var _qld=this._qid(); var _qil=[]; var _qIl=null; var _qom=null; var _qOm=null; var _qIm=null; for (i=0; i
    <_qld[this._qo]["PVField_Ids"][_qod].length; i++){_qil[_qld[this._qo]["PVField_Ids"][_qod][i]]="Filter"; }for (i=0; i
    <_qld[this._qo]["PVField_Ids"][_qOd].length; i++){_qil[_qld[this._qo]["PVField_Ids"][_qOd][i]]="Data"; }for (i=0; i
    <_qld[this._qo]["PVField_Ids"][_qIc].length; i++){_qil[_qld[this._qo]["PVField_Ids"][_qIc][i]]="Row"; }for (i=0; i
    <_qld[this._qo]["PVField_Ids"][_qic].length; i++){_qil[_qld[this._qo]["PVField_Ids"][_qic][i]]="Column"; }_qIl=_qil[_qIk]; for (i=0; i
    <_qld[this._qo]["PVField_Ids"][this._qol(_qIl)].length; i++)if (_qIk==_qld[this._qo]["PVField_Ids"][this._qol(_qIl)][i]){_qOm=i; }if (_qI("_filterzone",_qll)>0){_qom="filter"; _qIm=_qld[this._qo]["PVField_Ids"][_qod].length; }else if (_qI("_datazone",_qll)>0){_qom="data"; _qIm=_qld[this._qo]["PVField_Ids"][_qOd].length; }else if (_qI("_columnzone",_qll)>0){_qom="column"; _qIm=_qld[this._qo]["PVField_Ids"][_qic].length; }else if (_qI("_rowzone",_qll)>0){_qom="row"; _qIm=_qld[this._qo]["PVField_Ids"][_qIc].length; }else {var _qom=_qil[_qll]; for (i=0; i
    <_qld[this._qo]["PVField_Ids"][this._qol(_qom)].length; i++)if (_qll==_qld[this._qo]["PVField_Ids"][this._qol(_qom)][i]){_qIm=i; }} this.move_field(_qIl,_qOm,_qom,_qIm); this.commit(); } ,_ql7:function (_qll){if (_qz())return; var _qI3=_qO(this._qo); var _qld=this._qid(); var _qon=null; if (_qI("zone",_qll)>0){var _qi0=_qll.replace("zone","").replace(this._qo+"_",""); _qi0=_qi0.substring(0,1).toUpperCase()+_qi0.substring(1); if (_qld[this._qo]["PVField_Ids"][this._qol(_qi0)].length>1){_qon=_qld[this._qo]["PVField_Ids"][this._qol(_qi0)][_qld[this._qo]["PVField_Ids"][this._qol(_qi0)].length-1]; }}else {}var _qOn=_qO(this._qo+"_topindicator"); var _qIn=_qO(this._qo+"_bottomindicator"); if (_qOn==null || _qIn==null){_qOn=_qa("div",_qI3); _qOn.id=this._qo+"_topindicator"; _qOn.style.position="absolute"; _qM(_qOn,"kptTopIndicator"); _qIn=_qa("div",_qI3); _qIn.id=this._qo+"_bottomindicator"; _qIn.style.position="absolute"; _qM(_qIn,"kptBottomIndicator"); }_qp(_qOn,1); _qp(_qIn,1); _qoo=_qOn.offsetHeight; _qOo=_qOn.offsetWidth; var _qIo=_qO(((_qon)?_qon:_qll)); var _qR=_qIo; var _qop=0,_qOp=0; var _qlp=_qIo.offsetWidth; while (_qR.id!=this._qo){_qop+=_qR.offsetTop; _qOp+=_qR.offsetLeft; _qR=_qR.offsetParent; }var _qip=_qIo.offsetHeight; if (_qon){_qOn.style.top=(_qop-_qoo)+"px"; _qOn.style.left=(_qOp+_qlp+3-_qOo/2)+"px"; _qIn.style.top=(_qop+_qip)+"px"; _qIn.style.left=(_qOp+_qlp+3-_qOo/2)+"px"; }else {_qOn.style.top=(_qop-_qoo)+"px"; _qOn.style.left=(_qOp-_qOo/2-3)+"px"; _qIn.style.top=(_qop+_qip)+"px"; _qIn.style.left=(_qOp-_qOo/2-3)+"px"; }} ,_qI7:function (_qll){var _qOn=_qO(this._qo+"_topindicator"); var _qIn=_qO(this._qo+"_bottomindicator"); if (_qOn){_qp(_qOn,0); _qp(_qIn,0); }} ,get_field:function (_qIp){var _qI3=_qO(this._qo); var _qld=this._qid(); _qoq=_qt("span","kptFieldItem",_qI3); for (i=0; i
    <_qoq.length; i++){if (_qld[_qoq[i].id]["FieldName"]==_qIp){return new PivotField(_qoq[i].id); }}return false; } ,move_field:function (_qIl,_qOm,_qom,_qIm){if (!this._qO9("OnBeforeFieldMove", { "From":_qIl,"FromPosition":_qOm,"To":_qom,"ToPosition":_qIm } ,this ))return; this._ql9(this._qo,"MoveField", { "From":_qIl,"FromPosition":_qOm,"To":_qom,"ToPosition":_qIm } ); this._qi9("OnFieldMove", { "From":_qIl,"FromPosition":_qOm,"To":_qom,"ToPosition":_qIm } ,this ); this.commit(); } ,commit:function (){if (!this._qO9("OnBeforeCommit", {} ,this ))return; if (_qz())return; if (this._qOc){var _qOq=eval(this._qo+"_updatepanel"); _qOq.update((this._qlc!="")?this._qlc:null); }else {var _qlq=_qO(this._qo); while (_qlq.nodeName!="FORM"){if (_qlq.nodeName=="BODY")return; _qlq=_qX(_qlq); }_qlq.submit(); }var _qiq=_qq("div","kptStatus",_qO(this._qo)); if (_qiq)_qK(_qiq,"kptLoading"); this._qO9("OnCommit", {} ,this ); } ,attach_data:function (_qi0,_qia){if (this._qOc){var _qOq=eval(this._qo+"_updatepanel"); _qOq.attachData(_qi0,_qia); }} ,_qIq:function (){ this._ql9(this._qo,"Refresh", {} ); } ,redraw:function (){var _qI3=_qO(this._qo); var _qor=_qq("div","kptContentDiv",_qI3); var _qOr=_qx(_qor); var _qlr=_qq("div","kptColumnHeaderDiv",_qI3); var _qir=_qx(_qlr); var _qIr=_qq("div","kptRowHeaderDiv",_qI3); var _qos=_qx(_qIr); var _qF=_qt("div","kptColumnHeaderDiv",_qI3); if (_qF.length>0){var _qlr=_qF[0]; _qW(_qx(_qlr),_qX(_qlr).offsetHeight); }var _qld=this._qid(); if (_qld[this._qo]["HorizontalScrolling"]){var _qOs=_qX(_qor); var _qls=_qq("td","kptRowHeaderZone",_qI3); var _qis=_qq("div","kptHorizontalScrollDiv",_qI3); var _qIs=_qx(_qis); var _qot=_qt("col","",_qlr); var _qOt=_qt("col","",_qor); var _qlt=_qt("td","",_qlr.firstChild.lastChild.lastChild); var _qit=_qt("td","",_qor.firstChild.lastChild.lastChild); for (i=0; i
    <_qOt.length; i++){var _qIt=(_qit[i].offsetWidth>_qlt[i].offsetWidth)?_qit[i].offsetWidth:_qlt[i].offsetWidth; _qV(_qOt[i],_qIt); _qV(_qot[i],_qIt); }var _qou=(_qOr.offsetWidth>_qOs.offsetWidth)?_qOr.offsetWidth:_qOs.offsetWidth; _qOr.style.tableLayout="fixed"; _qir.style.tableLayout="fixed"; _qV(_qOr,_qou); _qV(_qir,_qou); var _qOu=_qv(_qI3); var _qlu=_qOu-_qls.offsetWidth-((_qld[this._qo]["VerticalScrolling"])?18: 0); _qV(_qor,_qlu); _qV(_qlr,_qlu); _qV(_qis,_qis.offsetWidth); _qV(_qIs,(_qOr.offsetWidth/_qlu)*_qis.offsetWidth); _qj(_qis,"scroll",_qiu, false); _qis.scrollLeft=_qld[this._qo]["ScrollLeft"]; }_qOr.style.tableLayout="fixed"; _qir.style.tableLayout="fixed"; var _qF=_qt("div","kptRowHeaderDiv",_qI3); if (_qF.length>0){var _qIr=_qF[0]; var _qIu=_qt("tr","",_qIr); var _qov=_qt("tr","",_qor); for (var i=0; i
    <_qIu.length; i++){_qOv=_qIu[i].lastChild.offsetHeight; if (_qOv
    <_qov[i].offsetHeight){_qOv=_qov[i].offsetHeight; }_qW(_qIu[i],_qOv); _qW(_qov[i],_qOv); }}if (_qld[this._qo]["VerticalScrolling"]){var _qlv=_qT(_qI3); var _qIb=_qx(_qI3); var _qiv=_qq("div","kptVerticalScrollDiv",_qI3); var _qIv=_qx(_qiv); var _qow=_qX(_qiv); var _qOv=_qor.offsetHeight-(_qIb.offsetHeight-_qI3.offsetHeight); _qW(_qor,_qOv); _qW(_qIr,_qOv); _qW(_qiv,_qow.offsetHeight); _qW(_qIv,(_qOr.offsetHeight/_qOv)*_qow.offsetHeight); _qj(_qiv,"scroll",_qOw, false); _qj(_qor,"mousewheel",_qlw, false); _qj(_qor,"DOMMouseScroll",_qlw, false); _qj(_qIr,"mousewheel",_qlw, false); _qj(_qIr,"DOMMouseScroll",_qlw, false); _qiv.scrollTop=_qld[this._qo]["ScrollTop"]; }} ,_qiw:function (_qis){var _qI3=_qO(this._qo); var _qld=this._qid(); var _qor=_qq("div","kptContentDiv",_qI3); var _qOr=_qx(_qor); var _qlr=_qq("div","kptColumnHeaderDiv",_qI3); var _qir=_qx(_qlr); var _qIw=(_qis.scrollLeft/_qis.scrollWidth)*_qOr.offsetWidth; _qOr.style.left=(-_qIw)+"px"; _qOr.style.left=(-_qIw)+"px"; _qir.style.left=(-_qIw)+"px"; _qir.style.left=(-_qIw)+"px"; _qld[this._qo]["ScrollLeft"]=parseInt(_qis.scrollLeft); this._qik(_qld); } ,_qox:function (_qiv){var _qI3=_qO(this._qo); var _qld=this._qid(); var _qor=_qq("div","kptContentDiv",_qI3); var _qOr=_qx(_qor); var _qIr=_qq("div","kptRowHeaderDiv",_qI3); var _qos=_qx(_qIr); var _qOx=(_qiv.scrollTop/_qiv.scrollHeight)*_qOr.offsetHeight; _qOr.style.top=(-_qOx)+"px"; _qOr.style.top=(-_qOx)+"px"; _qos.style.top=(-_qOx)+"px"; _qos.style.top=(-_qOx)+"px"; _qld[this._qo]["ScrollTop"]=parseInt(_qiv.scrollTop); this._qik(_qld); } ,_qlx:function (_qc){var _qix=0; if (_qc.wheelDelta){_qix=_qc.wheelDelta/120; }else if (_qc.detail){_qix=_qc.detail/-3; }var _qI3=_qO(this._qo); var _qiv=_qq("div","kptVerticalScrollDiv",_qI3); var _qIx=_qiv.scrollTop; _qiv.scrollTop=_qiv.scrollTop-_qix*38; } ,_qoy:function (_qI3,_qc){var _qle=_qX(_qI3).id; (new PivotField(_qle)).open_filter_panel(); this.commit(); } ,_qOy:function (_qc){var _qI3=_qO(this._qo); var _qly=_qx(_qI3).id; var _qiy=_qO(_qly+"_hidden"); if (_qiy.value=="vl"){var _qIf=_qO(_qly+"_select"); var _qIa=_qIf.options[_qIf.selectedIndex].value; var _qob=encodeURIComponent(_qO(_qly+"_value1").value); var _qOb=encodeURIComponent(_qO(_qly+"_value2").value); if (!this._qO9("OnBeforeFieldFilter", { "FilterBy": "Values","Expression":_qIa,"value1":_qob,"value2":_qOb } ,this ))return; this._ql9(_qly,"CloseFilterPanel", { "Command": "ok","FilterBy": "Values","Expression":_qIa,"value1":_qob,"value2":_qOb } ); this._qi9("OnFieldFilter", { "FilterBy": "Values","Expression":_qIa,"value1":_qob,"value2":_qOb } ,this ); }else {var _qlb= true; var _qib=[]; var _qIh=_qt("input","kptCheck",_qI3); var _qIy=_qIh[0]; var _qoz=_qO(_qly+"_include").checked; _qIh.splice(0,1); if (_qIy.checked){if (_qoz){_qlb= true; _qOz=[]; }else {_qlb= false; _qib=[]; }}else {var _qlz=0; var _qiz=[]; var _qIz=[]; var _qo10; for (var i=0; i
    <_qIh.length; i++){if (_qIh[i].checked){_qiz.push(_qIh[i]); }else {_qIz.push(_qIh[i]); }}if (_qoz){if (_qiz.length>_qIz.length){_qlb= true; _qo10=_qIz; }else {_qlb= false; _qo10=_qiz; }}else {if (_qiz.length>_qIz.length){_qlb= false; _qo10=_qIz; }else {_qlb= true; _qo10=_qiz; }}for (var i=0; i
    <_qo10.length; i++){var _qO10=_qu(_qo10[i]); _qib.push(encodeURIComponent(_qO10.innerHTML)); }}if (!this._qO9("OnBeforeFieldFilter", { "FilterBy": "Options","IncludeAll":_qlb,"ExceptionList":_qib } ,this ))return; this._ql9(_qly,"CloseFilterPanel", { "Command": "ok","FilterBy": "Options","IncludeAll":_qlb,"ExceptionList":_qib } ); this._qi9("OnFieldFilter", { "FilterBy": "Options","IncludeAll":_qlb,"ExceptionList":_qib } ,this ); } this.commit(); } ,_ql10:function (_qc){var _qI3=_qO(this._qo); this._ql9(_qx(_qI3).id,"CloseFilterPanel", { "Command": "cancel" } ); this.commit(); } ,_qi10:function (_qI10){var _qle=_qX(_qI10).id; (new PivotField(_qle)).sort((_qI("SortAsc",_qn(_qI10))>0)?"desc": "asc"); this.commit(); } ,_qo11:function (_qI10){var _qle=_qX(_qI10).id; (new PivotField(_qle))._qI9((_qI("SortAsc",_qn(_qI10))>0)?"desc": "asc"); this.commit(); } ,_qO11:function (_qI10){var _qle=_qX(_qI10).id; (new PivotField(_qle))._qoa((_qI("SortAsc",_qn(_qI10))>0)?"desc": "asc"); this.commit(); } ,_ql11:function (_qi11){var _qle=_qX(_qi11).id; (new PivotField(_qle))._qOa(_qi11.value,_qi11.checked?"checked": "unchecked"); this.commit(); } ,_qO9:function (_qi0,_qI11,_qo12){var _qld=this._qid(); if (_qY(_qld[this._qo]["ClientEvents"]) && _qY(_qld[this._qo]["ClientEvents"][_qi0])){var _qO12=eval(_qld[this._qo]["ClientEvents"][_qi0]); return _qO12((_qo12!=null)?_qo12: this,_qI11); }else {return true; }} ,_qi9:function (_qi0,_qI11){_qii[this._qo]["PostLoadEvent"][_qi0]=_qI11; }};function _qOi(_qc){ (_qO5(this ))._qoy(this,_qc); }function _qof(_qc){ (_qO5(this ))._qOy(_qc); }function _qOf(_qc){ (_qO5(this ))._ql10(_qc); }function _qO5(_qI3){var _ql12=_qX(_qI3); while (_ql12.nodeName!="DIV" || _qI("KPT",_qn(_ql12))<0){_ql12=_qX(_ql12); if (_ql12.nodeName=="BODY")return null; }return eval(_ql12.id); }function get_pivot(_qI3){return _qO5(_qI3); }function pivot_gopage(_qI3,_qi12){var _qo5=_qO5(_qI3); _qo5.go_page(_qi12); _qo5.commit(); }function pivot_group_toggle(_qI3){var _qI12=_qX(_qI3,1); var _qo13=_qt("span","kptExpand",_qI12); if (_qo13.length>0){ (new PivotGroup(_qI12.id)).collapse(); }else { (new PivotGroup(_qI12.id)).expand(); }_qO5(_qI3).commit(); }function _qOg(_qc){var _qle=this.id.replace("_select",""); var _qob=_qO(_qle+"_value1"); var _qog=_qX(_qO(_qle+"_value2")); switch (this.options[this.selectedIndex].value){case "none":_qp(_qob,0); _qp(_qog,0); break; case "between":case "not_between":_qp(_qob,1); _qp(_qog,1); _qob.focus(); break; default:_qp(_qob,1); _qp(_qog,0); _qob.focus(); break; }_qO(_qle+"_hidden").value="vl"; _qJ(_qO(_qle+"_filterwithoptions"),"kptHighlight"); _qK(_qO(_qle+"_filterwithvalues"),"kptHighlight"); }function _qoh(){var _qle=this.id.replace("_value1","").replace("_value2",""); _qO(_qle+"_hidden").value="vl"; _qJ(_qO(_qle+"_filterwithoptions"),"kptHighlight"); _qK(_qO(_qle+"_filterwithvalues"),"kptHighlight"); }function _qlg(_qc){var _qle=this.id.replace("_include","").replace("_exclude",""); _qO(_qle+"_hidden").value="ie"; _qK(_qO(_qle+"_filterwithoptions"),"kptHighlight"); _qJ(_qO(_qle+"_filterwithvalues"),"kptHighlight"); }function _qIg(_qc){var _qo5=_qO5(this ); var _qle=_qx(_qO(_qo5._qo)).id; _qO(_qle+"_hidden").value="ie"; _qK(_qO(_qle+"_filterwithoptions"),"kptHighlight"); _qJ(_qO(_qle+"_filterwithvalues"),"kptHighlight"); if (_qI("_selectall",this.id)<0){var _qI3=_qO(_qle); var _qIh=_qt("input","kptCheck",_qI3); var _qlh= true; for (i=1; i
    <_qIh.length; i++){if (!_qIh[i].checked)_qlh= false; }_qO(_qle+"_selectall").checked=_qlh; }}function _qOh(_qc){var _qo=this.id.replace("_selectall",""); var _qI3=_qO(_qo); var _qIh=_qt("input","kptCheck",_qI3); for (i=0; i
    <_qIh.length; i++){if (_qIh[i]!=this ){_qIh[i].checked=this.checked; }}}function _qiu(_qc){ (_qO5(this ))._qiw(this ); }function _qOw(_qc){ (_qO5(this ))._qox(this ); }function _qlw(_qc){ (_qO5(this ))._qlx(_qc); return _qB(_qc); }function pivot_redraw(_qo){ (eval(_qo)).redraw(); }function pivot_sort_toggle(_qI3){ (_qO5(_qI3))._qi10(_qI3); }function pivot_group_sort_toggle(_qI3){ (_qO5(_qI3))._qo11(_qI3); }function _qO13(_qI3){ (_qO5(_qI3))._qO11(_qI3); }function _ql13(_qI3){ (_qO5(_qI3))._ql11(_qI3); }function pivot_pagesize_select_onchange(_qI3){var _qi13=_qI3.options[_qI3.selectedIndex].value; var _qo5=_qO5(_qI3); _qo5.change_page_size(_qi13); _qo5.commit(); }var _qii=new Array(); if (typeof(__KPTInits)!="undefined" && _qY(__KPTInits)){for (var i=0; i
    <__KPTInits.length; i++){__KPTInits[i](); }} <?php _qO5();
	_qlo();
}
if(!class_exists("KoolPivotTable", false)){
	function _qlp($_ql1, $_qO1, $_ql2){
		return _qOp($_ql1, $_qO1, $_ql2);
	}

	function _qlq($_ql1, $_qO1, $_ql2){
		return preg_replace($_ql1, $_qO1, $_ql2);
	}

	require_once(dirname(__FILE__) . '/PivotIValueMap.php');
	function groups_compare_desc($_qOq, $_qlr){
		if($_qOq->_qls == $_qlr->_qls){
			return 0;
		}
		if($_qOq->_qls < $_qlr->_qls){
			return 1;
		}
		if($_qOq->_qls > $_qlr->_qls){
			return -1;
		}
	}

	function groups_compare_asc($_qOq, $_qlr){
		if($_qOq->_qls == $_qlr->_qls){
			return 0;
		}
		if($_qOq->_qls < $_qlr->_qls){
			return -1;
		}
		if($_qOq->_qls > $_qlr->_qls){
			return 1;
		}
	}

	function _qOs($_qlt, $_qOt){
		foreach($_qOt as $_qlk => $_qlu){
			$_qOu = $_qlk;
			if($_qlt === $_qlu){
				return $_qOu;
			}
		}

		return false;
	}

	function _qlv(){
		$_qOv = func_num_args();
		$_qlw = func_get_args();
		for($_qO9 = 1; $_qO9 < $_qOv; $_qO9++){
			$_qOw = _qOs($_qlw[$_qO9], $_qlw[0]);
			echo "\044" . $_qOw . "\040\075 " . $_qlw[$_qO9] . "\074br />\n";
		}
	}

	function _qlx(){
		$_qOx = '<<';
		$_qly = '>>';
		$_qOv = func_num_args();
		$_qlw = func_get_args();
		for($_qO9 = 1; $_qO9 < $_qOv; $_qO9++){
			$_qOw = _qOs($_qlw[$_qO9], $_qlw[0]);
			echo $_qOx . "\040\044" . $_qOw . "\040= ";
			print_r($_qlw[$_qO9]);
			echo $_qly . "<br\076";
		}
	}

	function _qOy(){
		$_qOx = '<<';
		$_qly = '>>';
		$_qOv = func_num_args();
		$_qlw = func_get_args();
		for($_qO9 = 2; $_qO9 < $_qOv; $_qO9++){
			$_qOw = _qOs($_qlw[$_qO9], $_qlw[0]);
			echo $_qOx . "\040\044" . $_qOw . "\055>" . $_qlw[1] . "\040= ";
			print_r($_qlw[$_qO9]->$_qlw[1]);
			echo $_qly . "\074br>";
		}
	}

	class _qlz{
		public static function _qOz($_ql10){
			if($_ql10 == _qlz::_qO10){
				return _qlz::_ql11;
			}else if($_ql10 == _qlz::_ql11){
				return _qlz::_qO10;
			}else{
				return null;
			}
		}

		const _qO11 = "grand";
		const _ql12 = "\174\055>grand\074-|";
		const _qO12 = "\047grand'";
		const _ql13 = "|->Default Last Field<-|";
		const _qO13 = "name";
		const _ql14 = "data";
		const _qO14 = "filter";
		const _ql15 = "column";
		const _qO15 = "row";
		const _qO10 = "asc";
		const _ql11 = "desc";
		const _ql16 = "field";
		const _qO16 = "pivotField";
		const _ql17 = "value";
		const _qO17 = "comparison operator";
		const _ql18 = "alias";
		const _qO18 = "Direction";
		const _ql19 = "Sort\126alue";
		const _qO19 = "select";
		const _ql1a = "condition";
		const _qO1a = "group";
		const _ql1b = "Gro\165\160\126alue";
		const _qO1b = "FieldName";
		const _ql1c = "Field\111d";
		const _qO1c = "tabledata";
		const _ql1d = "\103ommand";
		const _qO1d = "Expand";
		const _ql1e = "Collapse";
		const _qO1e = "SortGro\165p";
		const _ql1f = "\122efresh";
		const _qO1f = "\115oveField";
		const _ql1g = "cache val\165es";
		const _qO1g = "cache filters";
		const _ql1h = "cache filter conditions";
		const _qO1h = "cache\040\150eaders";
		const _ql1i = "\114evel";
		const _qO1i = "Dept\150";
		const _ql1j = "\114ength";
		const _qO1j = "\123ort";
		const _ql1k = "SortStat\165s";
		const _qO1k = "\105xceptionList";
		const _ql1l = "Include\101ll";
		const _qO1l = "AllowReorder";
		const _ql1m = "FilterPanel\117pen";
		const _qO1m = "_field_type";
		const _ql1n = "PanelWidth";
		const _qO1n = "PanelHeight";
		const _ql1o = "e\161ual_to";
		const _qO1o = "not_eq\165al_to";
		const _ql1p = "less_t\150an";
		const _qO1p = "greater\137than";
		const _ql1q = "less_than_or_equal\137to";
		const _qO1q = "greater\137than_or_equal\137to";
		const _ql1r = "between";
		const _qO1r = "not_between";
		const _ql1s = "contain";
		const _qO1s = "start_with";
		const _ql1t = "end_wit\150";
		const _qO1t = "Ex\160andable";
		const _ql1u = "\126alueChain";
		const _qO1u = "\123\121LCondition";
		const _ql1v = "nested\123\121\114Condition";
		const _qO1v = "sqlValues";
		const _ql1w = "allConditions";
		const _qO1w = "allNestedConditions";
		const _ql1x = "\125nique\111D";
		const _qO1x = "\123\165bGrou\160\111ds";
		const _qlz = "\113ey";
		const _ql1y = "none";
		const _qO1y = "\120ageIndex";
		const _ql1z = "\120ageSi\172e";
		const _qO1z = "TotalRows";
		const _ql20 = "\124otalPages";
		const _qO20 = "\107oPage";
		const _ql21 = "Args";
		const _qO21 = "ChangePage\123ize";
		const _ql22 = "PVField_Ids";
		const _qO22 = "Cac\150eID";
		const _ql23 = "\110orizontalScrolling";
		const _qO23 = "VerticalScrolling";
		const _ql24 = "\123crollTo\160";
		const _qO24 = "ScrollLeft";
		const _ql25 = "\103lient\105vents";
		const _qO25 = "\107rou\160sTo\123ort";
		const _ql26 = "K\120\124Sort";
		const _qO26 = "From";
		const _ql27 = "To";
		const _qO27 = "\106romPosition";
		const _ql28 = "\124o\120osition";
		const _qO28 = "_viewstate";
		const _ql29 = "\107o";
		const _qO29 = "Next";
		const _ql2a = "\120rev";
		const _qO2a = "\114ast";
		const _ql2b = "First";
		const _qO2b = "O\153";
		const _ql2c = "ok";
		const _qO2c = "\103ancel";
		const _ql2d = "Incl\165des";
		const _qO2d = "Excl\165des";
		const _ql2e = "Select\137All";
		const _qO2e = "Grand\137Total";
		const _ql2f = "Category\137\124otal";
		const _qO2f = "Categor\171_\123\165m";
		const _ql2g = "\103ategor\171\137Co\165nt";
		const _qO2g = "\103ategory\137\115in";
		const _ql2h = "\103ategory\137\115ax";
		const _qO2h = "\103ategory_\101verage";
		const _ql2i = "Category\137\120ercentage\123\165m";
		const _qO2i = "Category_\120ercentage\103o\165nt";
		const _ql2j = "\120ageInfoTem\160late";
		const _qO2j = "Man\165alPagerTemplate";
		const _ql2k = "\120ageSi\172eText";
		const _qO2k = "Next\120age\124oolTi\160";
		const _ql2l = "PrevPageToolTi\160";
		const _qO2l = "\106irstPageToolTi\160";
		const _ql2m = "Last\120age\124ool\124ip";
		const _qO2m = "SortHeader\124oolTi\160";
		const _ql2n = "\123ort\101scTool\124ip";
		const _qO2n = "\123ort\104esc\124ool\124i\160";
		const _ql2o = "SortNone\124ool\124ip";
		const _qO2o = "\103ol\165mnZoneEm\160tyMessage";
		const _ql2p = "Row\132one\105mpt\171Message";
		const _qO2p = "FilterZoneEmpt\171\115essage";
		const _ql2q = "\104ataZone\105mpt\171\115essage";
		const _qO2q = "Drag_To\137Reorder";
		const _ql2r = "\104one";
		const _qO2r = "Loading";
		const _ql2s = "and";
		const _qO2s = "\123orted_\101sc";
		const _ql2t = "\123orted_Desc";
		const _qO2t = "\106iltering";
		const _ql2u = "DataField\124oSort";
		const _qO2u = "Change\123ortData";
		const _ql2v = "Check";
		const _qO2v = "c\150ecked";
		const _ql2w = "unc\150ecked";
		const _qO2w = "Widt\150";
		const _ql2x = "Heig\150t";
		const _qO2x = "\117\160enFilterPanel";
		const _ql2y = "Close\106ilterPanel";
		const _qO2y = "FilterBy";
		const _ql2z = "\105xpression";
		const _qO2z = "aggregateFunction";
		const _ql30 = "nestedField";
		const _qO30 = "value1";
		const _ql31 = "value2";
		const _qO31 = "\117\160tions";
		const _ql32 = "Values";
		const _qO32 = "r";
		const _ql33 = "c";
		const _qO33 = "sort\123tate";
		const _ql34 = "initSort";
		const _qO34 = "groupSort";
		const _ql35 = "fieldSort";
		const _qO35 = "top_N";
		const _ql36 = "bottom\137N";
		const _qO36 = "top_percent";
		const _ql37 = "bottom\137\160ercent";
	}

	class _qO37{
		const _ql15 = 0;
		const _qO15 = 1;
		const _qO14 = 2;
		const _ql14 = 3;
		public static $_ql38 = array(
			_qlz::_ql15 => _qO37::_ql15,
			_qlz::_qO15 => _qO37::_qO15,
			_qlz::_qO14 => _qO37::_qO14,
			_qlz::_ql14 => _qO37::_ql14
		);
		public static $_qO38 = array(
			_qO37::_ql15 => _qlz::_ql15,
			_qO37::_qO15 => _qlz::_qO15,
			_qO37::_qO14 => _qlz::_qO14,
			_qO37::_ql14 => _qlz::_ql14
		);
		public static $_ql39 = array(
			"table"                        => "kptTable\105x",
			"cell"                      => "\153\160tCellEx",
			"expandedCell"              => "kptEx\160anded\103ellEx",
			"dataCell"                        => "\153\160tDataCellEx",
			"emptyData\103ell"          => "kpt\105m\160tyData\103ell\105x",
			"columnHeader"              => "\153\160tColumn\110eaderEx",
			"rowHeader"                 => "\153ptRowHeaderEx",
			"totalCol\165mn"               => "kpt\103olumnTotalCellEx",
			"totalRow"                  => "kpt\122owTotal\103ellEx",
			"col\165mnHeaderTotal"   => "kptCol\165mnHeaderTotalEx",
			"rowHeader\124otal"            => "\153\160tRowHeaderTotal\105x",
			"data\104esc"                  => "\153ptData\104escCell\105x",
			"filterZone"                => "\153\160tFilter\132oneEx",
			"data\132one"                  => "\153ptDataZoneEx",
			"col\165mnZone"                => "kptCol\165mnZone\105x",
			"row\132one"                   => "kptRow\132oneEx",
			"\150orizontal\123croll" => "kptHori\172ontalScrolling\105x",
			"vertical\123croll"   => "kptVerticalScrolling\105x",
			"field\111tem"              => "\153\160tField\111tem\105x",
		);

		public static function _qO39($_ql3a){
			$_qO3a = "";
			if(is_string($_ql3a)){
				$_ql3b = explode("\040", trim($_ql3a));
				foreach($_ql3b as $_qO3b){
					if(!empty($_qO3b)){
						if(isset (_qO37::$_ql39[$_qO3b])){
							$_qO3a .= _qO37::$_ql39[$_qO3b] . "\040";
						}else{
							$_qO3a .= $_qO3b . " ";
						}
					}
				}
			}

			return $_qO3a;
		}

		public static function _ql3c($_qOn){
			$_ql6 = array();
			if(is_array($_qOn)){
				foreach($_qOn as $_qO3c => $_ql3d){
					$_ql6[_qO37::$_ql39[$_qO3c]] = $_ql3d;
				}
			}

			return $_ql6;
		}

		public static function _qOz($_qO3d){
			if($_qO3d == _qO37::_qO15){
				return _qO37::_ql15;
			}else if($_qO3d == _qO37::_ql15){
				return _qO37::_qO15;
			}else{
				return null;
			}
		}
	}

	class _ql3e{
		const _ql2s = " \101ND ";
		const _qO3e = "\040\117R ";
		const _ql3f = " XOR ";
		const _qO3f = "AVG";
		const _ql3g = "SUM";
		const _qO3g = "COUNT";
		const _ql3h = "\115\111N";
		const _qO3h = "M\101\130";
		const _ql3i = "\075";
		const _qO3i = "\041=";
		const _ql3j = "<";
		const _qO3j = ">";
		const _ql3k = "<=";
		const _qO3k = "\076=";
		const _ql3l = " \114\111KE ";
		const _qO3l = "\045";
		const _ql3m = true;
		const _qO3m = false;
	}

	interface _ql3n{
		function _qO3n($_qOn);

		function _ql3o();

		function _qO3o();

		function _ql3p();
	}

	class _qO3p implements _ql3n{
		private $_ql3q = array();

		function _qO3n($_qOn){
			array_push($this->_ql3q, $_qOn);
		}

		function _ql3o(){
			$_qOn = array_pop($this->_ql3q);

			return $_qOn;
		}

		function _qO3o(){
			$this->_ql3q = array();
		}

		function _ql3p(){
			return empty($this->_ql3q);
		}

		function _qO3q(){
		}
	}

	class _ql3r implements _ql3n{
		private $_qO3r = array();

		function _qO3n($_qOn){
			array_push($this->_qO3r, $_qOn);
		}

		function _ql3o(){
			$_qOn = array_splice($this->_qO3r, 0, 1);
			if(!empty($_qOn)){
				return $_qOn[0];
			}else{
				return null;
			}
		}

		function _qO3o(){
			$this->_qO3r = array();
		}

		function _ql3p(){
			return empty($this->_qO3r);
		}

		function _qO3q(){
		}
	}

	class _ql3s implements _ql3n{
		private $_qO3s = array();

		function _qO3n($_qOn){
			foreach($this->_qO3s as $_qO3c => $_ql3d){
				if($_qOn < $_ql3d){
					array_splice($this->_qO3s, $_qO3c, 0, $_qOn);

					return $this;
				}else if($_qOn == $_ql3d){
					return $this;
				}
			}
			array_push($this->_qO3s, $_qOn);

			return $this;
		}

		function _ql3o(){
			return array_pop($this->_qO3s);
		}

		function _qO3o(){
			$this->_qO3s = array();
		}

		function _ql3p(){
			return empty($this->_qO3s);
		}
	}

	class _ql3t{
		var $Expand = false;
		var $_qO3t;
		var $_ql3u;
		var $Value;
		protected $_qO3u = 1;
		protected $_ql3v = 0;
		protected $_qO3v = 1;
		protected $_ql3w = 0;
		protected $_qO3w;
		protected $_ql3x = true;

		function _qO3x($_ql3y){
			$_ql3y->_qO3t                           = $this;
			$this->_ql3u[strtolower($_ql3y->Value)] = $_ql3y;
			if($this->Expand){
				$_qO3y = $_ql3y->_qO3v;
				$_ql3z = $_ql3y->_ql3w;
				$_qO3z = $_ql3y;
				$_ql40 = $this;
				while($_ql40 != null){
					$_qO40 = $_qO3z->_ql3v - $_ql40->_ql3v + 1;
					if($_qO40 > 0){
						$_ql40->_ql3v += $_qO40;
					}
					$_ql40->_qO3v += $_qO3y;
					$_ql40->_ql3w += $_ql3z;
					$_qO3z        = $_ql40;
					$_ql40        = $_ql40->_qO3t;
				}
			}
			$this->_ql41($_ql3y, $this->_qO3u);
		}

		function _qO41($_qOn = ""){
			if(!empty($_qOn)){
				if(is_string($_qOn)){
					return isset ($this->_ql3u[strtolower($_qOn)]);
				}else if(is_int($_qOn)){
					$_ql6 = array_values($this->_ql3u);

					return isset ($_ql6[$_qOn]) && $_ql6[$_qOn]->_ql42();
				}else{
					return false;
				}
			}else{
				return (!empty($this->_ql3u));
			}
		}

		function _qO42($_qOn = ""){
			if($this->Expand){
				if(!empty($_qOn)){
					if(is_string($_qOn)){
						return isset ($this->_ql3u[strtolower($_qOn)]);
					}else if(is_int($_qOn)){
						$_ql6 = array_values($this->_ql3u);

						return isset ($_ql6[$_qOn]) && $_ql6[$_qOn]->_ql42();
					}else{
						return false;
					}
				}else{
					return (!empty($this->_ql3u));
				}
			}else{
				return false;
			}
		}

		function _ql43($_qOn = 0){
			if($this->_qO41($_qOn)){
				if(is_string($_qOn)){
					return $this->_ql3u[strtolower($_qOn)];
				}else if(is_int($_qOn)){
					$_ql6 = array_values($this->_ql3u);

					return $_ql6[$_qOn];
				}else{
					return null;
				}
			}else{
				return null;
			}
		}

		function _qO43(){
			$_ql6 = array();
			foreach($this->_ql3u as $_ql44){
				if($_ql44->_ql42()){
					array_push($_ql6, $_ql44);
				}
			}

			return $_ql6;
		}

		function _qO44(){
			return $this->_qO3t;
		}

		function _ql41($_ql3y, $_ql45){
			$_qO3s = new _qO3p();
			$_qO3s->_qO3n($_ql3y);
			while(!$_qO3s->_ql3p()){
				$_qO45        = $_qO3s->_ql3o();
				$_qO45->_qO3u += $_ql45;
				foreach($_qO45->_ql3u as $_ql46){
					$_qO3s->_qO3n($_ql46);
				}
			}
		}

		function _qO46($_qlu){
			$this->_qO3u = $_qlu;

			return $this;
		}

		function _ql47(){
			return $this->_qO3u - 3;
		}

		function _qO47(){
			return $this->_qO3u;
		}

		function _ql48($_qlu){
			$this->_ql3v = $_qlu;

			return $this;
		}

		function _qO48(){
			return $this->_ql3v;
		}

		function _ql49($_qlu){
			$this->_qO3v = $_qlu;

			return $this;
		}

		function _qO49($_qlu){
			$this->_qO3v += $_qlu;

			return $this;
		}

		function _ql4a(){
			return $this->_qO3v;
		}

		function _qO4a(){
			return $this->_ql3w;
		}

		function _ql4b(){
			return $this->_qO3w;
		}

		function _qO4b($_qOn){
			$this->_qO3w = $_qOn;

			return $this;
		}

		function _ql4c($_qlu = true){
			$this->_ql3x = $_qlu;

			return $this;
		}

		function _ql42(){
			return $this->_ql3x;
		}

		function _qO4c(&$_ql4d, &$_qO4d, &$_ql4e, &$_qO4e, &$_ql4f){
			$_ql4d = $this->_ql47();
			$_qO4d = $this->_qO48();
			$_ql4e = $this->_ql4a();
			$_qO4e = $this->_qO4a();
			$_ql4f = $this->_ql4b();
		}
	}

	class _qO4f{
		private $_ql4g = array();

		private function __construct(){
		}

		public static function _qO4g(){
			$_ql4h = new _qO4f();

			return $_ql4h;
		}

		function _qO4h($_qOn){
			if(is_array($_qOn)){
				foreach($_qOn as $_ql4i => $_qO4i){
					if(!empty($_qO4i)){
						if(!isset ($this->_ql4g[$_ql4i])){
							$this->_ql4g[$_ql4i] = "";
						}
						if(!strpos($this->_ql4g[$_ql4i], $_qO4i)){
							$this->_ql4g[$_ql4i] .= $_qO4i . ";";
						}
					}
				}
			}

			return $this;
		}

		function _ql4j(){
			$_qO4j = "";
			foreach($this->_ql4g as $_ql4i => $_qO4i){
				$_qO4j .= "." . $_ql4i . "\n \173\040" . $_qO4i . " } \n";
			}

			return '<style type="text/css">' . $_qO4j . "</style\076";
		}
	}

	class _ql4k{
		private $_qO4k;
		private $_ql3d;

		private function __construct(){
		}

		public static function _qO4g($_qOw = null, $_qlu = null){
			$_ql4l = new _ql4k();
			if(isset ($_qOw)){
				$_ql4l->_qO4k = $_qOw;
			}
			if(isset ($_qlu)){
				$_ql4l->_ql3d = $_qlu;
			}

			return $_ql4l;
		}

		function _qO4l($_ql4m = '"'){
			if(isset ($this->_qO4k) && isset ($this->_ql3d)){
				return $this->_qO4k . '=' . $_ql4m . $this->_ql3d . $_ql4m;
			}else{
				return "";
			}
		}

		function _qO4m(){
			if(isset ($this->_qO4k)){
				return $this->_qO4k;
			}else{
				return "";
			}
		}

		function _ql4n(){
			if(isset ($this->_ql3d)){
				return $this->_ql3d;
			}else{
				return "";
			}
		}
	}

	class _qO4n{
		protected $_ql4o = "<\173tag} \173\160roperties}>\173content\175</\173tag}\076";
		protected $_qO4o;
		protected $_ql4p;
		protected $_qO4p = array();
		protected $_ql4q = array();
		protected $_qO4q;

		function __construct(){
			$this->_ql4p = _qO4f::_qO4g();
		}

		public static function _qO4g($_qOn){
			$_qO45 = new _qO4n();
			$_qO45->_ql4r($_qOn);

			return $_qO45;
		}

		function _qO4r($_qOn){
			if(is_array($_qOn)){
				$this->_ql4p->_qO4h($_qOn);
			}

			return $this;
		}

		function _ql4s(){
			return $this->_ql4p->_ql4j();
		}

		function _ql4r($_qOn){
			$this->_ql4o = _qO0("\173tag}", $_qOn, $this->_ql4o);
			$this->_qO4q = $_qOn;

			return $this;
		}

		function _qO4s(){
			return $this->_qO4q;
		}

		function _ql4t($_qOn){
			$_ql4l             = _ql4k::_qO4g("colspan", $_qOn);
			$this->_qO4p["cs"] = $_ql4l;

			return $this;
		}

		function _qO4t(){
			if(isset ($this->_qO4p["cs"])){
				return $this->_qO4p["cs"]->_ql4n();
			}else{
				return 1;
			}
		}

		function _ql4u($_qOn){
			$_ql4l                = _ql4k::_qO4g("rows\160an", $_qOn);
			$this->_qO4p["rs"] = $_ql4l;

			return $this;
		}

		function _qO4u(){
			if(isset ($this->_qO4p["rs"])){
				return $this->_qO4p["rs"]->_ql4n();
			}else{
				return 1;
			}
		}

		function _ql4v($_qOn){
			$_ql4l             = _ql4k::_qO4g("align", $_qOn);
			$this->_qO4p["al"] = $_ql4l;

			return $this;
		}

		function _qO2w($_qOn){
			$_ql4l            = _ql4k::_qO4g("widt\150", $_qOn);
			$this->_qO4p["w"] = $_ql4l;

			return $this;
		}

		function _qO4h($_qOn){
			$_ql4l                = _ql4k::_qO4g("st\171le", $_qOn);
			$this->_qO4p["st"] = $_ql4l;

			return $this;
		}

		function _qO4v(){
			$_qO3b = "";
			$_qOv  = func_num_args();
			$_qlw  = func_get_args();
			for($_qO9 = 0; $_qO9 < $_qOv; $_qO9++){
				$_qO3b .= $_qlw[$_qO9] . "\040";
			}
			$_ql4l                = _ql4k::_qO4g("class", $_qO3b);
			$this->_qO4p["cl"] = $_ql4l;

			return $this;
		}

		function _ql4w($_qOn){
			$_ql4l             = _ql4k::_qO4g("id", $_qOn);
			$this->_qO4p["id"] = $_ql4l;

			return $this;
		}

		function _qO4w($_qOn){
			$this->_qO4o = $_qOn;

			return $this;
		}

		function _ql4x($_qO3a, $_ql4l){
			$_ql3b = explode("\040", trim($_qO3a));
			foreach($_ql3b as $_qO3b){
				if(isset ($_ql4l[$_qO3b])){
					foreach($_ql4l[$_qO3b] as $_qO4k => $_ql3d){
						$_qO4x = _ql4k::_qO4g($_qO4k, $_ql3d);
						array_push($this->_qO4p, $_qO4x);
					}
				}
			}

			return $this;
		}

		function _ql4y($_qOn){
			if($_qOn instanceof _ql4k){
				array_push($this->_qO4p, $_qOn);
			}else if(is_array($_qOn)){
				foreach($_qOn as $_qO4k => $_ql3d){
					$_ql4l = _ql4k::_qO4g($_qO4k, $_ql3d);
					array_push($this->_qO4p, $_ql4l);
				}
			}

			return $this;
		}

		function _qO4y($_qOn){
			$this->_qO4p = $_qOn;

			return $this;
		}

		function _qO4c(){
			return $this->_qO4p;
		}

		function _ql4z($_ql4m = '"'){
			$_qO4j = "";
			foreach($this->_qO4p as $_ql4l){
				if(isset ($_ql4l)){
					$_qO4j .= $_ql4l->_qO4l($_ql4m) . " ";
				}
			}

			return $_qO4j;
		}

		function _qO3x($_qOn, $_qO4z = -1){
			return $this->_ql50(array($_qOn), $_qO4z);
		}

		function _ql50($_qOn, $_qO4z = -1){
			$_qO4e = count($this->_ql4q);
			if(($_qO4z < 0) || ($_qO4z > $_qO4e)){
				$_qO4z = $_qO4e;
			}
			array_splice($this->_ql4q, $_qO4z, 0, array($_qOn));

			return $this;
		}

		function _qO50($_qOn, $_qO4z){
			return $this->_ql51(array($_qOn), $_qO4z);
		}

		function _ql51($_qOn, $_qO4z){
			if($_qO4z > -1){
				$this->_ql4q[$_qO4z] = $_qOn;
			}

			return $this;
		}

		function _qO51(){
			ksort($this->_ql4q);
		}

		function _ql52(){
			$_ql6 = array();
			foreach($this->_ql4q as $_qO52){
				foreach($_qO52 as $_qO3z){
					if(isset ($_qO3z) && $_qO3z->_ql53() != ""){
						array_push($_ql6, $_qO3z);
					}
				}
			}

			return $_ql6;
		}

		function _qO53(){
			$_ql6 = array();
			foreach($this->_ql4q as $_qO52){
				foreach($_qO52 as $_qO3z){
					if($_qO3z->_qO4s() === 'tr'){
						if(isset ($_qO3z) && $_qO3z->_ql53() != ""){
							array_push($_ql6, $_qO3z);
						}
					}else{
						$_ql54 = $_qO3z->_qO53();
						foreach($_ql54 as $_qO54){
							if(isset ($_qO54) && $_qO54->_ql53() != ""){
								array_push($_ql6, $_qO54);
							}
						}
					}
				}
			}

			return $_ql6;
		}

		function _ql53(){
			$_qO4j = $this->_qO4o;
			foreach($this->_ql4q as $_qO52){
				foreach($_qO52 as $_qO3z){
					if(isset ($_qO3z)){
						$_qO4j .= $_qO3z->_ql55();
					}
				}
			}

			return $_qO4j;
		}

		function _ql55(){
			$_qO55 = $this->_ql53();
			if(isset ($_qO55) && $_qO55 !== ''){
				$_qO4j = $this->_ql4o;
				$_qO4j = _qO0("\173properties}", $this->_ql4z(), $_qO4j);
				$_qO4j = _qO0("\173content\175", $_qO55, $_qO4j);

				return $_qO4j;
			}else{
				return "";
			}
		}

		function _ql56($_qO56 = array(), $_ql57 = true){
			$_qO4j = $this->_qO57($_qO56, $this->_qO4o, $_ql57);
			foreach($this->_ql4q as $_qO52){
				foreach($_qO52 as $_qO3z){
					if(isset ($_qO3z)){
						$_qO4j .= $_qO3z->_ql56($_qO56, $_ql57);
					}
				}
			}

			return $_qO4j;
		}

		function _ql58($_qO56, $_ql57 = true){
			$_qO4j = $this->_qO57($_qO56, $this->_qO4o, $_ql57);
			foreach($this->_ql4q as $_qO52){
				foreach($_qO52 as $_qO3z){
					if(isset ($_qO3z)){
						$_qO4j .= $_qO3z->_qO58($_qO56, $_ql57);
					}
				}
			}

			return $_qO4j;
		}

		function _qO58($_qO56, $_ql57 = true, $_ql4m = '"'){
			$_qO55 = $this->_ql58($_qO56, $_ql57);
			if(isset ($_qO55) && $_qO55 !== ''){
				$_qO4j = $this->_ql4o;
				$_qO4j = _qO0("\173pro\160erties}", $this->_ql4z($_ql4m), $_qO4j);
				$_qO4j = _qO0("\173content\175", $_qO55, $_qO4j);

				return $_qO4j;
			}else{
				return "";
			}
		}

		function _qO57($_qO56, $_ql3a, $_ql57 = true){
			foreach($_qO56 as $_qlk => $_ql59){
				if($_ql57){
					$_ql3a = _qO0($_qlk, $_ql59, $_ql3a);
				}else{
					$_ql3a = _qlp($_qlk, $_ql59, $_ql3a);
				}
			}

			return $_ql3a;
		}
	}

	class _qO59 extends _qO4n{
	}

	class _ql5a extends _qO4n{
	}

	class _qO5a extends _qO4n{
		function _ql5b(){
			$_qO5b = _ql5c::_qO5c()->_qO4w("blank");
			$_ql54 = $this->_qO53();
			$_ql6  = array();
			$_ql5d = 0;
			foreach($_ql54 as $_qO5d => $_qO54){
				$_ql5e        = $_qO54->_ql52();
				$_ql6[$_qO5d] = $_ql5e;
				$_qO5e        = 1;
				foreach($_ql5e as $_ql5f => $_qO5f){
					$_ql5g = $_qO5f->_qO4t();
					for($_qO5g = 1; $_qO5g < $_ql5g; $_qO5g++){
						array_splice($_ql6[$_qO5d], $_ql5f + $_qO5e, 0, array($_qO5b));
					}
					$_qO5e += $_ql5g - 1;
				}
				$_ql5h = count($_ql6[$_qO5d]);
				if($_ql5h > $_ql5d){
					$_ql5d = $_ql5h;
				}
			}
			$_qO5h = count($_ql6);
			$_qO4z = 0;
			while($_qO4z < $_qO5h * $_ql5d){
				$_qO5d = $_qO4z % $_qO5h;
				$_ql5f = (int)$_qO4z / $_qO5h;
				if(isset ($_ql6[$_qO5d][$_ql5f])){
					$_qO5f = $_ql6[$_qO5d][$_ql5f];
					$_ql5g = $_qO5f->_qO4t();
					$_ql5i = $_qO5f->_qO4u();
					for($_qO5i = 1; $_qO5i < $_ql5i; $_qO5i++){
						for($_qO5g = 0; $_qO5g < $_ql5g; $_qO5g++){
							array_splice($_ql6[$_qO5d + $_qO5i], $_ql5f, 0, array($_qO5b));
						}
						$_ql5h = count($_ql6[$_qO5d + $_qO5i]);
						if($_ql5h > $_ql5d){
							$_ql5d = $_ql5h;
						}
					}
				}
				$_qO4z++;
			}

			return $_ql6;
		}
	}

	class _ql5c{
		public static function _qO5c(){
			$_qO45 = new _qO59();

			return $_qO45->_ql4r("td");
		}

		public static function _ql5j(){
			$_qO45 = new _ql5a();

			return $_qO45->_ql4r("tr");
		}

		public static function _qO5j(){
			$_qO45 = new _qO5a();

			return $_qO45->_ql4r("table");
		}

		public static function _ql5k(){
			$_qO45 = _qO4n::_qO4g("div");

			return $_qO45;
		}

		public static function _qO5k(){
			$_qO45 = _qO4n::_qO4g("span");

			return $_qO45;
		}

		public static function _ql5l($_qO5l){
			$_qO45 = _qO4n::_qO4g($_qO5l);

			return $_qO45;
		}
	}

	class _qO1u{
		protected $_ql5m;

		private function __construct(){
			$this->_ql5m = "";
		}

		public static function _qO5m($_ql5n = ""){
			$_qO5n = new _qO1u();
			if($_ql5n instanceof _qO1u){
				$_qO5n->_ql5m = $_ql5n->_ql5o();
			}else if(is_string($_ql5n)){
				$_qO5n->_ql5m = $_ql5n;
			}

			return $_qO5n;
		}

		function _ql2z($_qO5o){
			if(is_string($_qO5o)){
				$this->_ql5m = $_qO5o;
			}

			return $this;
		}

		function _ql5p(){
			$this->_ql5m = "\050" . $this->_ql5m . "\051";

			return $this;
		}

		function _qO5p($_ql5n, $_ql5q = _ql3e::_ql2s, $_qO5q = _ql3e::_ql3m){
			$_qO5o = $this->_ql5m;
			if($_ql5n instanceof _qO1u){
				$_ql5r = $_ql5n->_ql5o();
			}else if(is_string($_ql5n)){
				$_ql5r = $_ql5n;
			}else{
				return null;
			}
			if($_ql5r != ""){
				if($this->_ql5m != ""){
					if($_qO5q == _ql3e::_ql3m){
						$_qO5o = $_qO5o . $_ql5q . "\050" . $_ql5r . ")";
					}else if($_qO5q == _ql3e::_qO3m){
						$_qO5o = $_qO5o . $_ql5q . $_ql5r;
					}
				}else{
					if($_qO5q == _ql3e::_ql3m){
						$_qO5o = "\050" . $_ql5r . "\051";
					}else if($_qO5q == _ql3e::_qO3m){
						$_qO5o = $_ql5r;
					}
				}
			}
			$this->_ql5m = $_qO5o;

			return $this;
		}

		function _ql5o(){
			return $this->_ql5m;
		}
	}

	class _pivotdatasource{
		public $_qO5r;
		public $Link;
		protected $_ql5s;
		protected $_qO5s;
		protected $_ql5t;
		protected $_qO5t;
		protected $_ql5u;
		protected $_qO5u;
		protected $_ql5v;
		protected $_qO5v;
		protected $_ql5w = 0;

		function __construct($_qO5w){
			$this->Link  = $_qO5w;
			$this->_ql5v = 0;
			$this->_qO5s = false;
			$this->_ql5w = 0;
		}

		function setquerysize($_qOn){
			if(is_int($_qOn)){
				$this->_ql5w = $_qOn;
			}

			return $this;
		}

		function getquerysize(){
			return $this->_ql5w;
		}

		function select($_ql5s){
			if(is_string($_ql5s)){
				$this->_ql5s = $_ql5s;
				$_ql5x       = explode("\054", $_ql5s);
				if(is_array($_ql5x)){
					foreach($_ql5x as $_qO5x){
						if(!empty($_qO5x)){
							$_qO5i = strripos($_qO5x, ' as ');
							if($_qO5i > 0){
								$this->_qO5u[$this->_ql5v]["expression"] = trim(substr($_qO5x, 0, $_qO5i));
								$this->_qO5u[$this->_ql5v]["alias"]               = trim(substr($_qO5x, $_qO5i + 4));
							}else{
								$this->_qO5u[$this->_ql5v]["expression"] = trim($_qO5x);
								$this->_qO5u[$this->_ql5v]["alias"]      = trim($_qO5x);
							}
							$this->_ql5v++;
						}
					}
				}
			}else if(is_array($_ql5s)){
				foreach($_ql5s as $_qO5x){
					if(!empty($_qO5x)){
						$_qO5i = strripos($_qO5x, ' as ');
						if($_qO5i > 0){
							$this->_qO5u[$this->_ql5v]["ex\160ression"] = trim(substr($_qO5x, 0, $_qO5i));
							$this->_qO5u[$this->_ql5v]["alias"]         = trim(substr($_qO5x, $_qO5i + 4));
						}else{
							$this->_qO5u[$this->_ql5v]["expression"] = trim($_qO5x);
							$this->_qO5u[$this->_ql5v]["alias"]               = trim($_qO5x);
						}
						$this->_ql5v++;
					}
				}
			}

			return $this;
		}

		function _ql5y(){
			return $this->_qO5u;
		}

		function _qO5y($_qOn){
			$this->_qO5s = $_qOn;

			return $this;
		}

		function selectcommand($_ql3a){
			$this->_qO5v = $_ql3a;

			return $this;
		}

		function from($_ql3a){
			$this->_ql5t = $_ql3a;

			return $this;
		}

		function join($_ql5z){
			$this->_ql5t = " (" . $this->_ql5t . " JOIN " . $_ql5z;

			return $this;
		}

		function fulljoin($_ql5z){
			$this->_ql5t = "\040(" . $this->_ql5t . "\040\106ULL JO\111N " . $_ql5z;

			return $this;
		}

		function leftjoin($_ql5z){
			$this->_ql5t = " (" . $this->_ql5t . "\040LEFT \112\117\111N " . $_ql5z;

			return $this;
		}

		function rightjoin($_ql5z){
			$this->_ql5t = " (" . $this->_ql5t . "\040RIGHT J\117\111N " . $_ql5z;

			return $this;
		}

		function innerjoin($_ql5z){
			$this->_ql5t = "\040(" . $this->_ql5t . " INNER\040\112\117IN " . $_ql5z;

			return $this;
		}

		function on($_qO5n){
			$this->_ql5t .= "\040\117N " . $_qO5n . "\051\040";

			return $this;
		}

		function where($_ql3a){
			$this->_qO5t = $_ql3a;

			return $this;
		}

		function groupby($_ql5u){
			$this->_ql5u = $_ql5u;

			return $this;
		}

		function _qO5z($_ql5x, $_ql60, $_qO60){
			$_ql61 = _qlz::_ql16;
			$_qO61 = _qlz::_ql1w;
			if(!empty($this->_qO5v)){
				$_ql61 = _qlz::_ql30;
				$_qO61 = _qlz::_qO1w;
			}
			$_ql5s = "";
			if(!empty($_ql5x)){
				foreach($_ql5x as $_qO5x){
					$_qO4j = trim($_qO5x[$_ql61]);
					if(isset ($_qO5x[_qlz::_qO2z])){
						$_qO4j = $_qO5x[_qlz::_qO2z] . "\050" . $_qO4j . "\051";
					}
					$_ql5s .= $_qO4j . " \101\123\040" . $this->_ql62($_qO5x[_qlz::_ql18]) . ",\040";
				}
				$_ql5s = trim($_ql5s, ", ");
			}
			$_qO5s = ($this->_qO5s) ? "\104\111STINCT " : "";
			if($_ql5s != ""){
				$_ql5s = "SELE\103\124\040" . $_qO5s . $_ql5s;
			}
			$_qO5t = "";
			if(isset ($_ql60)){
				$_qO5t = trim($_ql60[$_qO61]->_ql5o());
			}
			if(empty($this->_qO5v)){
				if(!empty($this->_qO5t)){
					if($_qO5t != ""){
						$_qO5t .= "\040\101ND " . $this->_qO5t;
					}else{
						$_qO5t = $this->_qO5t;
					}
				}
			}
			if($_qO5t != ""){
				$_qO5t = " WHER\105\040" . $_qO5t;
			}
			$_ql3y = "";
			if(!empty($_qO60)){
				foreach($_qO60 as $_qO62){
					$_ql3y .= $_qO62[$_ql61] . ", ";
				}
				$_ql3y = trim($_ql3y, "\054 ");
			}
			if(empty($this->_qO5v)){
				if(!empty($this->_ql5u)){
					if($_ql3y != ""){
						$_ql3y .= "\040, " . $this->_ql5u;
					}else{
						$_ql3y = $this->_ql5u;
					}
				}
			}
			if($_ql3y != ""){
				$_ql3y = " GR\117\125P BY " . $_ql3y;
			}
			$_ql5t = " FROM ";
			if(empty($this->_qO5v)){
				$_ql5t .= $this->_ql5t;
			}else{
				$_ql5t .= "\050" . $this->_qO5v . ") tmp ";
			}
			$_ql63 = $_ql5s . $_ql5t . $_qO5t . $_ql3y;

			return $_ql63;
		}

		function _qO63($_ql3a){
			return _qO0("'", "'\047", $_ql3a);
		}

		function _ql64($_ql3a){
			$_qO64 = $this->_qO63($_ql3a);
			$_qO64 = _qO0(htmlentities("\046"), "&", $_qO64);

			return $_qO64;
		}

		function _ql65($_ql3a){
			return "\047" . $_ql3a . "\047";
		}

		function _ql62($_ql3a){
			return "\042" . $_ql3a . "\042";
		}

		function _qO65($_ql3a){
			switch(strtolower($_ql3a)){
				case "year":
					return "\171ear";
				case "quarter":
					return "\161uarter";
				case "mont\150":
					return "month";
				case "day":
					return "";
				default :
					return "error";
			}
		}
	}

	class pdopivotdatasource extends _pivotdatasource{
		function _queryall($_ql63){
			$_ql6  = array();
			$_ql66 = $this->Link->prepare($_ql63);
			$_ql66->execute();
			while($_qO54 = $_ql66->fetch(pdo::FETCH_ASSOC)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}

		function _querylimit($_ql63, $_qO5e, $_ql5w){
			$_ql63 .= " LIM\111T " . $_qO5e . "," . $_ql5w;
			$_ql6  = array();
			$_ql66 = $this->Link->prepare($_ql63);
			$_ql66->execute();
			while($_qO54 = $_ql66->fetch(pdo::FETCH_ASSOC)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}
	}

	class postgresqlpivotdatasource extends _pivotdatasource{
		function _queryall($_ql63){
			$_ql6  = array();
			$_qO66 = pg_query($this->Link, $_ql63);
			while($_qO54 = pg_fetch_assoc($_qO66)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}

		function _querylimit($_ql63, $_qO5e, $_ql5w){
			$_ql63 .= "\040LI\115\111T $_ql5w\040OFFS\105\124 $_qO5e";
			$_ql6  = array();
			$_qO66 = pg_query($this->Link, $_ql63);
			while($_qO54 = pg_fetch_assoc($_qO66)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}
	}

	class mysqlipivotdatasource extends _pivotdatasource{
		function _queryall($_ql63){
			$_ql6  = array();
			$_qO66 = mysqli_query($this->Link, $_ql63);
			$_ql6  = mysqli_fetch_all($_qO66, MYSQLI_ASSOC);

			return $_ql6;
		}

		function _querylimit($_ql63, $_qO5e, $_ql5w){
			$_ql63 .= " \114IMIT " . $_qO5e . "\054" . $_ql5w;
			$_ql6  = array();
			$_qO66 = mysqli_query($this->Link, $_ql63);
			$_ql6  = mysqli_fetch_all($_qO66, MYSQLI_ASSOC);

			return $_ql6;
		}
	}

	class mysqlpivotdatasource extends _pivotdatasource{
		function _queryall($_ql63){
			$_ql6  = array();
			$_qO66 = mysql_query($_ql63, $this->Link);
			while($_qO54 = mysql_fetch_assoc($_qO66)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}

		function _querylimit($_ql63, $_qO5e, $_ql5w){
			$_ql63 .= "\040LIMIT\040" . $_qO5e . "\054" . $_ql5w;
			$_ql6  = array();
			$_qO66 = mysql_query($_ql63, $this->Link);
			while($_qO54 = mysql_fetch_assoc($_qO66)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}
	}

	class firebirdpivotdatasource extends _pivotdatasource{
		function _queryall($_ql63){
			$_ql6  = array();
			$_qO66 = ibase_query($this->Link, $_ql63);
			while($_qO54 = ibase_fetch_assoc($_qO66)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}

		function _querylimit($_ql63, $_qO5e, $_ql5w){
			$_ql63 .= " R\117\127S " . ($_qO5e + 1) . " TO " . ($_qO5e + 1 + $_ql5w);
			$_ql6  = array();
			$_qO66 = ibase_query($_ql63, $this->Link);
			while($_qO54 = ibase_fetch_assoc($_qO66)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}
	}

	class odbcpivotdatasource extends _pivotdatasource{
		function _queryall($_ql63){
			$_ql6  = array();
			$_qO66 = odbc_exec($this->Link, $_ql63);
			while($_qO54 = odbc_fetch_array($_qO66)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}
	}

	class mssqlpivotdatasource extends _pivotdatasource{
		function _queryall($_ql63){
			$_ql6  = array();
			$_qO66 = mssql_query($_ql63, $this->Link);
			while($_qO54 = mssql_fetch_array($_qO66)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}

		function _querylimit($_ql63, $_qO5e, $_ql5w){
			$_ql67 = strpos($_ql63, "SE\114ECT ");
			$_qO67 = strpos($_ql63, "\040A\123\040");
			$_qO5x = substr($_ql63, $_ql67 + 7, $_qO67 - $_ql67 - 7);
			$_ql63 = substr_replace($_ql63, "R\117W\137NUMBE\122\050) O\126\105R (\117\122DER \102\131 $_qO5x) AS RowNumber, ", $_ql67 + 7, 0);
			$_ql63 = "SELE\103T * FRO\115\040($_ql63)\040tmp2\040\127HER\105\040RowNumber BE\124\127EEN\040$_qO5e\040AND $_ql5w ";
			$_ql6  = array();
			$_qO66 = mssql_query($_ql63, $this->Link);
			while($_qO54 = mssql_fetch_assoc($_qO66)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}
	}

	class sqlsrvpivotdatasource extends _pivotdatasource{
		function _queryall($_ql63){
			$_ql6  = array();
			$_qO66 = sqlsrv_query($this->Link, $_ql63);
			while($_qO54 = sqlsrv_fetch_array($_qO66)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}

		function _querylimit($_ql63, $_qO5e, $_ql5w){
			$_ql67 = strpos($_ql63, "\123ELEC\124\040");
			$_qO67 = strpos($_ql63, " AS ");
			$_qO5x = substr($_ql63, $_ql67 + 7, $_qO67 - $_ql67 - 7);
			$_ql63 = substr_replace($_ql63, "ROW_N\125\115\102ER(\051\040OVER\040\050ORDE\122\040BY $_qO5x) AS \122owNumber\054 ", $_ql67 + 7, 0);
			$_ql63 = "\123ELECT \052\040FROM ($_ql63\051\040tmp2\040\127HERE RowNumber BETW\105\105N $_qO5e AN\104\040$_ql5w\040";
			$_ql6  = array();
			$_qO66 = sqlsrv_query($this->Link, $_ql63);
			while($_qO54 = sqlsrv_fetch_array($_qO66)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}
	}

	class oraclepivotdatasource extends _pivotdatasource{
		function _queryall($_ql63){
			$_ql6  = array();
			$_ql66 = oci_parse($this->Link, $_ql63);
			oci_execute($_ql66);
			while($_qO54 = oci_fetch_array($_ql66)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}

		function _querylimit($_ql63, $_qO5e, $_ql5w){
			$_ql67 = strpos($_ql63, "\123\105LECT ");
			$_qO67 = strpos($_ql63, " A\123\040");
			$_qO5x = substr($_ql63, $_ql67 + 7, $_qO67 - $_ql67 - 7);
			$_ql63 = substr_replace($_ql63, "RO\127\137NUMBER\050\051 OVE\122\040(ORD\105\122 BY $_qO5x\051 AS RowN\165mber, ", $_ql67 + 7, 0);
			$_ql63 = "\123ELEC\124\040* FRO\115\040($_ql63) tm\1602 WH\105\122\105 RowNumber\040\102ETWE\105N $_qO5e AND " . ($_qO5e + $_ql5w);
			$_ql6  = array();
			$_ql66 = oci_parse($this->Link, $_ql63);
			oci_execute($_ql66);
			while($_qO54 = oci_fetch_array($_ql66)){
				array_push($_ql6, $_qO54);
			}

			return $_ql6;
		}
	}

	class _ql68{
		public $_qO68;
		public $_ql69;
		public $_qO69 = false;
		public $_ql6a = false;

		function _qO6a($_ql6b){
			$this->_qO68 = $_ql6b;
			$this->_ql6a = $_ql6b->KeepViewStateInSession;
			$_qO6b       = (isset ($_POST[$this->_qO68->_ql6c . _qlz::_qO28])) ? $_POST[$this->_qO68->_ql6c . _qlz::_qO28] : "";
			if($this->_ql6a && $_qO6b == ""){
				$_qO6b = (isset ($_SESSION[$this->_qO68->_ql6c . _qlz::_qO28])) ? $_SESSION[$this->_qO68->_ql6c . _qlz::_qO28] : "";
			}
			$_qO6c = array('pivotId' => $_ql6b->id, 'viewstate' => &$_qO6b);
			$_ql6b->EventHandler->onreadingviewstate($this, $_qO6c);
			if($_qO6b != "" && $this->_qO69){
				$_qO6b = base64_decode($_qO6b);
			}
			$_qO6b       = _qO0("\134", "", $_qO6b);
			$this->_ql69 = json_decode($_qO6b, true);
		}

		function _qO3o(){
			$this->_ql69 = array();
		}

		function _ql6d(){
			$_ql6b = $this->_qO68;
			$_qO6d = json_encode($this->_ql69);
			if($this->_qO69){
				$_qO6d = base64_encode($_qO6d);
			}
			if($this->_ql6a){
				$_SESSION[$this->_qO68->_ql6c . _qlz::_qO28] = $_qO6d;
			}
			$_ql6e = "\074input\040id='\173id}\047 name=\047\173id}'\040ty\160e=\047hidden\047 val\165e=\047\173value\175'\040autocom\160lete\075'off\047 \057>";
			$_qO6e = _qO0("\173id\175", $this->_qO68->_ql6c . _qlz::_qO28, $_ql6e);
			$_qO6e = _qO0("\173value\175", $_qO6d, $_qO6e);

			return $_qO6e;
		}
	}

	class _ql6f{
		var $_qO6f;
		var $_ql6g;

		function __construct(){
			$this->_qO6f = array(
				_qlz::_ql29 => "\107o",
				_qlz::_qO29 => "Next",
				_qlz::_ql2a => "Next",
				_qlz::_qO2a => "Last",
				_qlz::_ql2b => "First",
				_qlz::_ql1y => "\133No Filter]",
				_qlz::_ql1o => " is eq\165al to",
				_qlz::_qO1o => "\040is NOT e\161\165al to",
				_qlz::_ql1p => "is less t\150an",
				_qlz::_qO1p => "\040is greater t\150an",
				_qlz::_ql1q => " is\040less\040than or\040equal\040to",
				_qlz::_qO1q => "\040is greater t\150an or\040equal to",
				_qlz::_ql1r => "\040is between",
				_qlz::_qO1r => "\040is NOT between",
				_qlz::_ql1s => " contains",
				_qlz::_qO1s => " starts with",
				_qlz::_ql1t => " ends with",
				_qlz::_qO35 => " top N",
				_qlz::_ql36 => "\040bottom\040N",
				_qlz::_qO36 => "\040top\040\160ercent",
				_qlz::_ql37 => " bottom percent",
				_qlz::_qO2b => "\117k",
				_qlz::_qO2c => "\103ancel",
				_qlz::_ql2d => "Incl\165des",
				_qlz::_qO2d => "\105xcludes",
				_qlz::_ql2e => "(Select All)",
				_qlz::_qO2e => "Grand \124otal",
				_qlz::_ql2f => "\173categor\171} Total",
				_qlz::_qO2f => "\123\165m of\040\173category}",
				_qlz::_ql2g => "Count of \173category\175",
				_qlz::_qO2g => "\173category}\040Min",
				_qlz::_ql2h => "\173categor\171\175 Max",
				_qlz::_qO2h => "\101verage of \173category}",
				_qlz::_ql2i => "Percentage of\040sum of\040\173category\175",
				_qlz::_qO2i => "\120ercentage\040of count of \173category}",
			);
			$this->_ql6g = array(
				_qlz::_ql2j => "Page\040<strong>\173\120age\111ndex\175</strong> in <strong\076\173TotalPages}</strong\076, items\040\074strong\076\173First\111ndex\111n\120age}\074/strong> to <strong>\173\114astIndexInPage\175</strong> of <strong\076\173\124otalRows}\074\057strong\076.",
				_qlz::_qO2j => "\103hange\040page:\040\173TextBox} (of\040\173Total\120age\175\040pages) \173Go\120ageButton}",
				_qlz::_ql2k => "\120age \123ize:",
				_qlz::_qO2k => "Next Page",
				_qlz::_ql2l => "\120revious Page",
				_qlz::_qO2l => "First\040\120age",
				_qlz::_ql2m => "Last Page",
				_qlz::_qO2m => "Clic\153 here\040to sort",
				_qlz::_ql2n => "\123ort Asc",
				_qlz::_qO2n => "Sort Desc",
				_qlz::_ql2o => "No sort",
				_qlz::_qO2o => "[Col\165mn Fields]",
				_qlz::_ql2p => "\133Row \106ields]",
				_qlz::_qO2p => "Drag\040the filter field here.",
				_qlz::_ql2q => "\133\104ata Fields]",
				_qlz::_qO2q => "Drag to\040order",
				_qlz::_ql2r => _qlz::_ql2r,
				_qlz::_qO2r => "\114oading.\056",
				_qlz::_ql2s => _qlz::_ql2s,
				_qlz::_qO2s => "Sorted asc",
				_qlz::_ql2t => "\123orted desc",
				_qlz::_qO2t => "Fitlering",
			);
		}

		function load($_qO6g){
			$_ql6h = new domdocument();
			$_ql6h->load($_qO6g);
			$_qO6h = $_ql6h->getelementsbytagname("commands");
			if($_qO6h->length > 0){
				foreach($_qO6h->item(0)->attributes as $_ql6i){
					$this->_qO6f[$_ql6i->name] = $_ql6i->value;
				}
			}
			$_qO6h = $_ql6h->getelementsbytagname("messages");
			if($_qO6h->length > 0){
				foreach($_qO6h->item(0)->attributes as $_ql6i){
					$this->_ql6g[$_ql6i->name] = $_ql6i->value;
				}
			}
		}
	}

	class _qO6i{
		var $_ql6j;
		var $_qO6j;
		var $_ql6c;

		function __construct($_ql6k, $_qO6k){
			$this->_ql6j = ($_ql6k != null) ? $_ql6k : sys_get_temp_dir();
			$this->_qO6j = ($_qO6k != null) ? $_qO6k : 5 * 074;
		}

		function _ql6l($_qlk, $_qOm){
			$_qO6b = json_encode($_qOm);
			file_put_contents($this->_ql6j . "\057" . $this->_ql6c . $_qlk . "\056kpt", $_qO6b);

			return true;
		}

		function _qO6l($_qlk){
			$_ql6m = $this->_ql6j . "/" . $this->_ql6c . $_qlk . ".kpt";
			if(is_file($_ql6m) && (time() - filemtime($_ql6m) < $this->_qO6j)){
				$_qO6b = file_get_contents($this->_ql6j . "\057" . $this->_ql6c . $_qlk . "\056kpt");

				return json_decode($_qO6b, true);
			}

			return null;
		}
	}

	class baseField{
		var $_qO6m = false;
		var $_qO68;
		var $_ql6n;
		var $_qO6n;
		var $_ql6o = array();
		var $_qO6o;
		var $_ql6p;
		var $_ql6c;
		var $_qO6p = false;
		var $_ql6q = 0;
		var $_qO6q = 0;
		var $SqlOperator = _ql3e::_ql3g;
		var $_ql6r;
		public $_qO6r;
		public $_ql6s;
		public $_qlk;
		public $_ql5s;
		private $_qO6s;
		var $FieldName;
		var $Text;
		var $Sort;
		var $Expand;
		var $Filters;
		var $IncludeAll = true;
		var $ExceptionList;
		var $AllowReorder;
		var $AllowSorting;
		var $AllowFiltering;
		var $Tooltip;
		var $HeaderTextWrap = true;
		var $RelevantField;

		function __construct($_ql6t){
			$this->FieldName = $_ql6t;
			$this->_qO6t($_ql6t);
			$this->ExceptionList = array();
			if($this->_ql5s === null){
				$this->_ql5s = array();
			}
			$this->Filters = array();
		}

		public static function _qO4g($_ql6u, $_qO6u){
			switch($_qO6u){
				case "sum":
					return new pivotsumfield($_ql6u);
				case "average":
					return new pivotaveragefield($_ql6u);
				case "percentage\040sum":
					return new pivotpercentagesumfield($_ql6u);
				case "\160ercentage\040count":
					return new pivotpercentagecountfield($_ql6u);
				case "min":
					return new pivotminfield($_ql6u);
				case "max":
					return new pivotmaxfield($_ql6u);
				case "count":
					return new pivotcountfield($_ql6u);
				case "\160ivot":
				default :
					return new pivotfield($_ql6u);
			}
		}

		function _qO6t($_ql3a){
			$this->_ql6r = $_ql3a;

			return $this;
		}

		function setvaluemap($_qO6s){
			$this->_qO6s = $_qO6s;

			return $this;
		}

		function getvaluemap(){
			return $this->_qO6s;
		}

		function _ql6v($_qlu){
			if(isset ($this->_qO6s)){
				$_qlu = $this->_qO6s->map($_qlu);
			}
			if(is_array($_qlu)){
				$_qlu = $_qlu[$this->FieldName];
			}

			return $_qlu;
		}

		function _qO4c(&$_ql6u, &$_qO6v, &$_ql6w, &$_qO6w, &$_ql6x){
			$_ql6u = $this->FieldName;
			$_qO6v = $this->_ql6c;
			$_ql6w = $this->_ql6r;
			$_qO6w = $this->_qO6r;
			$_ql6x = $this->SqlOperator;
		}

		function _qO6a($_ql6b, $_ql38){
			$this->_qO68 = $_ql6b;
			$this->_ql6n = $_ql6b->_ql6n;
			$this->_ql6c = $this->_qO68->_ql6c . "\137" . md5("$_ql38");
			$this->_qO6r = 'f' . $_ql38;
			if($this->Text === null){
				$this->Text = $this->FieldName;
			}
			$this->_qO6o = array();
			if($this->Expand === null){
				$this->Expand = false;
			}
			if($this->_ql6o === null){
				$this->_ql6o = array();
			}
			if($this->AllowReorder === null){
				$this->AllowReorder = $this->_qO68->AllowReorder;
			}
			if($this->AllowSorting === null){
				$this->AllowSorting = $this->_qO68->AllowSorting;
			}
			if($this->AllowFiltering === null){
				$this->AllowFiltering = $this->_qO68->AllowFiltering;
			}
			if($this->Sort === null && $this->AllowSorting){
				$this->Sort = _qlz::_qO10;
			}
		}

		function _qO6x(){
			if(isset ($this->_ql6n->_ql69[$this->_ql6c])){
				$_ql6y            = $this->_ql6n->_ql69[$this->_ql6c];
				$this->Sort       = $_ql6y[_qlz::_qO1j];
				$_qO6y            = $_ql6y[_qlz::_qO14];
				$this->IncludeAll = $_ql6y[_qlz::_ql1l];
				$_ql6z            = $_ql6y[_qlz::_qO1k];
				$this->_qO6p      = $_ql6y[_qlz::_ql1m];
				$this->_ql6s      = $_ql6y[_qlz::_qO1m];
				for($_qO9 = 0; $_qO9 < count($_qO6y); $_qO9++){
					$_qO6y[$_qO9][1] = urldecode($_qO6y[$_qO9][1]);
					if(isset ($_qO6y[$_qO9][2])){
						$_qO6y[$_qO9][2] = urldecode($_qO6y[$_qO9][2]);
					}
				}
				$this->Filters = $_qO6y;
				for($_qO9 = 0; $_qO9 < count($_ql6z); $_qO9++){
					$_ql6z[$_qO9] = (urldecode($_ql6z[$_qO9]));
				}
				$this->ExceptionList = $_ql6z;
				if($this->_qO6p){
					$this->_ql6q = $_ql6y[_qlz::_ql1n];
					$this->_qO6q = $_ql6y[_qlz::_qO1n];
				}
			}
		}

		function _qO6z($_qlm){
			$_ql70 = $this->_qO68;
			$_qO70 = $_ql70->DataSource;
			if(isset ($_qlm->_qO6f[$this->_ql6c])){
				$_ql5f = $_qlm->_qO6f[$this->_ql6c];
				$_ql71 = $_ql5f[_qlz::_ql1d];
				$_qO71 = $_ql5f[_qlz::_ql21];
				switch($_ql71){
					case _qlz::_qO1j:
						if($_ql70->EventHandler->onbeforefieldsort($this, array()) == true){
							$this->Sort = $_qO71[_qlz::_qO1j];
							$_ql70->EventHandler->onfieldsort($this, array());
							$_ql72                             = $this->_ql6s;
							$_ql70->_qO72[_qO37::_qOz($_ql72)] = null;
							$_ql70->_ql73                      = $_ql72;
							$_ql70->setsortstate(_qlz::_ql35);
						}
						break;
					case _qlz::_qO2x:
						if($_ql70->EventHandler->onbeforefilterpanelopen($this, array()) == true){
							$this->_qO6p = true;
							$this->_ql6q = $_qO71[_qlz::_qO2w];
							$this->_qO6q = $_qO71[_qlz::_ql2x];
							if(empty($this->_qO6o)){
								$this->_qO73();
							}
							$_ql70->EventHandler->onfilterpanelopen($this, array());
						}
						break;
					case _qlz::_ql2y:
						$this->_qO6p = false;
						switch($_qO71[_qlz::_ql1d]){
							case _qlz::_ql2c:
								if($_ql70->EventHandler->onbeforefieldfilter($this, array()) == true){
									if($_qO71[_qlz::_qO2y] == _qlz::_ql32){
										$this->Filters       = array();
										$this->IncludeAll    = true;
										$this->ExceptionList = array();
										$this->addfilter(array(
											$_qO71[_qlz::_ql2z],
											$_qO70->_ql64(urldecode($_qO71[_qlz::_qO30])),
											$_qO70->_ql64(urldecode($_qO71[_qlz::_ql31]))
										));
									}else if($_qO71[_qlz::_qO2y] == _qlz::_qO31){
										$this->Filters       = array();
										$this->IncludeAll    = $_qO71[_qlz::_ql1l];
										$this->ExceptionList = ($_qO71[_qlz::_qO1k] != null) ? $_qO71[_qlz::_qO1k] : array();
										for($_qO9 = 0; $_qO9 < count($this->ExceptionList); $_qO9++){
											$this->ExceptionList[$_qO9] = $_qO70->_ql64(urldecode($this->ExceptionList[$_qO9]));
										}
									}
									$_ql70->_ql74 = true;
									$_ql70->EventHandler->onfieldfilter($this, array());
								}
								break;
							case _qlz::_qO2c:
								break;
						}
						break;
					case _qlz::_ql1e:
						if($_ql70->EventHandler->onbeforefieldcollapse($this, array()) == true){
							$this->Expand = false;
							$_ql70->EventHandler->onfieldcollapse($this, array());
						}
						break;
					case _qlz::_qO1d:
						if($_ql70->EventHandler->onbeforefieldexpand($this, array()) == true){
							$this->Expand = true;
							$_ql70->EventHandler->onfieldexpand($this, array());
						}
						break;
				}
			}
			foreach($this->ExceptionList as $_qO74){
				$this->_ql6p[$_qO74] = 1;
			}
			if($this->AllowFiltering && $this->_qO6p){
				$_ql70->_ql75 = $this;
			}
		}

		function _qO75(){
			$_ql6z = $this->ExceptionList;
			for($_qO9 = 0; $_qO9 < count($_ql6z); $_qO9++){
				$_ql6z[$_qO9] = urlencode($_ql6z[$_qO9]);
			}
			$_qO6y = $this->Filters;
			for($_qO9 = 0; $_qO9 < count($_qO6y); $_qO9++){
				$_qO6y[$_qO9][1] = urlencode($_qO6y[$_qO9][1]);
				if(isset ($_qO6y[$_qO9][2])){
					$_qO6y[$_qO9][2] = urlencode($_qO6y[$_qO9][2]);
				}
			}
			$this->_ql6n->_ql69[$this->_ql6c] = array(
				_qlz::_qO1b => urlencode($this->FieldName),
				_qlz::_qO1j => $this->Sort,
				_qlz::_qO1k => $_ql6z,
				_qlz::_ql1l => $this->IncludeAll,
				_qlz::_qO14 => $_qO6y,
				_qlz::_qO1l => $this->AllowReorder,
				_qlz::_ql1m => $this->_qO6p,
				_qlz::_qO1m => $this->_ql6s,
			);
			if($this->_qO6p){
				$this->_ql6n->_ql69[$this->_ql6c] = array_merge($this->_ql6n->_ql69[$this->_ql6c], array(
					_qlz::_ql1n => $this->_ql6q,
					_qlz::_qO1n => $this->_qO6q,
				));
			}
		}

		function addfilter($_ql76){
			array_push($this->Filters, $_ql76);
		}

		function addexception($_qlu){
			array_push($this->ExceptionList, $_qlu);
		}

		function _qO76(){
			$_ql77 = (!empty($this->Filters) || !empty($this->ExceptionList));
			if(empty($this->ExceptionList) && $this->IncludeAll == false){
				$_ql77 = true;
			}

			return $_ql77;
		}

		function _qO77($_qlu){
			$this->_qO6o[$_qlu] = 1;
		}

		function _qO73(){
			$_ql70 = $this->_qO68;
			$_qO70 = $_ql70->DataSource;
			$this->_qO4c($_ql6u, $_qO6v, $_ql6w, $_qO6w, $_ql6x);
			$_ql63 = $_qO70->_qO5y(true)->_qO5z(array(
				array(
					_qlz::_ql16 => $_ql6w,
					_qlz::_ql30 => $_ql6u,
					_qlz::_ql18 => $_qO6w
				)
			), null, null);
			$_ql54 = $_qO70->_queryall($_ql63);
			foreach($_ql54 as $_qO54){
				$_qlu = $this->_ql6v($_qO54[$_qO6w]);
				$this->_qO77($_qlu);
			}
			ksort($this->_qO6o);
		}

		function _ql78($_qO78){
			foreach($_qO78 as $_ql79){
				$this->_qO77($_ql79);
			}

			return $this;
		}

		function _qO79(){
			$_qO78 = array();
			foreach(array_keys($this->_qO6o) as $_ql79){
				array_push($_qO78, $_ql79);
			}

			return $_qO78;
		}

		function _ql7a($_qlu){
			if($this->IncludeAll && in_array(($_qlu), $this->ExceptionList)){
				return false;
			}
			if($this->IncludeAll == false && !in_array(($_qlu), $this->ExceptionList)){
				return false;
			}
			foreach($this->Filters as $_ql76){
				switch($_ql76[0]){
					case _qlz::_ql1o:
						if(!($_qlu == $_ql76[1])){
							return false;
						}
						break;
					case _qlz::_qO1o:
						if(!($_qlu != $_ql76[1])){
							return false;
						}
						break;
					case _qlz::_ql1p:
						if(!($_qlu < $_ql76[1])){
							return false;
						}
						break;
					case _qlz::_qO1p:
						if(!($_qlu > $_ql76[1])){
							return false;
						}
						break;
					case _qlz::_ql1q:
						if(!($_qlu <= $_ql76[1])){
							return false;
						}
						break;
					case _qlz::_qO1q:
						if(!($_qlu >= $_ql76[1])){
							return false;
						}
						break;
					case _qlz::_ql1r:
						if(!(($_qlu > $_ql76[1]) && ($_qlu < $_ql76[2]))){
							return false;
						}
						break;
					case _qlz::_qO1r:
						if(!(($_qlu < $_ql76[1]) || ($_qlu > $_ql76[2]))){
							return false;
						}
						break;
					case _qlz::_ql1s:
						if(strpos(strtolower($_qlu), strtolower($_ql76[1])) === false){
							return false;
						}
						break;
					case _qlz::_qO1s:
						if(strpos(strtolower($_qlu), strtolower($_ql76[1])) !== 0){
							return false;
						}
						break;
					case _qlz::_ql1t:
						if(strpos(strrev(strtolower($_qlu)), strrev(strtolower($_ql76[1]))) !== 0){
							return false;
						}
						break;
				}
			}

			return true;
		}

		function _qO7a(){
			foreach($this->_ql6o as $_ql7b){
				foreach($this->Filters as $_ql76){
					$_ql7b->_qO7b($_ql76[0], $_ql76[1]);
				}
			}

			return true;
		}

		function _ql7c(){
			$_qO7c = $this->_qO68->CssClasses;
			$_ql7d = "<div id='\173id}' class='\153\160tFilterPanel \173css}' st\171le='width:\173width\175\160x;heig\150t:\173height}px\073'>\173f\165nction_panel\175\074div\040class\075'k\160tScroll\120anel' style='heig\150t:20\060\160x;overflow\055\171:scroll;overflow-x\072auto\073\047>\173valuefilter}<div></div><div\040 id=\047\173id}\137filterwithoptions\047 class='k\160tFilterWith\117\160tions\047>\173include\137excl\165de}\173list\175<\057div>\074/div\076\173\150idden}\074\057div\076";
			$_ql7d = _qO0('{css}', isset ($_qO7c['filter panel']) ? $_qO7c['filter panel'] : '', $_ql7d);
			$_qO7d = "<div class=\047\153ptFunctionPanel'>\173ok}\173cancel\175\074/div>";
			$_ql7e = "\074input id\075'\173id\175' type\075'button' val\165e='\173text}\047\040class\075\047kpt\173t\171pe}\102\165tton\047\040/>";
			$_qO7e = "\074div id='\173id}_filterwithvalues\047\040class='k\160tFilter\127ithVal\165es'>\173field\175\074select\040id='\173id}_select' name='\173id}_select'>\173o\160tions\175</select><in\160ut id\075'\173id\175_val\165e1' name='\173id}_val\165e1' value='\173value\061\175' st\171le='dis\160lay:none' \057\076<span\040style\075'dis\160lay:none'> \173and} \074input\040id=\047\173id}\137value\062\047 name='\173id}_val\165e2' value=\047\173val\165e2}' \057\076</s\160an></div>";
			$_ql7f = "\074option\040value='\173value\175\047 \173selected\175>\173text}</o\160tion>";
			$_qO7f = "<div\040class=\047\153ptIncl\165deExcl\165de'>\173include\175\173exclude\175\074/div\076";
			$_ql7g = "<span class='k\160t\111nExO\160tion'>\074input\040id='\173id}' class='kpt\122adio'\040type='radio' name='\173name}' \173checked\175\040value\075\047\173val\165e\175'/><label class='\153\160tLabel\047 for=\047\173id}'>\173text}<\057label>\074\057span>";
			$_qO7g = "\074div class\075\047kptList\047>\173items}<\057div>";
			$_ql7h = "<div\040class\075\047kptListOption\047><inp\165t id='\173id}' class='k\160t\103heck\047\040type=\047checkbox\047 \173chec\153ed} \057\076<label\040class='\153\160tLabel\047\040for='\173id}'>\173text}\074\057label\076\074/div>";
			$_qO7h = "\074input ty\160e\075'hidden' id\075\047\173id}\137\150idden\047\040name\075\047\173id}\137\150idden'\040value='\173value}\047\040/>";
			$_ql7i = false;
			if(!isset ($_POST[$this->_ql6c . "\137hidden"])){
				$_POST[$this->_ql6c . "\137include_excl\165de"] = _qlz::_ql2d;
				if(count($this->Filters) > 0){
					$_POST[$this->_ql6c . "\137select"] = $this->Filters[0][0];
					$_POST[$this->_ql6c . "\137value1"] = $this->Filters[0][1];
					if(isset ($this->Filters[0][2])){
						$_POST[$this->_ql6c . "\137value2"] = $this->Filters[0][2];
					}
					$_POST[$this->_ql6c . "_hidden"] = "vl";
				}else{
					$_POST[$this->_ql6c . "_hidden"] = "ie";
				}
				$_ql7i = true;
			}
			$_qO7i = _qO0("\173id}", $this->_ql6c . "\137cancel", $_ql7e);
			$_qO7i = _qO0("\173text}", $this->_qO68->Localization->_qO6f[_qlz::_qO2c], $_qO7i);
			$_qO7i = _qO0("\173t\171\160e}", _qlz::_qO2c, $_qO7i);
			$_ql7j = _qO0("\173id}", $this->_ql6c . "_o\153", $_ql7e);
			$_ql7j = _qO0("\173text\175", $this->_qO68->Localization->_qO6f[_qlz::_qO2b], $_ql7j);
			$_ql7j = _qO0("\173type\175", _qlz::_qO2b, $_ql7j);
			$_qO7j = _qO0("\173o\153\175", $_ql7j, $_qO7d);
			$_qO7j = _qO0("\173cancel\175", $_qO7i, $_qO7j);
			$_ql7k = _qO0("\173id\175", $this->_ql6c, $_qO7e);
			$_ql7k = _qO0("\173val\165e1}", isset ($_POST[$this->_ql6c . "\137val\165e1"]) ? $_POST[$this->_ql6c . "\137val\165e1"] : "", $_ql7k);
			$_ql7k = _qO0("\173val\165e2}", isset ($_POST[$this->_ql6c . "\137val\165e2"]) ? $_POST[$this->_ql6c . "\137val\165e2"] : "", $_ql7k);
			$_qO7k = array(
				_qlz::_ql1y,
				_qlz::_ql1o,
				_qlz::_qO1o,
				_qlz::_ql1p,
				_qlz::_qO1p,
				_qlz::_ql1q,
				_qlz::_qO1q,
				_qlz::_ql1r,
				_qlz::_qO1r,
				_qlz::_ql1s,
				_qlz::_qO1s,
				_qlz::_ql1t,
			);
			$_ql7l = array(_qlz::_qO35, _qlz::_ql36, _qlz::_qO36, _qlz::_ql37);
			$_qO7l = "";
			foreach($_qO7k as $_qlu){
				$_ql7m = _qO0("\173value}", $_qlu, $_ql7f);
				$_ql7m = _qO0("\173text}", $this->_qO68->Localization->_qO6f[$_qlu], $_ql7m);
				$_ql7m = _qO0("\173selected\175", (isset ($_POST[$this->_ql6c . "_select"]) && $_POST[$this->_ql6c . "_select"] == $_qlu) ? "selected='selected\047" : "", $_ql7m);
				$_qO7l .= $_ql7m;
			}
			if(count($this->_ql6o) > 0){
				foreach($_ql7l as $_qlu){
					$_ql7m = _qO0("\173value}", $_qlu, $_ql7f);
					$_ql7m = _qO0("\173text\175", $this->_qO68->Localization->_qO6f[$_qlu], $_ql7m);
					$_ql7m = _qO0("\173selected\175", (isset ($_POST[$this->_ql6c . "_select"]) && $_POST[$this->_ql6c . "\137select"] == $_qlu) ? "selected='selected\047" : "", $_ql7m);
					$_qO7l .= $_ql7m;
				}
			}
			$_ql7k = _qO0("\173options}", $_qO7l, $_ql7k);
			$_ql7k = _qO0("\173field}", $this->Text, $_ql7k);
			$_ql7k = _qO0("\173and}", $this->_qO68->Localization->_ql6g[_qlz::_ql2s], $_ql7k);
			$_qO7m = _qO0("\173id}", $this->_ql6c . "_include", $_ql7g);
			$_qO7m = _qO0("\173name}", $this->_ql6c . "\137include\137exclude", $_qO7m);
			$_qO7m = _qO0("\173text\175", $this->_qO68->Localization->_qO6f[_qlz::_ql2d], $_qO7m);
			$_qO7m = _qO0("\173value}", _qlz::_ql2d, $_qO7m);
			$_qO7m = _qO0("\173chec\153ed}", (isset ($_POST[$this->_ql6c . "\137include\137exclude"]) && $_POST[$this->_ql6c . "_include_exclude"] == _qlz::_ql2d) ? "chec\153ed='c\150ecked\047" : "", $_qO7m);
			$_ql7n = _qO0("\173id\175", $this->_ql6c . "\137exclude", $_ql7g);
			$_ql7n = _qO0("\173name}", $this->_ql6c . "_incl\165de_exclude", $_ql7n);
			$_ql7n = _qO0("\173text}", $this->_qO68->Localization->_qO6f[_qlz::_qO2d], $_ql7n);
			$_ql7n = _qO0("\173val\165e}", _qlz::_qO2d, $_ql7n);
			$_ql7n = _qO0("\173checked\175", (isset ($_POST[$this->_ql6c . "\137include\137exclude"]) && $_POST[$this->_ql6c . "_include\137excl\165de"] == _qlz::_qO2d) ? "chec\153ed='c\150ecked'" : "", $_ql7n);
			$_qO7n = _qO0("\173include\175", $_qO7m, $_qO7f);
			$_qO7n = _qO0("\173exclude}", $_ql7n, $_qO7n);
			$_qO78 = "";
			$_ql7o = _qO0("\173id}", $this->_ql6c . "_selectall", $_ql7h);
			$_ql7o = _qO0("\173text}", $this->_qO68->Localization->_qO6f[_qlz::_ql2e], $_ql7o);
			$_ql7o = _qO0("\173checked}", "", $_ql7o);
			$_qO78 .= $_ql7o;
			$_qO9  = 0;
			foreach($this->_qO6o as $_qO3c => $_ql3d){
				$_ql79 = _qO0("\173id}", $this->_ql6c . "_" . $_qO9, $_ql7h);
				$_ql79 = _qO0("\173text}", $_qO3c, $_ql79);
				if(!$_ql7i){
					$_ql79 = _qO0("\173c\150ecked\175", isset ($_POST[$this->_ql6c . "\137" . $_qO9]) ? "c\150ecked=\047checked\047" : "", $_ql79);
				}else{
					$_ql79 = _qO0("\173checked}", $this->_ql7a($_qO3c) ? "checked=\047checked\047" : "", $_ql79);
				}
				$_qO9++;
				$_qO78 .= $_ql79;
			}
			$_qO7o = _qO0("\173items\175", $_qO78, $_qO7g);
			$_ql7p = _qO0("\173id\175", $this->_ql6c, $_qO7h);
			$_ql7p = _qO0("\173val\165e\175", $_POST[$this->_ql6c . "_hidden"], $_ql7p);
			$_qlg  = _qO0("\173id}", $this->_ql6c, $_ql7d);
			$_qlg  = _qO0("\173width\175", $this->_ql6q, $_qlg);
			$_qlg  = _qO0("\173\150eight}", $this->_qO6q, $_qlg);
			$_qlg  = _qO0("\173f\165nction\137panel\175", $_qO7j, $_qlg);
			$_qlg  = _qO0("\173include_exclude}", $_qO7n, $_qlg);
			$_qlg  = _qO0("\173valuefilter}", $_ql7k, $_qlg);
			$_qlg  = _qO0("\173list}", $_qO7o, $_qlg);
			$_qlg  = _qO0("\173\150idden}", $_ql7p, $_qlg);

			return $_qlg;
		}

		function _qO7p($_qO5x = null){
			$_ql7h = "\074span id\075'\173id}\047\040class\075\047kptFieldItem\173dragable} \173css}' title='\173tooltip\175\047>\173text\175\173sort}\173filter}<\057span>";
			$_ql7q = "<s\160an class\075'kpt\104esc'>\173text}<\057span>";
			$_qO7q = "<s\160an class\075'kptFilterButton' title='\173tooltip\175\047\076</s\160an>";
			$_ql7r = "\074span class='k\160t\123ortB\165tton \153\160tSort\173direction}\173status}' title=\047\173toolti\160\175' onclick='pivot\137sort\137toggle(t\150is)'><\057span>";
			$_ql79 = _qO0("\173id}", $this->_ql6c, $_ql7h);
			$_ql79 = _qO0("\173dragable}", $this->AllowReorder ? " k\160tDragable" : "", $_ql79);
			$_qO7c = $this->_qO68->CssClasses;
			$_ql79 = _qO0("\173css}", isset ($_qO7c['field']) ? $_qO7c['field'] : "", $_ql79);
			$_ql79 = _qO0("\173tooltip}", ($this->Tooltip != null) ? $this->Tooltip : (($this->AllowReorder) ? $this->_qO68->Localization->_ql6g[_qlz::_qO2q] : ""), $_ql79);
			$_ql79 = _qO0("\173text}", $this->Text, $_ql79);
			if($_qO5x === _qO37::_ql14){
				$_ql79 = _qO0("\173sort}", "", $_ql79);
			}
			{
				switch(strtolower($this->Sort)){
					case _qlz::_qO10:
						$_qO7r = _qO0("\173direction\175", "Asc", $_ql7r);
						$_qO7r = _qO0("\173toolti\160\175", $this->_qO68->Localization->_ql6g[_qlz::_qO2s], $_qO7r);
						break;
					case _qlz::_ql11:
						$_qO7r = _qO0("\173direction\175", "\104esc", $_ql7r);
						$_qO7r = _qO0("\173tooltip}", $this->_qO68->Localization->_ql6g[_qlz::_ql2t], $_qO7r);
						break;
					case _qlz::_ql1y:
					default :
						$_qO7r = "";
						break;
				}
				$_ql7s = ($this->_qO6m) ? "\117n" : "Off";
				$_qO7r = _qO0("\173status\175", $_ql7s, $_qO7r);
				$_ql79 = _qO0("\173sort\175", $this->AllowSorting ? $_qO7r : "", $_ql79);
				$_ql76 = _qO0("\173tooltip}", $this->_qO68->Localization->_ql6g[_qlz::_qO2t], $_qO7q);
				$_ql79 = _qO0("\173filter}", $this->AllowFiltering ? $_ql76 : "", $_ql79);
			}

			return $_ql79;
		}

		function renderheader($_qlu){
			return $_qlu;
		}

		function renderheadertotal($_qlu){
			return _qO0("\173categor\171\175", $_qlu, $this->_qO68->Localization->_qO6f[_qlz::_ql2f]);
		}

		function _qO7s($_qlu, $_qO4j){
			return _qO0("\173category}", $_qlu, $this->_qO68->Localization->_qO6f[_qlz::_ql2f]) . $_qO4j;
		}

		function dataprocess($_qlu){
			return $_qlu;
		}

		function _ql7t($_qO7k){
			return $_qO7k;
		}

		function dataaggregate($_qlu, $_qO7t){
			return (($_qO7t === null) ? 0 : $_qO7t) + $_qlu;
		}

		function displayformat($_qlu){
			return $_qlu;
		}
	}

	class pivotfield extends baseField{
		var $_ql7u;
		var $_qO7u;
		var $NoMatchValue;
		var $ConvertToPercent = false;

		function __construct($_ql6t){
			parent:: __construct($_ql6t);
			$this->_ql7u = array();
			$this->_qO7u = array();
		}

		function _ql7t($_qO7k){
			if($this->ConvertToPercent){
				$_ql7v = $this->_qO68->_qO7v[_qO37::_ql15]->_ql7w(0);
				$_qO7w = $this->_qO68->_qO7v[_qO37::_qO15]->_ql7w(0);
				$this->_qO68->_ql7x($_ql7v, $_qO7w, $_qO7x, $_ql7y, $_qlk);
				$_qO7y = $this->_qO6r;
				$_ql7z = $_qO7k[$_qO7x][$_ql7y][$_qlk][$_qO7y];
				foreach($_qO7k as $_qO7z => $_ql80){
					foreach($_ql80 as $_qO80 => $_ql81){
						foreach($_ql81 as $_qO3c => $_qO81){
							$_qO7k[$_qO7z][$_qO80][$_qO3c][$_qO7y] = $_ql7z != 0 ? $_qO7k[$_qO7z][$_qO80][$_qO3c][$_qO7y] * 0144 / $_ql7z : 0;
						}
					}
				}
			}

			return $_qO7k;
		}
	}

	class pivotdatefield extends pivotfield{
		private static $_ql82 = array("\171ear", "\161\165arter", "mont\150", "day");
		private $_qO82 = array(
			"year"       => false,
			"quarter" => false,
			"month"         => false,
			"day"           => true
		);

		public function setdatefields($_qOn){
			if(is_array($_qOn)){
				foreach($_qOn as $_qO3c => $_ql3d){
					if(in_array(strtolower($_qO3c), _ql83::$_ql82)){
						$this->_qO82[strtolower($_qO3c)] = $_ql3d;
					}
				}
			}

			return $this;
		}

		public function getdatefields(){
			return $this->_qO82;
		}
	}

	class pivotstringfield extends pivotfield{
		var $SqlOperator = "";

		function renderheadertotal($_qlu){
			return $this->Text;
		}
	}

	class pivotsumfield extends pivotfield{
		var $ValueForNull = 0;
		var $DecimalNumber = 0;
		var $DecimalPoint = ".";
		var $ThousandSeperate = "\054";
		var $FormatString = "\173n}";

		function renderheadertotal($_qlu){
			$_qO4j = _qO0("\173categor\171\175", $_qlu, $this->_qO68->Localization->_qO6f[_qlz::_qO2f]);

			return $_qO4j;
		}

		function dataprocess($_qlu){
			$_qlu = parent::dataprocess($_qlu);
			if($_qlu == null){
				return $this->ValueForNull;
			}else{
				return $_qlu;
			}
		}

		function displayformat($_qlu){
			$_qO83 = (double)$_qlu;

			return _qO0("\173n}", number_format($_qO83, $this->DecimalNumber, $this->DecimalPoint, $this->ThousandSeperate), $this->FormatString);
		}
	}

	class pivotaveragefield extends pivotsumfield{
		var $DecimalNumber = 2;
		var $DecimalPoint = ".";
		var $ThousandSeperate = ",";
		var $SqlOperator = _ql3e::_qO3f;

		function renderheadertotal($_qlu){
			return _qO0("\173category\175", $_qlu, $this->_qO68->Localization->_qO6f[_qlz::_qO2h]);
		}
	}

	class pivotpercentagesumfield extends pivotsumfield{
		var $DecimalNumber = 2;
		var $FormatString = "\173n\175\045";
		var $ConvertToPercent = true;
		var $SqlOperator = _ql3e::_ql3g;

		function renderheadertotal($_qlu){
			return _qO0("\173category\175", $_qlu, $this->_qO68->Localization->_qO6f[_qlz::_ql2i]);
		}
	}

	class pivotpercentagecountfield extends pivotsumfield{
		var $DecimalNumber = 2;
		var $FormatString = "\173n}%";
		var $ConvertToPercent = true;
		var $SqlOperator = _ql3e::_qO3g;

		function renderheadertotal($_qlu){
			return _qO0("\173categor\171}", $_qlu, $this->_qO68->Localization->_qO6f[_qlz::_qO2i]);
		}
	}

	class pivotminfield extends pivotsumfield{
		var $SqlOperator = _ql3e::_ql3h;

		function renderheadertotal($_qlu){
			return _qO0("\173categor\171\175", $_qlu, $this->_qO68->Localization->_qO6f[_qlz::_qO2g]);
		}
	}

	class pivotmaxfield extends pivotsumfield{
		var $SqlOperator = _ql3e::_qO3h;

		function renderheadertotal($_qlu){
			return _qO0("\173category}", $_qlu, $this->_qO68->Localization->_qO6f[_qlz::_ql2h]);
		}
	}

	class pivotcountfield extends pivotsumfield{
		var $SqlOperator = _ql3e::_qO3g;

		function renderheadertotal($_qlu){
			return _qO0("\173categor\171\175", $_qlu, $this->_qO68->Localization->_qO6f[_qlz::_ql2g]);
		}
	}

	class _ql84 extends pivotfield{
		var $FieldName;
		var $Expand;
		var $_ql6s;

		public static function _qO84(){
			$_qO5x         = new baseField(_qlz::_qO12);
			$_qO5x->Expand = true;
			$_qO5x->_qO6t(_qlz::_qO12);

			return $_qO5x;
		}
	}

	class _ql85 extends _ql3t{
		var $_qO85;
		var $_ql86 = false;
		var $_qO86;
		var $_ql87 = "";
		public $_qO87;
		public $_ql88;
		public $_qO88 = array();
		var $_qO68;
		var $_ql6n;
		var $_ql6c;
		var $_ql89;
		var $_qO89;
		var $_qls;

		function __construct($_qlu, $_qO5x){
			$this->Value = $_qlu;
			$this->_ql3w = strlen($this->Value);
			$this->_ql3u = array();
			if(isset ($_qO5x)){
				$this->_qO85  = $_qO5x;
				$this->Expand = $_qO5x->Expand;
				$this->_qO68  = $_qO5x->_qO68;
			}
		}

		public static function _ql8a($_qlu, $_qO5x){
			$_ql3y = new _ql85($_qlu, $_qO5x);

			return $_ql3y;
		}

		public static function _qO8a($_qlu, $_qO5x){
			$_ql3y = new _ql8b($_qlu, $_qO5x);

			return $_ql3y;
		}

		function _qO8b($_qOn = ""){
			return parent::_qO41($_qOn);
		}

		function _ql8c($_qOn = ""){
			return parent::_qO42($_qOn);
		}

		function _ql7w($_qOn = 0){
			return parent::_ql43($_qOn);
		}

		function _qO8c(){
			return parent::_qO43();
		}

		function _ql8d($_ql40){
			$this->_ql87 = ($_ql40 != null) ? $_ql40->_ql87 . "\137" . $this->Value : $this->Value;
			$this->_qO86 = md5($this->_ql87);
			$this->_ql6c = $this->_qO68->_ql6c . "_" . $this->_qO86;
		}

		function _qO6a($_ql6b){
			$this->_qO68 = $_ql6b;
			$this->_ql6n = $_ql6b->_ql6n;
			$this->_ql8d($this->_qO3t);
			if($this->_qO89 === null){
				$this->_qO89 = $this->_qO68->AllowSortingData;
			}
			if($this->_ql89 === null){
				$this->_ql89 = _qlz::_qO10;
			}
			if($this->_qO87 === null){
				$this->_qO87 = "";
			}
			if($this->_ql88 === null){
				$this->_ql88 = "";
			}
		}

		function _qO75(){
			if($this->Expand != $this->_qO85->Expand || $this->_ql89 == _qlz::_ql11){
				$this->_ql6n->_ql69[$this->_ql6c] = array(_qlz::_qO1d => $this->Expand, _qlz::_qO1j => $this->_ql89,);
			}
		}

		function _qO6x(){
			if(isset ($this->_ql6n->_ql69[$this->_ql6c])){
				$_ql6y        = $this->_ql6n->_ql69[$this->_ql6c];
				$this->Expand = $_ql6y[_qlz::_qO1d];
				$this->_ql89  = $_ql6y[_qlz::_qO1j];
			}
		}

		function _qO7b($_ql76, $_qlu){
			$_qO8d = count($this->_ql3u);
			$_qO5i = 0;
			switch($_ql76){
				case _qlz::_qO35:
					foreach($this->_ql3u as $_ql44){
						if($_qO5i < $_qlu){
							$_ql44->_ql4c(true);
						}else{
							$_ql44->_ql4c(false);
						}
						$_qO5i++;
					}
					break;
				case _qlz::_ql36:
					foreach($this->_ql3u as $_ql44){
						if($_qO8d - $_qO5i - 1 < $_qlu){
							$_ql44->_ql4c(true);
						}else{
							$_ql44->_ql4c(false);
						}
						$_qO5i++;
					}
					break;
				case _qlz::_qO36:
					foreach($this->_ql3u as $_ql44){
						if(0144 * $_qO5i / $_qO8d < $_qlu){
							$_ql44->_ql4c(true);
						}else{
							$_ql44->_ql4c(false);
						}
						$_qO5i++;
					}
					break;
				case _qlz::_ql37:
					foreach($this->_ql3u as $_ql44){
						if(0144 * ($_qO8d - $_qO5i - 1) / $_qO8d < $_qlu){
							$_ql44->_ql4c(true);
						}else{
							$_ql44->_ql4c(false);
						}
						$_qO5i++;
					}
					break;
			}
		}

		function _ql8e($_qlu){
			$this->_ql89 = $_qlu;

			return $this;
		}

		function _qO8e($_qlu){
			$this->Expand = $_qlu;

			return $this;
		}

		function _ql8f($_qlu){
			$this->_qls = $_qlu;

			return $this;
		}

		function getsortvalue(){
			return $this->_qls;
		}

		function _qO6z($_qlm){
			if(isset ($_qlm->_qO6f[$this->_ql6c])){
				$_ql5f = $_qlm->_qO6f[$this->_ql6c];
				$_ql70 = $this->_qO68;
				switch($_ql5f[_qlz::_ql1d]){
					case _qlz::_qO1d:
						if($_ql70->EventHandler->onbeforegroupexpand($this, array()) == true){
							$this->_qO8e(true);
							$_ql70->EventHandler->ongroupexpand($this, array());
						}
						break;
					case _qlz::_ql1e:
						if($_ql70->EventHandler->onbeforegroupcollapse($this, array()) == true){
							$this->_qO8e(false);
							$_ql70->EventHandler->ongroupcollapse($this, array());
						}
						break;
					case _qlz::_qO1e:
						if($_ql70->EventHandler->_qO8f($this, array()) == true){
							$this->_ql8e($_ql5f[_qlz::_ql21][_qlz::_qO1j])->_ql8g();
							$_ql70->setsortstate(_qlz::_qO34);
							$_ql70->EventHandler->_qO8g($this, array());
						}
						break;
				}
			}
		}

		function _ql8g(){
			$_ql8h                                   = array(_qlz::_ql1x => $this->_ql6c, _qlz::_qO18 => $this->_ql89);
			$this->_qO68->_qO72[$this->_qO85->_ql6s] = $_ql8h;

			return $this;
		}

		function _qO8h(){
			$_ql8i = array();
			foreach($this->_ql3u as $_qO8i){
				array_push($_ql8i, $_qO8i->_ql6c);
			}

			return array(
				_qlz::_qO1d => $this->Expand,
				_qlz::_ql17 => urlencode($this->Value),
				_qlz::_qO1t => $this->_ql86,
				_qlz::_ql1u => $this->_ql87,
				_qlz::_qO1u => $this->_qO87,
				_qlz::_ql1v => $this->_ql88,
				_qlz::_ql1x => $this->_ql6c,
				_qlz::_qO1x => $_ql8i,
				_qlz::_qlz  => $this->_qO86,
				_qlz::_qO1j => $this->_ql89,
				_qlz::_ql19 => $this->_qls,
				_qlz::_qO1v => $this->_qO88,
			);
		}

		function _dosortinggroups($_ql10){
			if(count($this->_ql3u) > 0){
				switch($_ql10){
					case _qlz::_qO10:
						uasort($this->_ql3u, 'Groups_Compare_asc');
						break;
					case _qlz::_ql11:
						uasort($this->_ql3u, 'Groups_Compare_desc');
						break;
				}
				foreach($this->_ql3u as $_qO8i){
					$_qO8i->_dosortinggroups($_ql10);
				}
			}
		}

		function _ql8j(){
			if(!empty($this->_ql3u)){
				foreach($this->_ql3u as $_ql46){
					$_qO5x = $_ql46->_qO85;
					$_ql10 = ($_qO5x->Sort != null) ? $_qO5x->Sort : $this->_qO68->_qO8j[$_qO5x->_ql6s];
					break;
				}
				switch($_ql10){
					case _qlz::_qO10:
						uasort($this->_ql3u, 'Groups_Compare_asc');
						break;
					case _qlz::_ql11:
						uasort($this->_ql3u, 'Groups_Compare_desc');
						break;
					case "custom":
						if(function_exists("\107roups_Com\160are_custom")){
							uasort($this->_ql3u, 'Groups_Compare_custom');
						}
						break;
				}
				foreach($this->_ql3u as $_qO8i){
					$_qO8i->_ql8j();
				}
			}
		}

		function _ql8k(){
			$_qO8k = 0;
			$_ql8l = 2;
			$_ql6  = array();
			if($this->Expand){
				$_qO3s = new _qO3p();
				$this->_qO46($_ql8l);
				$this->_ql49(1);
				$this->_ql48(0);
				$_qO3s->_qO3n($this);
				$_qO8l = new _qO3p();
				while(!$_qO3s->_ql3p()){
					$_ql3y = $_qO3s->_ql3o();
					$_ql3y->_qO4b($_qO8k++);
					$_qO8l->_qO3n($_ql3y);
					if($_ql3y->Expand){
						foreach($_ql3y->_ql3u as $_ql46){
							if($_ql46->_ql42()){
								$_ql46->_qO46($_ql3y->_qO47() + 1);
								$_ql46->_ql49(1);
								$_ql46->_ql48(0);
								$_qO3s->_qO3n($_ql46);
							}
						}
					}
				}
				while(!$_qO8l->_ql3p()){
					$_ql3y = $_qO8l->_ql3o();
					$_ql40 = $_ql3y->_qO44();
					if($_ql3y->_qO48() >= $_ql40->_qO48()){
						$_ql40->_ql48($_ql3y->_qO48() + 1);
					}
					$_ql40->_qO49($_ql3y->_ql4a());
					array_push($_ql6, $_ql3y);
				}
			}

			return $_ql6;
		}

		function _ql8m(){
			$_ql7d = "\173sign}\173text}\173sort}";
			$_qO8m = "\074span class='\173status}\047\040onclick='\160ivot\137group_toggle(t\150is)'>\074\057span\076";
			$_ql7q = "<span\040class\075'k\160tDesc'>\173text}\074\057span\076";
			$_ql7r = "\074span class='kpt\123ortButton kpt\123ort\173direction}\173status}\047\040title\075'\173tooltip\175\047 onclick='pivot_gro\165\160_sort\137toggle\050this)'\076\074/span\076";
			if($this->_qO68->AllowSortingData){
				switch(strtolower($this->_ql89)){
					case _qlz::_qO10:
						$_qO7r = _qO0("\173direction}", "Asc", $_ql7r);
						$_qO7r = _qO0("\173tooltip}", $this->_qO68->Localization->_ql6g[_qlz::_qO2s], $_qO7r);
						break;
					case _qlz::_ql11:
						$_qO7r = _qO0("\173direction}", "\104esc", $_ql7r);
						$_qO7r = _qO0("\173tooltip}", $this->_qO68->Localization->_ql6g[_qlz::_ql2t], $_qO7r);
						break;
					case _qlz::_ql1y:
					default :
						$_qO7r = "";
						break;
				}
				$_ql7s = "\117ff";
				if(!empty($this->_qO68->_qO72)){
					foreach($this->_qO68->_qO72 as $_qO3d => $_ql8h){
						if(!empty($_ql8h) && $_ql8h[_qlz::_ql1x] == $this->_ql6c){
							$_ql7s = "On";
						}
					}
				}
				$_qO7r = _qO0("\173status}", $_ql7s, $_qO7r);
			}else{
				$_qO7r = "";
			}
			$_ql7d = _qO0("\173sort}", $this->_qO68->AllowSortingData ? $_qO7r : "", $_ql7d);
			$_ql8n = "";
			if($this->_ql86){
				$_ql8n = _qO0("\173status\175", $this->Expand ? "\153\160tExpand" : "\153\160tCollapse", $_qO8m);
			}
			$_qO4j = "";
			$_qlg  = _qO0("\173text}", $this->_qO85->renderheader($this->Value) . $_qO4j, $_ql7d);
			$_qlg  = _qO0("\173sign}", $_ql8n, $_qlg);

			return $_qlg;
		}

		function _qO8n(){
			return $this->_qO85->renderheadertotal($this->Value);
		}

		function _ql6d(){
			return "";
		}
	}

	class _ql8o extends _ql85{
		var $Expand = true;
	}

	class _qO8o extends _ql85{
		var $Expand = true;
	}

	class _ql8b extends _ql85{
		var $Expand = true;

		function _ql8m(){
			return "<b>" . $this->_qO68->Localization->_qO6f[_qlz::_qO2e] . "</b\076";
		}
	}

	class _ql8p extends _ql8b{
	}

	class _qO8p extends _ql8b{
	}

	class _ql8q{
		var $_ql6c;
		var $_qO68;
		var $_qO6f;

		function _qO6a($_ql6b){
			$this->_qO68 = $_ql6b;
			$this->_ql6c = $_ql6b->_ql6c . "\137cmd";
			$this->_qO8q();
		}

		function _qO8q(){
			if(isset ($_POST[$this->_ql6c])){
				$_qO6b       = $_POST[$this->_ql6c];
				$_qO6b       = _qO0("\134", "", $_qO6b);
				$this->_qO6f = json_decode($_qO6b, true);
			}
		}

		function _ql6d(){
			$_ql8r = "<inp\165t id='\173id}' name='\173id}' t\171pe=\047\150idden' val\165e='' /\076";
			$_qlm  = _qO0("\173id}", $this->_ql6c, $_ql8r);

			return $_qlm;
		}
	}

	class _qO8r{
		var $LoadingText;
		var $DoneText;

		function _qO6a($_ql6b){
			if($this->LoadingText === null){
				$this->LoadingText = $_ql6b->Localization->_ql6g[_qlz::_qO2r];
			}
			if($this->DoneText === null){
				$this->DoneText = $_ql6b->Localization->_ql6g[_qlz::_ql2r];
			}
		}

		function _ql6d(){
			$_ql8s = "\074div\040class=\047\153ptStatus'><s\160an class='\153\160tDoneText'\076\173donetext}</s\160an><s\160an class='kpt\114oading\124ext'>\173loadingtext}<\057span>\074\057div>";
			$_ql7s = _qO0("\173donetext}", $this->DoneText, $_ql8s);
			$_ql7s = _qO0("\173loadingtext}", $this->LoadingText, $_ql7s);

			return $_ql7s;
		}
	}

	class pivotpager{
		var $PageSize = 012;
		var $PageIndex = 0;
		var $ShowPageSize = false;
		var $PageSizeText;
		var $PageSizeOptions = "5,\061\060,20,40";
		var $ShowPageInfo = true;
		var $PageInfoTemplate;
		var $_qO8s;
		var $_ql8t;
		var $_ql6c;
		var $_qO68;
		var $_ql6n;

		function _qO6a($_ql6b){
			$this->_qO68 = $_ql6b;
			$this->_ql6n = $_ql6b->_ql6n;
			$this->_ql6c = $_ql6b->_ql6c . "_\160g";
			if($this->PageInfoTemplate === null){
				$this->PageInfoTemplate = $_ql6b->Localization->_ql6g[_qlz::_ql2j];
			}
			if($this->PageSizeText === null){
				$this->PageSizeText = $_ql6b->Localization->_ql6g[_qlz::_ql2k];
			}
		}

		function _qO6x(){
			if(isset ($this->_ql6n->_ql69[$this->_ql6c])){
				$_ql6y           = $this->_ql6n->_ql69[$this->_ql6c];
				$this->PageIndex = $_ql6y[_qlz::_qO1y];
				$this->PageSize  = $_ql6y[_qlz::_ql1z];
				$this->_qO8s     = $_ql6y[_qlz::_qO1z];
				$this->_ql8t     = $_ql6y[_qlz::_ql20];
			}
		}

		function _qO6z($_qlm){
			if(isset ($_qlm->_qO6f[$this->_ql6c])){
				$_ql5f = $_qlm->_qO6f[$this->_ql6c];
				$_ql71 = $_ql5f[_qlz::_ql1d];
				$_qO71 = $_ql5f[_qlz::_ql21];
				switch($_ql71){
					case _qlz::_qO20:
						if($this->_qO68->EventHandler->onbeforepagechange($this, array(_qlz::_qO1y => $_qO71[_qlz::_qO1y])) == true){
							$this->PageIndex = $_qO71[_qlz::_qO1y];
							$this->_qO68->EventHandler->onpagechange($this, array(_qlz::_qO1y => $_qO71[_qlz::_qO1y]));
						}
						break;
					case _qlz::_qO21:
						if($this->_qO68->EventHandler->onbeforepagesizechange($this, array(_qlz::_ql1z => $_qO71[_qlz::_ql1z])) == true){
							$this->PageSize = $_qO71[_qlz::_ql1z];
							$this->_qO68->EventHandler->onpagesizechange($this, array(_qlz::_ql1z => $_qO71[_qlz::_ql1z]));
						}
						break;
				}
			}
			$this->_ql8t = ceil($this->_qO8s / $this->PageSize);
			if($this->PageIndex >= $this->_ql8t){
				$this->PageIndex = $this->_ql8t - 1;
			}
			if($this->PageIndex < 0){
				$this->PageIndex = 0;
			}
		}

		function _qO75(){
			$this->_ql6n->_ql69[$this->_ql6c] = array(
				_qlz::_qO1y => $this->PageIndex,
				_qlz::_ql1z => $this->PageSize,
				_qlz::_qO1z => $this->_qO8s,
				_qlz::_ql20 => $this->_ql8t
			);
		}

		function _qO8t(){
			$_ql8u = "<div class\075\047kptInfo'>\173text}<\057div>";
			$_ql3  = _qO0("\173Page\111ndex\175", ($this->_ql8t > 0) ? ($this->PageIndex + 1) : 0, $this->PageInfoTemplate);
			$_ql3  = _qO0("\173\124otalPages}", $this->_ql8t, $_ql3);
			$_qO8u = ($this->_ql8t > 0) ? ($this->PageIndex * $this->PageSize + 1) : 0;
			$_ql8v = ($this->PageIndex + 1) * $this->PageSize;
			if($_ql8v > $this->_qO8s){
				$_ql8v = $this->_qO8s;
			}
			$_ql3  = _qO0("\173FirstIndexInPage\175", $_qO8u, $_ql3);
			$_ql3  = _qO0("\173\114astIndex\111nPage\175", $_ql8v, $_ql3);
			$_ql3  = _qO0("\173\124otalRows\175", $this->_qO8s, $_ql3);
			$_qO8v = _qO0("\173text}", $_ql3, $_ql8u);

			return $_qO8v;
		}

		function _ql8w(){
			$_qO8w = "<div\040class='\153\160tPageSi\172e'>\173text}\173select\175</div>";
			$_ql8x = "<select\040onchange\075'pivot\137pagesi\172e_select_onchange\050this)\047\076\173options}\074\057select>";
			$_ql7f = "\074option value='\173value}'\040\173selected}>\173value\175</option>";
			$_qO7l = "";
			$_qO7k = explode(',', $this->PageSizeOptions);
			for($_qO9 = 0; $_qO9 < sizeof($_qO7k); $_qO9++){
				$_ql7m = _qO0("\173value}", $_qO7k[$_qO9], $_ql7f);
				$_ql7m = _qO0("\173selected\175", ($this->PageSize == (int)$_qO7k[$_qO9]) ? "selected" : "", $_ql7m);
				$_qO7l .= $_ql7m;
			}
			$_ql5s = _qO0("\173options}", $_qO7l, $_ql8x);
			$_qO8x = _qO0("\173text\175", $this->PageSizeText, $_qO8w);
			$_qO8x = _qO0("\173select}", $_ql5s, $_qO8x);

			return $_qO8x;
		}

		function render(){
			return "\133\160ager zone\135";
		}
	}

	class pivotprevnextandnumericpager extends pivotpager{
		var $Range = 012;
		var $FirstPageText;
		var $FirstPageToolTip;
		var $PrevPageText;
		var $PrevPageToolTip;
		var $NextPageText;
		var $NextPageToolTip;
		var $LastPageText;
		var $LastPageToolTip;

		function _qO6a($_ql6b){
			parent::_qO6a($_ql6b);
			$_ql5f = $_ql6b->Localization->_qO6f;
			$_ql8y = $_ql6b->Localization->_ql6g;
			if($this->FirstPageText === null){
				$this->FirstPageText = $_ql5f[_qlz::_ql2b];
			}
			if($this->FirstPageToolTip === null){
				$this->FirstPageToolTip = $_ql8y[_qlz::_qO2l];
			}
			if($this->PrevPageText === null){
				$this->PrevPageText = $_ql5f[_qlz::_ql2a];
			}
			if($this->PrevPageToolTip === null){
				$this->PrevPageToolTip = $_ql8y[_qlz::_ql2l];
			}
			if($this->NextPageText === null){
				$this->NextPageText = $_ql5f[_qlz::_qO29];
			}
			if($this->NextPageToolTip === null){
				$this->NextPageToolTip = $_ql8y[_qlz::_qO2k];
			}
			if($this->LastPageText === null){
				$this->LastPageText = $_ql5f[_qlz::_qO2a];
			}
			if($this->LastPageToolTip === null){
				$this->LastPageToolTip = $_ql8y[_qlz::_ql2m];
			}
		}

		function render(){
			$_qO8y = "<div class='k\160tPager\040\153ptNext\120revAndNumericPager'\076\173nav}\173\160agesize\175\173info\175\074div\040style='clear:bot\150'></div></div\076";
			$_ql8z = "<div class='kptNav'>\173first}\040\173prev}\040\173numbers} \173next} \173last}</div>";
			$_qO8z = "<a\040class='\153\160tNum \173selected\175' \173\150ref}\040\173onclic\153\175><span\076\173number\175\074/span\076\074/a> ";
			$_ql7e = "\074in\160ut t\171pe=\047button' onclick='\173onclick}' title='\173title}'\040class\075\047nodecor'/\076";
			$_ql90 = "\074a href\075\047javascript\072void 0\047\040onclick='\173onclic\153}' title='\173title}'\076\173text\175\074/a>";
			$_qO90 = "\074span class= '\173class}\047\076\173button}\074\057span\076";
			$_ql91 = floor($this->PageIndex / $this->Range) * $this->Range;
			$_qO91 = "";
			if($_ql91 > 0){
				$_qO83 = _qO0("\173href}", "\150ref='javascript\072void 0\047", $_qO8z);
				$_qO83 = _qO0("\173onclick\175", "onclic\153\075'pivot\137gopage(this\054" . ($_ql91 - 1) . "\051'", $_qO83);
				$_qO83 = _qO0("\173n\165mber}", "\056..", $_qO83);
				$_qO91 .= $_qO83;
			}
			for($_qO9 = $_ql91; $_qO9 < $_ql91 + $this->Range && $_qO9 < $this->_ql8t; $_qO9++){
				$_qO83 = _qO0("\173n\165mber\175", ($_qO9 + 1), $_qO8z);
				if($_qO9 == $this->PageIndex){
					$_qO83 = _qO0("\173selected\175", "kptNum\123elected", $_qO83);
					$_qO83 = _qO0("\173\150ref}", "", $_qO83);
					$_qO83 = _qO0("\173onclick}", "", $_qO83);
				}else{
					$_qO83 = _qO0("\173selected}", "", $_qO83);
					$_qO83 = _qO0("\173href}", "href\075'javascript\072void\0400'", $_qO83);
					$_qO83 = _qO0("\173onclick\175", "onclick='pivot_gopage(this\054" . $_qO9 . "\051'", $_qO83);
				}
				$_qO91 .= $_qO83;
			}
			if($_ql91 + $this->Range < $this->_ql8t){
				$_qO83 = _qO0("\173href}", "href='\152avascri\160t\072void 0'", $_qO8z);
				$_qO83 = _qO0("\173onclic\153}", "onclick='\160ivot_gopage(t\150is," . ($_ql91 + $this->Range) . "\051\047", $_qO83);
				$_qO83 = _qO0("\173number\175", "\056..", $_qO83);
				$_qO83 = _qO0("\173selected\175", "", $_qO83);
				$_qO91 .= $_qO83;
			}
			$_ql92 = _qO0("\173onclic\153}", ($this->PageIndex > 0) ? "\160ivot_go\160age(t\150is,0)" : "", $_ql7e);
			$_ql92 = _qO0("\173title}", $this->FirstPageToolTip, $_ql92);
			$_qO92 = _qO0("\173onclick\175", ($this->PageIndex > 0 && $this->FirstPageText !== null) ? "pivot\137gopage\050this,\060\051" : "", $_ql90);
			$_qO92 = _qO0("\173text}", $this->FirstPageText, $_qO92);
			$_qO92 = _qO0("\173title\175", $this->FirstPageToolTip, $_qO92);
			$_ql93 = _qO0("\173b\165tton}", $_ql92 . $_qO92, $_qO90);
			$_ql93 = _qO0("\173class}", "kptFirst", $_ql93);
			$_qO93 = _qO0("\173onclic\153\175", ($this->PageIndex > 0) ? "pivot_go\160age(t\150is\054" . ($this->PageIndex - 1) . "\051" : "", $_ql7e);
			$_qO93 = _qO0("\173title}", $this->PrevPageToolTip, $_qO93);
			$_ql94 = _qO0("\173onclic\153}", ($this->PageIndex > 0 && $this->PrevPageText !== null) ? "\160ivot_gopage\050this," . ($this->PageIndex - 1) . ")" : "", $_ql90);
			$_ql94 = _qO0("\173text}", $this->PrevPageText, $_ql94);
			$_ql94 = _qO0("\173title}", $this->PrevPageToolTip, $_ql94);
			$_qO94 = _qO0("\173b\165tton\175", $_qO93 . $_ql94, $_qO90);
			$_qO94 = _qO0("\173class}", "\153pt\120rev", $_qO94);
			$_ql95 = _qO0("\173onclic\153}", ($this->PageIndex < $this->_ql8t - 1) ? "\160ivot\137gopage(t\150is\054" . ($this->PageIndex + 1) . "\051" : "", $_ql7e);
			$_ql95 = _qO0("\173title}", $this->NextPageToolTip, $_ql95);
			$_qO95 = _qO0("\173onclick}", (($this->PageIndex < $this->_ql8t - 1) && $this->NextPageText !== null) ? "pivot\137gopage(t\150is\054" . ($this->PageIndex + 1) . "\051" : "", $_ql90);
			$_qO95 = _qO0("\173text}", $this->NextPageText, $_qO95);
			$_qO95 = _qO0("\173title\175", $this->NextPageToolTip, $_qO95);
			$_ql96 = _qO0("\173b\165tton\175", $_qO95 . $_ql95, $_qO90);
			$_ql96 = _qO0("\173class}", "kptNext", $_ql96);
			$_qO96 = _qO0("\173onclick}", ($this->PageIndex < $this->_ql8t - 1) ? "pivot_gopage(this\054" . ($this->_ql8t - 1) . ")" : "", $_ql7e);
			$_qO96 = _qO0("\173title}", $this->LastPageToolTip, $_qO96);
			$_ql97 = _qO0("\173onclic\153}", (($this->PageIndex < $this->_ql8t - 1) && $this->LastPageText !== null) ? "\160ivot_go\160age(this\054" . ($this->_ql8t - 1) . ")" : "", $_ql90);
			$_ql97 = _qO0("\173text}", $this->LastPageText, $_ql97);
			$_ql97 = _qO0("\173title}", $this->LastPageToolTip, $_ql97);
			$_qO97 = _qO0("\173button}", $_ql97 . $_qO96, $_qO90);
			$_qO97 = _qO0("\173class}", "\153ptLast", $_qO97);
			$_ql98 = _qO0("\173numbers}", $_qO91, $_ql8z);
			$_ql98 = _qO0("\173prev}", $_qO94, $_ql98);
			$_ql98 = _qO0("\173next}", $_ql96, $_ql98);
			$_ql98 = _qO0("\173first}", $_ql93, $_ql98);
			$_ql98 = _qO0("\173last\175", $_qO97, $_ql98);
			$_qO8x = ($this->ShowPageSize) ? $this->_ql8w() : "";
			$_qO8v = ($this->ShowPageInfo) ? $this->_qO8t() : "";
			$_qO98 = _qO0("\173nav}", $_ql98, $_qO8y);
			$_qO98 = _qO0("\173info}", $_qO8v, $_qO98);
			$_qO98 = _qO0("\173pagesize\175", $_qO8x, $_qO98);

			return $_qO98;
		}
	}

	class pivotprevnextpager extends pivotpager{
		var $FirstPageText;
		var $FirstPageToolTip;
		var $PrevPageText;
		var $PrevPageToolTip;
		var $NextPageText;
		var $NextPageToolTip;
		var $LastPageText;
		var $LastPageToolTip;

		function _qO6a($_ql99){
			parent::_qO6a($_ql6b);
			$_ql5f = $_ql6b->Localization->_qO6f;
			$_ql8y = $_ql6b->Localization->_ql6g;
			if($this->FirstPageText === null){
				$this->FirstPageText = $_ql5f[_qlz::_ql2b];
			}
			if($this->FirstPageToolTip === null){
				$this->FirstPageToolTip = $_ql8y[_qlz::_qO2l];
			}
			if($this->PrevPageText === null){
				$this->PrevPageText = $_ql5f[_qlz::_ql2a];
			}
			if($this->PrevPageToolTip === null){
				$this->PrevPageToolTip = $_ql8y[_qlz::_ql2l];
			}
			if($this->NextPageText === null){
				$this->NextPageText = $_ql5f[_qlz::_qO29];
			}
			if($this->NextPageToolTip === null){
				$this->NextPageToolTip = $_ql8y[_qlz::_qO2k];
			}
			if($this->LastPageText === null){
				$this->LastPageText = $_ql5f[_qlz::_qO2a];
			}
			if($this->LastPageToolTip === null){
				$this->LastPageToolTip = $_ql8y[_qlz::_ql2m];
			}
		}

		function render(){
			$_qO8y = "\074div class='k\160tPager\040kptNextPrevNext\120ager'\076\173pagesi\172e}\173nav}\173info}<div style='clear:both\047\076</div\076</div\076";
			$_ql8z = "<div\040class=\047\153ptNav\047\076\173first} \173\160rev}\040\173next\175 \173last}</div\076";
			$_ql7e = "\074input\040type='b\165tton'\040onclic\153='\173onclic\153\175' title='\173title}\047\040class='nodecor'/>";
			$_ql90 = "\074a href\075'javascript:void 0' onclic\153\075'\173onclick\175\047 title\075'\173title}'>\173text}\074\057a>";
			$_qO90 = "<span\040class=\040\047\173class}'>\173b\165tton\175</s\160an>";
			$_ql92 = _qO0("\173onclick}", ($this->PageIndex > 0) ? "pivot_go\160age(t\150is,0)" : "", $_ql7e);
			$_ql92 = _qO0("\173title}", $this->FirstPageToolTip, $_ql92);
			$_qO92 = _qO0("\173onclic\153\175", ($this->PageIndex > 0 && $this->FirstPageText !== null) ? "pivot\137gopage\050this,\060\051" : "", $_ql90);
			$_qO92 = _qO0("\173text\175", $this->FirstPageText, $_qO92);
			$_qO92 = _qO0("\173title}", $this->FirstPageToolTip, $_qO92);
			$_ql93 = _qO0("\173button}", $_ql92 . $_qO92, $_qO90);
			$_ql93 = _qO0("\173class}", "\153\160tFirst", $_ql93);
			$_qO93 = _qO0("\173onclick\175", ($this->PageIndex > 0) ? "pivot_go\160age(t\150is," . ($this->PageIndex - 1) . ")" : "", $_ql7e);
			$_qO93 = _qO0("\173title}", $this->PrevPageToolTip, $_qO93);
			$_ql94 = _qO0("\173onclic\153\175", ($this->PageIndex > 0 && $this->PrevPageText !== null) ? "pivot\137gopage\050this," . ($this->PageIndex - 1) . "\051" : "", $_ql90);
			$_ql94 = _qO0("\173text}", $this->PrevPageText, $_ql94);
			$_ql94 = _qO0("\173title}", $this->PrevPageToolTip, $_ql94);
			$_qO94 = _qO0("\173button\175", $_qO93 . $_ql94, $_qO90);
			$_qO94 = _qO0("\173class}", "\153\160tPrev", $_qO94);
			$_ql95 = _qO0("\173onclic\153\175", ($this->PageIndex < $this->_ql8t - 1) ? "pivot_go\160age(t\150is," . ($this->PageIndex + 1) . ")" : "", $_ql7e);
			$_ql95 = _qO0("\173title}", $this->NextPageToolTip, $_ql95);
			$_qO95 = _qO0("\173onclick\175", (($this->PageIndex < $this->_ql8t - 1) && $this->NextPageText !== null) ? "pivot_go\160age\050t\150is," . ($this->PageIndex + 1) . "\051" : "", $_ql90);
			$_qO95 = _qO0("\173text}", $this->NextPageText, $_qO95);
			$_qO95 = _qO0("\173title}", $this->NextPageToolTip, $_qO95);
			$_ql96 = _qO0("\173button\175", $_qO95 . $_ql95, $_qO90);
			$_ql96 = _qO0("\173class}", "kptNext", $_ql96);
			$_qO96 = _qO0("\173onclick}", ($this->PageIndex > 0) ? "\160ivot_go\160age(this," . ($this->_ql8t - 1) . "\051" : "", $_ql7e);
			$_qO96 = _qO0("\173title\175", $this->LastPageToolTip, $_qO96);
			$_ql97 = _qO0("\173onclick}", (($this->PageIndex < $this->_ql8t - 1) && $this->LastPageText !== null) ? "pivot\137gopage\050this," . ($this->_ql8t - 1) . "\051" : "", $_ql90);
			$_ql97 = _qO0("\173text\175", $this->LastPageText, $_ql97);
			$_ql97 = _qO0("\173title}", $this->LastPageToolTip, $_ql97);
			$_qO97 = _qO0("\173b\165tton\175", $_ql97 . $_qO96, $_qO90);
			$_qO97 = _qO0("\173class}", "kpt\114ast", $_qO97);
			$_ql98 = _qO0("\173\160rev}", $_qO94, $_ql8z);
			$_ql98 = _qO0("\173next\175", $_ql96, $_ql98);
			$_ql98 = _qO0("\173first}", $_ql93, $_ql98);
			$_ql98 = _qO0("\173last}", $_qO97, $_ql98);
			$_qO8x = ($this->ShowPageSize) ? $this->_ql8w() : "";
			$_qO8v = ($this->ShowPageInfo) ? $this->_qO8t() : "";
			$_qO98 = _qO0("\173nav}", $_ql98, $_qO8y);
			$_qO98 = _qO0("\173info}", $_qO8v, $_qO98);
			$_qO98 = _qO0("\173\160agesize\175", $_qO8x, $_qO98);

			return $_qO98;
		}
	}

	class pivotnumericpager extends pivotpager{
		var $Range = 012;

		function render(){
			$_qO8y = "\074div class='\153ptPager\040k\160tNumeric\120ager\047>\173\160agesi\172e}\173nav\175\173info}\074div style\075'clear\072bot\150'><\057div>\074/div\076";
			$_ql8z = "\074div class='kptNav'>\173numbers\175</div\076";
			$_qO8z = "<a class='kptN\165m \173selected\175\047 \173href} \173onclick\175\076<span\076\173number}</span\076</a\076\040";
			$_ql91 = floor($this->PageIndex / $this->Range) * $this->Range;
			$_qO91 = "";
			if($_ql91 > 0){
				$_qO83 = _qO0("\173href}", "\150ref='\152avascript\072void\0400'", $_qO8z);
				$_qO83 = _qO0("\173onclic\153}", "onclick='grid_gopage(t\150is\054" . ($_ql91 - 1) . "\051'", $_qO83);
				$_qO83 = _qO0("\173n\165mber\175", "...", $_qO83);
				$_qO91 .= $_qO83;
			}
			for($_qO9 = $_ql91; $_qO9 < $_ql91 + $this->Range && $_qO9 < $this->_ql8t; $_qO9++){
				$_qO83 = _qO0("\173n\165mber}", ($_qO9 + 1), $_qO8z);
				if($_qO9 == $this->PageIndex){
					$_qO83 = _qO0("\173selected\175", "\153\160tNumSelected", $_qO83);
					$_qO83 = _qO0("\173href}", "", $_qO83);
					$_qO83 = _qO0("\173onclick\175", "", $_qO83);
				}else{
					$_qO83 = _qO0("\173selected}", "", $_qO83);
					$_qO83 = _qO0("\173\150ref}", "\150ref='\152avascri\160t:void\0400'", $_qO83);
					$_qO83 = _qO0("\173onclick\175", "onclick='grid\137gopage\050this," . $_qO9 . "\051\047", $_qO83);
				}
				$_qO91 .= $_qO83;
			}
			if($_ql91 + $this->Range < $this->_ql8t){
				$_qO83 = _qO0("\173\150ref}", "\150ref='javascript\072void \060\047", $_qO8z);
				$_qO83 = _qO0("\173onclick}", "onclick='grid_gopage(this\054" . ($_ql91 + $this->Range) . ")\047", $_qO83);
				$_qO83 = _qO0("\173number\175", "\056\056.", $_qO83);
				$_qO83 = _qO0("\173selected\175", "", $_qO83);
				$_qO91 .= $_qO83;
			}
			$_ql98 = _qO0("\173numbers}", $_qO91, $_ql8z);
			$_qO8x = ($this->ShowPageSize) ? $this->_ql8w() : "";
			$_qO8v = ($this->ShowPageInfo) ? $this->_qO8t() : "";
			$_qO98 = _qO0("\173nav\175", $_ql98, $_qO8y);
			$_qO98 = _qO0("\173info}", $_qO8v, $_qO98);
			$_qO98 = _qO0("\173pagesize\175", $_qO8x, $_qO98);

			return $_qO98;
		}
	}

	class pivotmanualpager extends pivotpager{
		var $ManualPagerTemplate;
		var $ButtonType = "B\165tton";
		var $GoPageButtonText;
		var $TextBoxWidth = "25px";

		function _qO6a($_ql6b){
			parent::_qO6a($_ql6b);
			if($this->ManualPagerTemplate === null){
				$this->ManualPagerTemplate = $_ql6b->Localization->_ql6g[_qlz::_qO2j];
			}
			if($this->GoPageButtonText === null){
				$this->GoPageButtonText = $_ql6b->Localization->_qO6f[_qlz::_ql29];
			}
		}

		function _qO99($_qlm){
			parent::_qO99($_qlm);
			if(isset ($_qlm->_qO6f[$this->_ql6c])){
				$_ql5f           = $_qlm->_qO6f[$this->_ql6c];
				$this->PageIndex = ((int)$_POST[$this->_ql6c . "_inp\165t"]) - 1;
				if($this->PageIndex >= $this->_ql8t){
					$this->PageIndex = $this->_ql8t - 1;
				}
				if($this->PageIndex < 0){
					$this->PageIndex = 0;
				}
			}
		}

		function render(){
			$_qO8y = "\074div class\075'kptPager kpt\115anualPager'>\173\160agesi\172e}\173nav}\173info\175\074div\040style=\047clear:both'><\057div></div\076";
			$_ql8z = "\074div class\075'kptNav'>\173main}</div>";
			$_ql9a = "\074input id\075\047\173id}\047\040name=\047\173id}' t\171\160e='textbox'\040style=\047width:\173width}\073\047 val\165e\075'\173text}'/\076";
			$_ql7d = $this->ManualPagerTemplate;
			$_qO9a = "";
			switch(strtolower($this->ButtonType)){
				case "link":
					$_qO9a = "\074a class\075'kpt\107oButton\047\040href='\152avascri\160t\072void\040\060' onclic\153\075'grid_go\160age\050this\054\060)'\076\173text\175</a\076";
					break;
				case "image":
					$_qO9a = "<in\160ut class='k\160tGoButton kpt\107o\111mage\047\040type=\047b\165tton\047\040onclic\153\075'grid\137gopage\050t\150is,0\051\047 />";
					break;
				case "button":
				default :
					$_qO9a = "\074input class='\153\160tGoButton' ty\160e='button' onclick='grid_gopage(this\054\060)' val\165e='\173text}' \057\076";
					break;
			}
			$_ql9b = _qO0("\173id\175", $this->_ql6c . "_input", $_ql9a);
			$_ql9b = _qO0("\173widt\150\175", $this->TextBoxWidth, $_ql9b);
			$_ql9b = _qO0("\173text}", $this->PageIndex + 1, $_ql9b);
			$_qO9b = _qO0("\173text}", $this->GoPageButtonText, $_qO9a);
			$_qlg  = _qO0("\173Text\102ox}", $_ql9b, $_ql7d);
			$_qlg  = _qO0("\173\107oPageB\165tton}", $_qO9b, $_qlg);
			$_qlg  = _qO0("\173TotalPage}", $this->_ql8t, $_qlg);
			$_ql98 = _qO0("\173main}", $_qlg, $_ql8z);
			$_qO8x = ($this->ShowPageSize) ? $this->_ql8w() : "";
			$_qO8v = ($this->ShowPageInfo) ? $this->_qO8t() : "";
			$_qO98 = _qO0("\173nav}", $_ql98, $_qO8y);
			$_qO98 = _qO0("\173info}", $_qO8v, $_qO98);
			$_qO98 = _qO0("\173\160agesi\172e}", $_qO8x, $_qO98);

			return $_qO98;
		}
	}

	class pivoteventhandler{
		function onbeforefieldmove($_ql9c, $_qO6c){
			return true;
		}

		function onfieldmove($_ql9c, $_qO6c){
		}

		function onbeforefieldsort($_ql9c, $_qO6c){
			return true;
		}

		function onfieldsort($_ql9c, $_qO6c){
		}

		function _qO8f($_ql9c, $_qO6c){
			return true;
		}

		function _qO8g($_ql9c, $_qO6c){
		}

		function onbeforefieldfilter($_ql9c, $_qO6c){
			return true;
		}

		function onfieldfilter($_ql9c, $_qO6c){
		}

		function onbeforefieldcollapse($_ql9c, $_qO6c){
			return true;
		}

		function onfieldcollapse($_ql9c, $_qO6c){
		}

		function onbeforefieldexpand($_ql9c, $_qO6c){
			return true;
		}

		function onfieldexpand($_ql9c, $_qO6c){
		}

		function onbeforegroupexpand($_ql9c, $_qO6c){
			return true;
		}

		function ongroupexpand($_ql9c, $_qO6c){
		}

		function onbeforegroupcollapse($_ql9c, $_qO6c){
			return true;
		}

		function ongroupcollapse($_ql9c, $_qO6c){
		}

		function onbeforepagechange($_ql9c, $_qO6c){
			return true;
		}

		function onpagechange($_ql9c, $_qO6c){
		}

		function onbeforepagesizechange($_ql9c, $_qO6c){
			return true;
		}

		function onpagesizechange($_ql9c, $_qO6c){
		}

		function onbeforefilterpanelopen($_ql9c, $_qO6c){
			return true;
		}

		function onfilterpanelopen($_ql9c, $_qO6c){
		}

		function onrefresh($_ql9c, $_qO6c){
		}

		function onbeforecellrender($_ql9c, $_qO6c){
		}

		function onbeforechangesortdata($_ql9c, $_qO6c){
			return true;
		}

		function onchangesortdata($_ql9c, $_qO6c){
		}

		function onreadingviewstate($_ql9c, &$_qO6c){
			return true;
		}

		function onsavingviewstate($_ql9c, $_qO6c){
			return true;
		}
	}

	class _qO9c{
		var $RowHeaderMinWidth;
	}

	class _ql9d{
		public $IgnorePaging = false;
		protected $_qO9d = array();
		protected $_qO56 = array();
		protected $_ql9e = array();
		protected $_qO4i = array();
		protected $_qO9e = array();

		function __construct(){
			$this->_qO9e["config"]["\160df"]             = array(
				"\160ageOrientation" => "\114",
				"pageDimension"      => array(01130, 0620),
				"font"                  => array(
					"family" => 'FreeSans',
					"style"  => "",
					"size"   => 012
				),
			);
			$this->_qO9e["pro\160erties"]["table"] = array(
				"border"            => "1",
				"cellspacing" => "0",
			);
			$this->config(array(
				"fileName"                      => "\113oolPivot\124able\105xport",
				"template"                      => "\173\113ool\120ivot\124able\175",
				"s\150ow\106ilterZone" => true,
				"showData\132one"         => true,
				"caseSensitive"        => true,
				"\160df"                              => $this->_qO9e["config"]["\160df"],
			));
			$this->htmlstyle(array(
				"table"                  => "border:1px\040solid\040grey;" . "border-collapse\072colla\160se;color:black;",
				"total\122ow"         => "backgro\165nd-color:lig\150tblue;\040font\055weig\150t:bold\073",
				"totalColumn"   => "background-color:lightblue\073 font\055weig\150t:bold;",
				"dataCell"            => "text-align\072right\073",
				"emptyData\103ell" => "text-align:center;",
				"expandedCell"        => "vertical\055align\072top;",
				"cell"                   => "padding\072\065px\073\040border:1px\040solid\040grey\073",
			));
			$this->htmlproperty(array("table" => $this->_qO9e["\160roperties"]["table"],));
		}

		function config($_qOn){
			if(is_array($_qOn)){
				$this->_qO9d = array_merge($this->_qO9d, $_qOn);
			}

			return $this;
		}

		function _ql9f(){
			if(isset ($this->_qO9d["pdf"]["font"]) && is_array($this->_qO9d["\160df"]["font"])){
				$this->_qO9d["\160df"]["font"] = array_merge($this->_qO9e["config"]["pdf"]["font"], $this->_qO9d["\160df"]["font"]);
			}
			if(isset ($this->_qO9d["pdf"]) && is_array($this->_qO9d["\160df"])){
				$this->_qO9d["pdf"] = array_merge($this->_qO9e["config"]["pdf"], $this->_qO9d["pdf"]);
			}

			return $this->_qO9d;
		}

		function htmlstyle($_qOn){
			if(is_array($_qOn)){
				$this->_ql9e = array_merge($this->_ql9e, $_qOn);
			}

			return $this;
		}

		function _qO9f(){
			return $this->_ql9e;
		}

		function htmlproperty($_qOn){
			if(is_array($_qOn)){
				$this->_qO4i = array_merge($this->_qO4i, $_qOn);
			}

			return $this;
		}

		function _qO4c(){
			if(isset ($this->_qO4i["table"]) && is_array($this->_qO4i["table"])){
				$this->_qO4i["table"] = array_merge($this->_qO9e["properties"]["table"], $this->_qO4i["table"]);
			}

			return $this->_qO4i;
		}

		function changetext($_qOn){
			if(is_array($_qOn)){
				$this->_qO56 = array_merge($this->_qO56, $_qOn);
			}

			return $this;
		}

		function _ql9g(){
			return $this->_qO56;
		}
	}

	class _qO9g{
		private $_qO7o;

		public static function _qO4g(){
			$_ql9h        = new _qO9g();
			$_ql9h->_qO7o = array();

			return $_ql9h;
		}

		public function _qO9h($_qO45){
			if(isset ($_qO45)){
				if(!is_array($_qO45)){
					$_ql9i = array($_qO45);
				}else{
					$_ql9i = $_qO45;
				}
				foreach($_ql9i as $_qO45){
					array_push($this->_qO7o, $_qO45);
				}
			}
		}

		public function _qO9i(){
			$_qO45 = array_pop($this->_qO7o);

			return $_qO45;
		}

		public function _qO3n($_qO45, $_qO5i = -1){
			if(isset ($_qO45)){
				if(!is_array($_qO45)){
					$_ql9i = array($_qO45);
				}else{
					$_ql9i = $_qO45;
				}
				if($_qO5i < 0 || $_qO5i > count($this->_qO7o)){
					$_qO5i = count($this->_qO7o);
				}
				array_splice($this->_qO7o, $_qO5i, 0, $_ql9i);
			}
		}

		public function _ql3o($_qO5i = -1){
			if($_qO5i < 0 || $_qO5i > count($this->_qO7o) - 1){
				$_qO5i = count($this->_qO7o) - 1;
			}
			$_ql9i = array_slice($this->_qO7o, $_qO5i, 1);
			if(isset ($_ql9i[0])){
				return $_ql9i[0];
			}else{
				return null;
			}
		}

		public function _ql9j($_qO5i = -1){
			if($_qO5i < 0){
				$_qO5i = 0;
			}else if($_qO5i > count($this->_qO7o) - 1){
				$_qO5i = count($this->_qO7o) - 1;
			}
			$_ql9i = array_splice($this->_qO7o, $_qO5i, 1);
			if(isset ($_ql9i[0])){
				return $_ql9i[0];
			}else{
				return null;
			}
		}

		function _qO9j(){
			return $this->_qO7o;
		}

		function _ql3p(){
			return empty($this->_qO7o);
		}

		function _ql1j(){
			return count($this->_qO7o);
		}
	}

	class _ql9k{
		private $_ql5x;

		private function __construct(){
		}

		public static function _qO4g(){
			$_qO9k        = new _ql9k();
			$_qO9k->_ql5x = _qO9g::_qO4g();

			return $_qO9k;
		}

		function _ql9l($_qO7z, $_qO5i = -1){
			$this->_ql5x->_qO3n($_qO7z, $_qO5i);

			return $this;
		}

		function _qO9l($_qOn){
			if(is_string($_qOn)){
				$_ql5x = $this->_ql9m();
				foreach($_ql5x as $_qO5x){
					if($_qO5x->FieldName == $_qOn){
						return $_qO5x;
					}
				}
			}

			return null;
		}

		function _qO9m($_qO5i = -1){
			$_qO7z = $this->_ql5x->_ql9j($_qO5i);

			return $_qO7z;
		}

		function _ql16($_qO5i = -1){
			$_qO7z = $this->_ql5x->_ql3o($_qO5i);

			return $_qO7z;
		}

		function _ql9m($_qO5i = 0){
			return array_slice($this->_ql5x->_qO9j(), $_qO5i);
		}

		function _ql9n($_qO5i = 0){
			$_qO4j = "";
			foreach($this->_ql9m($_qO5i) as $_qO5x){
				$_qO4j .= $_qO5x->Text . ">>>";
			}

			return rtrim($_qO4j, ">");
		}

		function _ql1j(){
			return $this->_ql5x->_ql1j();
		}

		function _qO9n(){
			$_ql9o = "";
			foreach($this->_ql5x->_qO9j() as $_qO5x){
				$_ql9o       .= "\137" . $_qO5x->_ql6c;
				$_qO5x->_qlk = $_ql9o;
			}

			return $this;
		}

		function _qO9o($_qO5i = 0){
			$_ql5x = $this->_ql9m($_qO5i);
			foreach($_ql5x as $_qO5x){
				$_qO5x->_ql5s = array(
					_qlz::_ql16 => $_qO5x->_ql6r,
					_qlz::_ql30 => $_qO5x->FieldName,
					_qlz::_ql18 => $_qO5x->_qO6r,
					_qlz::_qO16 => $_qO5x,
				);
				if($_qO5x->_ql6s == _qO37::_ql14){
					$_qO5x->_ql5s[_qlz::_qO2z] = $_qO5x->SqlOperator;
				}
			}

			return $this;
		}
	}

	class koolpivottable{
		var $_ql0 = "\063\0568.0.0";
		var $_ql6c;
		var $_ql4h;
		var $all_data_collected;
		var $_qO9p;
		var $_qO7v;
		var $_ql9q;
		var $_qO9q;
		var $_ql9r = 0;
		var $_qO9r = 0;
		var $_ql6n;
		var $_ql9s;
		var $_qO9s = false;
		var $_ql74 = false;
		var $_ql9t = false;
		var $_qO9t = false;
		var $_ql9u;
		var $_ql75;
		var $_qO72 = array();
		var $_qO9u;
		var $_qO8j = array(_qO37::_qO15 => _qlz::_qO10, _qO37::_ql15 => _qlz::_qO10);
		var $_ql73 = null;
		var $_ql9v;
		private $_qO9v = array(_qlz::_qO13 => "", _qlz::_qO18 => _qlz::_ql11);
		private $_ql9w = _qlz::_ql34;
		var $id;
		var $scriptFolder;
		var $styleFolder;
		var $HorizontalScrolling = false;
		var $VerticalScrolling = false;
		var $Pager;
		var $Width;
		var $Height;
		var $AjaxEnabled = false;
		var $AjaxLoadingImage = null;
		var $AjaxHandlePage;
		var $ShowColumnZone = true;
		var $ShowRowZone = true;
		var $ShowDataZone = true;
		var $ShowFilterZone = true;
		var $SeparateDataZone = false;
		var $SeparateRowZone = false;
		var $EmptyValue = "\055";
		var $ErrorValue = "-";
		var $ShowStatus = true;
		var $KeepViewStateInSession = false;
		var $Localization;
		var $AllowCaching = false;
		var $CacheFolder;
		var $CacheTime;
		var $AllowSorting = false;
		var $AllowSortingData = false;
		var $AllowReorder = false;
		var $AllowFiltering = false;
		var $Status;
		var $ClientEvents;
		var $EventHandler;
		var $Appearance;
		var $DataSource;
		var $ExportSettings;
		var $_qO5r = "U\124\106\0558";
		var $ShowGrandColumn = true;
		var $ShowGrandRow = true;
		var $CssClasses = array();
		var $RowZoneWidth = 'auto';
		var $RowZoneMinWidth = 'auto';

		function __construct($_qO9w){
			$this->id    = $_qO9w;
			$this->_ql6c = $_qO9w;
			foreach(_qO37::$_ql38 as $_qO3d){
				$this->_qO9q[$_qO3d] = _ql9k::_qO4g();
			}
			$this->all_data_collected = array();
			foreach(array(_qO37::_ql15 => _qlz::_ql33, _qO37::_qO15 => _qlz::_qO32) as $_qO3d => $_qlu){
				$_ql3y = _ql85::_qO8a($_qlu, null);
				$_ql3y->_qO6a($this);
				$this->_qO7v[$_qO3d] = $_ql3y;
				$_ql9x               = _ql84::_qO84();
				$this->_qO9q[$_qO3d]->_ql9l($_ql9x);
			}
			$this->_ql6n          = new _ql68($this);
			$this->Localization   = new _ql6f();
			$this->_ql9s          = new _ql8q();
			$this->Status         = new _qO8r();
			$this->ClientEvents   = array();
			$this->EventHandler   = new pivoteventhandler();
			$this->Appearance     = new _qO9c();
			$this->ExportSettings = new _ql9d();
		}

		function adddatafield($_qO5x){
			$this->_qO9x($_qO5x, _qO37::_ql14);

			return $this;
		}

		function addfilterfield($_qO5x){
			$this->_qO9x($_qO5x, _qO37::_qO14);

			return $this;
		}

		function addrowfield($_qO5x){
			$this->_qO9x($_qO5x, _qO37::_qO15);

			return $this;
		}

		function addcolumnfield($_qO5x){
			$this->_qO9x($_qO5x, _qO37::_ql15);

			return $this;
		}

		function _qO9x($_qO5x, $_qO3d){
			$_ql6u = $_qO5x->FieldName;
			$_ql72 = $_qO5x->Text;
			$_ql9y = $_ql6u;
			$_qO70 = $this->DataSource;
			$_qO5u = $_qO70->_ql5y();
			if(!empty($_qO5u)){
				foreach($_qO5u as $_qO9y){
					if($_qO9y["alias"] == $_ql6u){
						$_ql9y = $_qO9y["expression"];
					}
				}
			}
			if($_qO5x instanceof pivotdatefield){
				$_qO82 = $_qO5x->getdatefields();
				foreach($_qO82 as $_ql82 => $_ql9z){
					if($_ql9z){
						$_qO9z = $_ql6u . "\137" . $_ql82;
						$_qla0 = $_qO70->_qO65($_ql82) . "\050" . $_ql9y . ")";
						$_qOa0 = $_ql72 . "'s " . ucfirst($_ql82);
						$_qO9y = array("alias" => $_qO9z, "expression" => $_qla0);
						array_push($_qO5u, $_qO9y);
						$_qla1       = new pivotfield($_qO9z);
						$_qla1->Text = $_qOa0;
						$_qla1->_qO6t($_qla0);
						$this->_qO9q[$_qO3d]->_ql9l($_qla1);
					}
				}
			}else{
				$_qO6s = $_qO5x->getvaluemap();
				if(isset ($_qO6s)){
					$_qOa1 = $_qO6s->getmapfields();
					foreach($_qOa1 as $_qO6u => $_qO9z){
						if(empty($_qO9z) || $_qO9z == $_ql6u){
							$_qO9z = $_ql6u;
							$_qOa0 = $_ql72;
						}else{
							$_qOa0 = $_qO9z;
						}
						$_qla1 = baseField::_qO4g($_qO9z, $_qO6u);
						$_qla1->setvaluemap($_qO6s);
						$_qla1->Text = $_qOa0;
						$_qla1->_qO6t($_ql9y);
						$this->_qO9q[$_qO3d]->_ql9l($_qla1);
					}
				}else{
					$_qO5x->_qO6t($_ql9y);
					$this->_qO9q[$_qO3d]->_ql9l($_qO5x);
				}
			}

			return $this;
		}

		function getfilterfield($_ql6u){
			return $this->_qO9l($_ql6u, _qO37::_qO14);
		}

		function getdatafield($_ql6u){
			return $this->_qO9l($_ql6u, _qO37::_ql14);
		}

		function getrowfield($_ql6u){
			return $this->_qO9l($_ql6u, _qO37::_qO15);
		}

		function getcolumnfield($_ql6u){
			return $this->_qO9l($_ql6u, _qO37::_ql15);
		}

		function _qO9l($_ql6u, $_qO3d){
			return $this->_qO9q[$_qO3d]->_qO9l($_ql6u);
		}

		function _qla2($_qO3d, $_qOa2){
			$_qO5x = $this->_qO9l($_qOa2, $_qO3d);
			$_ql6  = array();
			foreach($_qO5x->_ql6o as $_ql3y){
				if($_ql3y->_ql8c()){
					$_qla3 = $_ql3y->_qO8c();
					foreach($_qla3 as $_ql44){
						array_push($_ql6, $_ql44);
					}
				}
			}

			return $_ql6;
		}

		function _qOa3($_qO3d, $_qOa2){
			$_qO5x = $this->_qO9l($_qOa2, $_qO3d);
			$_ql6  = array();
			if(!isset ($_qO5x)){
				return $_ql6;
			}
			foreach($_qO5x->_ql6o as $_ql3y){
				if($_ql3y->_ql8c()){
					$_qla3 = $_ql3y->_qO8c();
					foreach($_qla3 as $_ql44){
						array_push($_ql6, $_ql44->Value);
					}
				}
			}

			return $_ql6;
		}

		function getgroupnames($_qOa2){
			$_qla4 = array();
			foreach(array(_qO37::_ql15, _qO37::_qO15) as $_qO3d){
				$_qla4 = array_merge($_qla4, $this->_qOa3($_qO3d, $_qOa2));
			}

			return $_qla4;
		}

		function getrowgroupnames($_qOa2){
			$_qla4 = $this->_qOa3(_qO37::_qO15, $_qOa2);

			return $_qla4;
		}

		function getcolumngroupnames($_qOa2){
			$_qla4 = $this->_qOa3(_qO37::_ql15, $_qOa2);

			return $_qla4;
		}

		function setdatafieldforsorting($_qO5x){
			$this->_qO9u = $_qO5x;

			return $this;
		}

		function setinitsortedgroup($_qOw, $_qO7r = _qlz::_ql11){
			$this->_qO9v[_qlz::_qO13] = $_qOw;
			$this->_qO9v[_qlz::_qO18] = $_qO7r;

			return $this;
		}

		function setsortstate($_qlu){
			$this->_ql9w = $_qlu;

			return $this;
		}

		function _qO6a(){
			$this->_ql6n->_qO6a($this);
			$_ql38 = 0;
			foreach(_qO37::$_ql38 as $_qO3d){
				foreach($this->_qO9q[$_qO3d]->_ql9m() as $_qO5x){
					$_qO5x->_qO6a($this, $_ql38++);
					$_qO5x->_ql6s = $_qO3d;
				}
			}
			if(isset ($this->Pager)){
				$this->Pager->_qO6a($this);
			}
			$this->_ql9s->_qO6a($this);
			$this->Status->_qO6a($this);
		}

		function _qOa4(){
			unset ($_POST[$this->_qO68->_ql6c . _qlz::_qO28]);
		}

		function _qO6x(){
			foreach(_qO37::$_ql38 as $_qO3d){
				foreach($this->_qO9q[$_qO3d]->_ql9m() as $_qO5x){
					$_qO5x->_qO6x();
				}
			}
			if(isset ($this->Pager)){
				$this->Pager->_qO6x();
			}
			if(isset ($this->_ql6n->_ql69[$this->_ql6c])){
				$_ql6y       = $this->_ql6n->_ql69[$this->_ql6c];
				$_qla5       = $_ql6y[_qlz::_ql22];
				$this->_ql9r = $_ql6y[_qlz::_ql24];
				$this->_qO9r = $_ql6y[_qlz::_qO24];
				$this->_ql9u = $_ql6y[_qlz::_qO22];
				$this->_qO72 = $_ql6y[_qlz::_qO25];
				$this->_ql9w = $_ql6y[_qlz::_qO33];
				$_qOa5       = array();
				foreach(_qO37::$_ql38 as $_qO3d){
					foreach($this->_qO9q[$_qO3d]->_ql9m() as $_qO5x){
						$_qOa5[$_qO5x->_ql6c] = $_qO5x;
					}
				}
				foreach(_qO37::$_ql38 as $_qO3d){
					$this->_qO9q[$_qO3d] = _ql9k::_qO4g();
					foreach($_qla5[$_qO3d] as $_ql6c){
						$this->_qO9q[$_qO3d]->_ql9l($_qOa5[$_ql6c]);
					}
				}
			}else{
				$this->_ql9u = uniqid();
			}
		}

		function _qO75(){
			$this->_ql6n->_qO3o();
			foreach(_qO37::$_ql38 as $_qO3d){
				$_qla5[$_qO3d] = array();
				foreach($this->_qO9q[$_qO3d]->_ql9m() as $_qO5x){
					$_qO5x->_qO75();
					array_push($_qla5[$_qO3d], $_qO5x->_ql6c);
				}
			}
			foreach($this->_ql9q[_qO37::_ql15] as $_ql3y){
				$_ql3y->_qO75();
			}
			foreach($this->_ql9q[_qO37::_qO15] as $_ql3y){
				$_ql3y->_qO75();
			}
			if(isset ($this->Pager)){
				$this->Pager->_qO75();
			}
			$this->_ql6n->_ql69[$this->_ql6c] = array(
				_qlz::_ql22 => $_qla5,
				_qlz::_qO22 => $this->_ql9u,
				_qlz::_qO1l => $this->AllowReorder,
				_qlz::_ql23 => $this->HorizontalScrolling,
				_qlz::_qO23 => $this->VerticalScrolling,
				_qlz::_ql24 => $this->_ql9r,
				_qlz::_qO24 => $this->_qO9r,
				_qlz::_ql25 => $this->ClientEvents,
				_qlz::_qO25 => $this->_qO72,
				_qlz::_qO33 => $this->_ql9w,
			);
			$_qO6d                            = json_encode($this->_ql6n->_ql69);
			$this->EventHandler->onsavingviewstate($this, array('pivotId' => $this->id, 'viewstate' => $_qO6d));
		}

		function _qla6($_qOa6, $_qla7){
			$_qOa7 = $this->ExportSettings;
			$_qO9d = $_qOa7->_ql9f();
			$_qla8 = $_qOa7->_qO9f();
			$_ql4l = $_qOa7->_qO4c();
			$_qOa8 = $this->_qO7v[_qO37::_ql15]->_ql7w(0);
			$_qla9 = $this->_qO7v[_qO37::_qO15]->_ql7w(0);
			$_qOa8->_qO4c($_qOa9, $_qlaa, $_qOaa, $_qlab, $_qOab);
			$_qla9->_qO4c($_qlac, $_qOac, $_qlad, $_qOad, $_qlae);
			$_qlaa = ($_qlaa > 0) ? $_qlaa : 1;
			$_qOac = ($_qOac > 0) ? $_qOac : 1;
			$_qOae = $this->_qO9q[_qO37::_ql14]->_ql1j();
			$_qlaf = ($_qOae > 1) ? 1 : 0;
			$_qOaf = "\106ilter fields: " . $this->_qO9q[_qO37::_qO14]->_ql9n();
			$_qlag = "Data fields\072 " . $this->_qO9q[_qO37::_ql14]->_ql9n();
			$_qOag = "Column\040fields\072\040" . $this->_qO9q[_qO37::_ql15]->_ql9n(1);
			$_qlah = "Row fields: " . $this->_qO9q[_qO37::_qO15]->_ql9n(1);
			$_ql3b = "table";
			$_ql3b .= ($this->HorizontalScrolling ? " \150orizontalScroll" : "") . ($this->VerticalScrolling ? "\040vertical\123croll" : "");
			$_qOah = _ql5c::_qO5j()->_qO4v(_qO37::_qO39($_ql3b))->_ql4x($_ql3b, $_ql4l)->_qO4r(_qO37::_ql3c($_qla8));
			$_qlai = _ql5c::_qO5k()->_qO4v(_qO37::$_ql39["field\111tem"])->_qO4w($_qOaf);
			$_qOai = _ql5c::_ql5k()->_ql4w($this->_ql6c . "\137filterzoneEx")->_qO4v(_qO37::$_ql39["filter\132one"])->_qO3x($_qlai);
			$_qlaj = _ql5c::_qO5c()->_qO4v(_qO37::$_ql39["cell"])->_ql4x("cell", $_ql4l)->_ql4t($_qOaa * $_qOae + $_qOac)->_qO3x($_qOai);
			$_qOaj = _ql5c::_ql5j()->_qO3x($_qlaj);
			$_qlak = _ql5c::_ql5l('thead');
			if($_qO9d["show\106ilterZone"]){
				$_qlak->_qO3x($_qOaj);
			}
			$_qlai = _ql5c::_qO5k()->_qO4v(_qO37::$_ql39["fieldItem"])->_qO4w($_qlag);
			$_qOai = _ql5c::_ql5k()->_ql4w($this->_ql6c . "_datazoneEx")->_qO4v(_qO37::$_ql39["dataZone"])->_qO3x($_qlai);
			$_qlaj = _ql5c::_qO5c()->_qO4v(_qO37::$_ql39["cell"])->_ql4x("cell", $_ql4l)->_ql4t($_qOac)->_qO3x($_qOai);
			$_qOaj = _ql5c::_ql5j()->_qO3x($_qlaj);
			$_qlai = _ql5c::_qO5k()->_qO4v(_qO37::$_ql39["fieldItem"])->_qO4w($_qOag);
			$_qOai = _ql5c::_ql5k()->_ql4w($this->_ql6c . "\137columnzoneEx")->_qO4v(_qO37::$_ql39["col\165mnZone"])->_qO3x($_qlai);
			$_qlaj = _ql5c::_qO5c()->_qO4v(_qO37::$_ql39["cell"])->_ql4x("cell", $_ql4l)->_ql4t($_qOaa * $_qOae)->_qO3x($_qOai);
			$_qOaj->_qO3x($_qlaj);
			if($_qO9d["showDataZone"]){
				$_qlak->_qO3x($_qOaj);
			}
			$_qOak = array();
			for($_qO5i = 0; $_qO5i < $_qlaa + 1; $_qO5i++){
				$_qOak[$_qO5i] = _ql5c::_ql5j();
			}
			$_qlai = _ql5c::_qO5k()->_qO4v(_qO37::$_ql39["field\111tem"])->_qO4w($_qlah);
			$_qOai = _ql5c::_ql5k()->_ql4w($this->_ql6c . "_rowzoneEx")->_qO4v(_qO37::$_ql39["row\132one"])->_qO3x($_qlai);
			$_qlaj = _ql5c::_qO5c()->_ql4t($_qOac)->_ql4u($_qlaa + $_qlaf)->_qO3x($_qOai)->_qO4v(_qO37::$_ql39["cell"])->_ql4x("cell", $_ql4l);
			$_qOak[0]->_qO50($_qlaj, 0);
			foreach($this->_ql9q[_qO37::_ql15] as $_ql3y){
				$_ql3y->_qO4c($_ql4d, $_qO4d, $_ql4e, $_qO4e, $_ql4f);
				$_ql4e = ($_ql4e > 1) ? $_ql4e - 1 : $_ql4e;
				$_ql4f = $_qOaa - 1 - $_ql4f;
				$_qlal = ($_ql4d < 0) ? 0 : $_ql4d;
				$_qlaj = _ql5c::_qO5c();
				if($_ql4d >= 0){
					$_qlaj->_ql4t($_ql4e * $_qOae)->_ql4u(($_qO4d > 0) ? 1 : ($_qlaa - $_qlal))->_qO4w($_ql3y->Value)->_qO4v(_qO37::_qO39("column\110eader\040cell"))->_ql4x("columnHeader cell", $_ql4l)->_ql4w($_ql3y->_ql6c . "Ex");
				}
				$_qOal = _ql5c::_qO5c();
				if($_ql3y->_ql8c() || $_ql4d < 0){
					if($_ql4d < 0){
						$_qO55 = $_ql3y->Value;
					}else{
						$_qO55 = $_ql3y->_qO8n();
					}
					$_qOal->_ql4t($_qOae)->_ql4u($_qlaa - $_qlal)->_qO4w($_qO55)->_qO4v(_qO37::_qO39("column\110eader column\110eader\124otal totalColumn expanded\103ell cell"))->_ql4x("columnHeader col\165mnHeaderTotal\040totalColumn expandedCell\040cell", $_ql4l);
				}
				$_qOak[$_qlal]->_ql51(array($_qlaj, $_qOal), $_ql4f + 1);
			}
			if($_qlaf > 0){
				for($_ql5f = 0; $_ql5f < $_qOaa; $_ql5f++){
					$_qlam = $this->_ql9q[_qO37::_ql15][$_ql5f];
					$_ql3b = (!$_qlam->_ql8c()) ? "" : "totalCol\165mn";
					$_ql6  = array();
					for($_qO4d = 0; $_qO4d < $_qOae; $_qO4d++){
						array_push($_ql6, _ql5c::_qO5c()->_qO4v(_qO37::_qO39($_ql3b . " cell dataDesc"))->_ql4x($_ql3b . "\040cell dataDesc", $_ql4l)->_qO4w($this->_qO9q[_qO37::_ql14]->_ql16($_qO4d)->renderheadertotal($this->_ql9q[_qO37::_ql15][$_ql5f]->Value)));
					}
					$_qOak[$_qlaa]->_ql51($_ql6, $_ql5f + 1);
				}
			}
			$_qOak[$_qlaa]->_qO4v(_qO37::$_ql39["dataDesc"])->_ql4x("dataDesc", $_ql4l);
			for($_qO5i = 0; $_qO5i < $_qlaa + 1; $_qO5i++){
				$_qOak[$_qO5i]->_qO51();
			}
			$_qlak->_ql50($_qOak);
			$_qOah->_qO3x($_qlak);
			$_qOak = array();
			$_qO3s = new _ql3s();
			$_qOam = array();
			if($_qOa6 < 0){
				$_qOa6 = 0;
			}
			if($_qla7 < 0){
				$_qla7 = $_qlad - 1;
			}
			for($_qO5d = $_qOa6; $_qO5d < $_qOa6 + $_qla7; $_qO5d++){
				array_push($_qOam, $_qO5d);
			}
			if($_qla7 >= 0){
				array_push($_qOam, $_qlad - 1);
			}
			foreach($_qOam as $_qO5d){
				$_qOak[$_qO5d] = _ql5c::_ql5j();
				$_ql3y         = $this->_ql9q[_qO37::_qO15][$_qO5d];
				$_ql3y->_qO4c($_ql4d, $_qO4d, $_ql4e, $_qO4e, $_ql4f);
				$_ql4e = ($_ql4e > 1) ? $_ql4e - 1 : $_ql4e;
				$_ql4f = $_qlad - 1 - $_ql4f;
				if($_ql4d >= 0 && !$_ql3y->_ql8c()){
					$_qlaj = _ql5c::_qO5c()->_ql4t(($_qO4d > 0) ? 1 : ($_qOac - $_ql4d))->_ql4u($_ql4e)->_qO4w($_ql3y->Value)->_qO4v(_qO37::_qO39("cell\040row\110eader"))->_ql4x("cell\040row\110eader", $_ql4l)->_ql4w($_ql3y->_ql6c . "\105x");
					$_qOak[$_ql4f]->_qO50($_qlaj, $_ql4d);
				}
				if($_ql3y->_ql8c() || $_ql4d < 0){
					if($_ql4d < 0){
						$_qO55 = $_ql3y->Value;
					}else{
						$_qO55 = $_ql3y->_qO8n();
					}
					$_ql4d = ($_ql4d < 0) ? 0 : $_ql4d;
					$_qOal = _ql5c::_qO5c()->_ql4t($_qOac - $_ql4d)->_qO4w($_qO55)->_qO4v(_qO37::_qO39("cell rowHeader row\110eader\124otal"))->_ql4x("cell rowHeader\040row\110eaderTotal", $_ql4l);
					$_qOak[$_ql4f]->_qO50($_qOal, $_ql4d)->_qO4v(_qO37::$_ql39["totalRow"])->_ql4x("total\122ow", $_ql4l);
				}
				$_qlan = $_ql3y;
				if($_qlan !== $_qla9){
					while($_qlan->_qO3t !== $_qla9){
						$_qlan = $_qlan->_qO3t;
						$_qO3s->_qO3n($_qlad - 1 - $_qlan->_ql4b());
					}
				}
			}
			while(!$_qO3s->_ql3p()){
				$_ql3y = $this->_ql9q[_qO37::_qO15][$_qO3s->_ql3o()];
				$_ql3y->_qO4c($_ql4d, $_qO4d, $_ql4e, $_qO4e, $_ql4f);
				$_ql4e = ($_ql4e > 1) ? $_ql4e - 1 : $_ql4e;
				$_qOan = $_ql3y;
				while(reset($_qOan->_ql3u)){
					$_qOan = reset($_qOan->_ql3u);
				}
				$_ql4f = $_qlad - 1 - $_qOan->_ql4b();
				$_qlao = 0;
				if($_ql4f < $_qOa6){
					$_qlao = $_qOa6 - $_ql4f;
					$_ql4f = $_qOa6;
				}
				$_ql4e = min($_ql4e - $_qlao, $_qOa6 + $_qla7 - $_ql4f);
				$_qlaj = _ql5c::_qO5c()->_ql4u($_ql4e)->_qO4w($_ql3y->Value)->_qO4v(_qO37::_qO39("cell expandedCell"))->_ql4x("cell expandedCell", $_ql4l)->_ql4w($_ql3y->_ql6c . "\105x");
				$_qOak[$_ql4f]->_qO50($_qlaj, $_ql4d);
			}
			foreach($_qOam as $_qO5d){
				$_ql6 = array();
				for($_ql5f = 0; $_ql5f < $_qOaa; $_ql5f++){
					$_qlam = $this->_ql9q[_qO37::_ql15][$_ql5f];
					$_qOao = $this->_ql9q[_qO37::_qO15][$_qO5d];
					$this->_ql7x($_qlam, $_qOao, $_qO7x, $_qlap, $_qlk);
					$_ql3b = "cell";
					if($_qlam->_ql8c()){
						$_ql3b .= "\040totalCol\165mn";
					}
					if($_qOao->_ql8c()){
						$_ql3b .= "\040totalRow";
					}
					for($_qO4d = 0; $_qO4d < $_qOae; $_qO4d++){
						$_qOap = $this->_qO9q[_qO37::_ql14]->_ql16($_qO4d);
						$_qO7y = $_qOap->_qO6r;
						if(!isset ($this->all_data_collected[$_qO7x][$_qlap][$_qlk][$_qO7y])){
							$_qlaq = $_qOap->displayformat($this->EmptyValue);
							$_ql3b .= "\040empty\104ataCell";
						}else{
							$_qlaq = $_qOap->displayformat($this->all_data_collected[$_qO7x][$_qlap][$_qlk][$_qO7y]);
							$_ql3b .= " data\103ell";
						}
						$_qlaj = _ql5c::_qO5c()->_qO4w($_qlaq)->_qO4v(_qO37::_qO39($_ql3b))->_ql4x($_ql3b, $_ql4l);
						array_push($_ql6, $_qlaj);
					}
				}
				$_qOak[$_qO5d]->_ql51($_ql6, $_qOac);
			}
			foreach($_qOam as $_qO5d){
				$_qOak[$_qO5d]->_qO51();
			}
			$_qOah->_ql50($_qOak);

			return $_qOah;
		}

		function exporttohtml(){
			$_qOa7 = $this->ExportSettings;
			$_qO9d = $_qOa7->_ql9f();
			$_qOaq = $_qO9d["template"];
			ob_end_clean();
			header("Pragma: p\165blic");
			header("\105xpires: 0");
			header("Cac\150e-Control: m\165st-revalidate,\040\160ost\055check=0\054\040pre-check=0");
			header("\103ache-Control: public");
			header("Content\055\104escription: File\040Transfer");
			header("Content-Type\072 application/force-download\073 charset\075utf-\070");
			header("\103ontent-\104isposition\072\040attac\150ment\073\040filename=\042" . $_qO9d["fileName"] . ".html\042");
			header("Content\055\124ransfer\055Encoding: binary");
			$_qOa6 = -1;
			$_qla7 = -1;
			if(isset ($this->Pager) && !$_qOa7->IgnorePaging){
				$_qOa6 = $this->Pager->PageIndex * $this->Pager->PageSize;
				$_qla7 = ($_qOa6 + $this->Pager->PageSize < $this->Pager->_qO8s) ? $this->Pager->PageSize : ($this->Pager->_qO8s - $_qOa6);
			}
			$_qOah = $this->_qla6($_qOa6, $_qla7);
			$_qlar = $_qOah->_ql4s() . $_qOah->_qO58($_qOa7->_ql9g(), $_qO9d["case\123ensitive"]);
			$_qOar = _qO0("\173Kool\120ivotTable\175", $_qlar, $_qOaq);
			echo $_qOar;
			exit ();
		}

		function exporttopdf(){
			error_reporting(0);
			if(!class_exists("T\103\120\104F", false)){
				$_qlas = dirname(dirname(__FILE__));
				require_once $_qlas . "/librar\171\057tcpdf\057config\057lang/eng\056php";
				require_once $_qlas . "\057library/tc\160df/tc\160df.php";
			}
			$_qOa7 = $this->ExportSettings;
			$_qO9d = $_qOa7->_ql9f();
			$_qOaq = $_qO9d["template"];
			$_qOas = new tcpdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, $this->_qO5r, false);
			$_qlat = $_qO9d["\160df"]["font"];
			$_qOas->setfont($_qlat["family"], $_qlat["st\171le"], $_qlat["si\172e"]);
			$_qOas->setautopagebreak(true);
			$_qOas->addpage($_qO9d["pdf"]["pageOrientation"], $_qO9d["\160df"]["\160ageDimension"]);
			$_qOa6 = -1;
			$_qla7 = -1;
			if(isset ($this->Pager) && !$_qOa7->IgnorePaging){
				$_qOa6 = $this->Pager->PageIndex * $this->Pager->PageSize;
				$_qla7 = ($_qOa6 + $this->Pager->PageSize < $this->Pager->_qO8s) ? $this->Pager->PageSize : ($this->Pager->_qO8s - $_qOa6);
			}
			$_qOah = $this->_qla6($_qOa6, $_qla7);
			$_qlar = $_qOah->_ql4s() . $_qOah->_qO58($_qOa7->_ql9g(), $_qO9d["caseSensitive"]);
			$_qOar = _qO0("\173\113oolPivot\124able}", $_qlar, $_qOaq);
			ob_end_clean();
			$_qOas->writehtml($_qOar, true, false, false, false, '');
			$_qOas->output($_qO9d["fileName"] . "\056pdf", "D");
			exit ();
		}

		function exporttoexcel(){
			error_reporting(0);
			if(!class_exists("PHPExcel", false)){
				$_qlas = dirname(dirname(__FILE__));
				require_once $_qlas . '/library/PHPExcel/Classes/PHPExcel.php';
				require_once $_qlas . '/library/PHPExcel/Classes/PHPExcel/Cell.php';
				require_once $_qlas . '/library/PHPExcel/Classes/PHPExcel/IOFactory.php';
			}
			$_qOa7 = $this->ExportSettings;
			$_qO9d = $_qOa7->_ql9f();
			$_qOat = new phpexcel();
			$_qOat->setactivesheetindex(0);
			$_qOa6 = -1;
			$_qla7 = -1;
			if(isset ($this->Pager) && !$_qOa7->IgnorePaging){
				$_qOa6 = $this->Pager->PageIndex * $this->Pager->PageSize;
				$_qla7 = ($_qOa6 + $this->Pager->PageSize < $this->Pager->_qO8s) ? $this->Pager->PageSize : ($this->Pager->_qO8s - $_qOa6);
			}
			$_qOah = $this->_qla6($_qOa6, $_qla7);
			$_ql6  = $_qOah->_ql5b();
			$_qlau = 0;
			$_qOau = 1;
			foreach($_ql6 as $_ql5e){
				foreach($_ql5e as $_qO5f){
					$_ql3 = $_qO5f->_ql56($_qOa7->_ql9g(), $_qO9d["caseSensitive"]);
					$_ql3 = $_qO5f->_ql56();
					if($_ql3 != "blank"){
						$_ql5g = $_qO5f->_qO4t();
						$_ql5i = $_qO5f->_qO4u();
						$_qlav = phpexcel_cell::stringfromcolumnindex($_qlau) . $_qOau;
						$_qOav = phpexcel_cell::stringfromcolumnindex($_qlau + $_ql5g - 1) . ($_qOau + $_ql5i - 1);
						$_qOat->getactivesheet()->setcellvalue($_qlav, $_ql3);
						if($_qlav != $_qOav){
							$_qOat->getactivesheet()->mergecells($_qlav . "\072" . $_qOav);
							$_qOat->getactivesheet()->getstyle($_qlav)->getalignment()->setvertical(phpexcel_style_alignment::VERTICAL_CENTER);
						}
					}
					$_qlau += 1;
				}
				$_qOau++;
				$_qlau = 0;
			}
			$_qOat->getactivesheet()->settitle($_qO9d["fileName"]);
			$_qOat->setactivesheetindex(0);
			ob_end_clean();
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="' . $_qO9d["fileName"] . '.xls"');
			header('Cache-Control: max-age=0');
			header('Cache-Control: max-age=1');
			header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
			header('Cache-Control: cache, must-revalidate');
			header('Pragma: public');
			$_qlaw = phpexcel_iofactory::createwriter($_qOat, 'Excel5');
			$_qlaw->save('php://output');
			exit;
		}

		function exporttoword(){
			error_reporting(0);
			$_qOa7 = $this->ExportSettings;
			$_qO9d = $_qOa7->_ql9f();
			$_qOaq = $_qO9d["template"];
			ob_end_clean();
			header("Pragma\072\040public");
			header("Ex\160ires: 0");
			header("Cache\055\103ontrol\072\040must\055revalidate, post-chec\153=0, pre\055check=\060");
			header("\103ache-Control: public");
			header("\103ontent-\104escription: File\040Transfer");
			header("\103ontent-T\171\160e: ap\160lication\057msword");
			header("\103ontent-\104isposition: attachment\073\040filename=\042" . $_qO9d["fileName"] . "\056doc\042");
			header("Content-Transfer-Encoding:\040binar\171");
			$_qOa6 = -1;
			$_qla7 = -1;
			if(isset ($this->Pager) && !$_qOa7->IgnorePaging){
				$_qOa6 = $this->Pager->PageIndex * $this->Pager->PageSize;
				$_qla7 = ($_qOa6 + $this->Pager->PageSize < $this->Pager->_qO8s) ? $this->Pager->PageSize : ($this->Pager->_qO8s - $_qOa6);
			}
			$_qOah = $this->_qla6($_qOa6, $_qla7);
			$_qlar = $_qOah->_ql4s() . $_qOah->_qO58($_qOa7->_ql9g(), $_qO9d["caseSensitive"], "'");
			$_qOar = _qO0("\173Kool\120ivotTable}", $_qlar, $_qOaq);
			echo $_qOar;
			exit ();
		}

		function _ql7x($_qlam, $_qOao, &$_qO7x, &$_qlap, &$_qlk){
			$_qlap = $_qlam->_qO3t->_ql6c . $_qOao->_qO3t->_ql6c;
			$_qlk  = $_qlam->_qO86 . $_qOao->_qO86;
			$_qO7x = $_qlam->_qO85->_qlk . $_qOao->_qO85->_qlk;
		}

		function _qOaw($_qO3d, $_ql3y){
			$_ql3y->_qO6a($this);
			$_ql3y->_qO6x();
			if($this->_ql9w == _qlz::_ql34 && $_ql3y->Value == $this->_qO9v[_qlz::_qO13]){
				$_ql3y->_ql8e($this->_qO9v[_qlz::_qO18]);
				$_ql3y->_ql8g();
			}
			$_ql3y->_qO6z($this->_ql9s);
			$this->_ql9v[$_qO3d][$_ql3y->_ql6c] = $_ql3y;

			return $this;
		}

		function _qlax($_qO3d, &$_qOax){
			$_qO70 = $this->DataSource;
			$_qO9k = $this->_qO9q[$_qO3d];
			$_qlay = $_qO9k->_ql16(0);
			$_qlu  = $this->Localization->_qO6f[_qlz::_qO2e];
			$_qOay = _ql85::_qO8a($_qlu, $_qlay);
			$_qlaz = $this->_qO7v[$_qO3d];
			$_qlaz->_qO3x($_qOay);
			$this->_qOaw($_qO3d, $_qOay);
			$_qO3s = new _qO3p();
			$_qO3s->_qO3n($_qOay);
			array_push($_qlay->_ql6o, $_qlaz);
			while(!$_qO3s->_ql3p()){
				$_ql3y = $_qO3s->_ql3o();
				$_ql4d = $_ql3y->_ql47() + 2;
				if($_ql4d < $_qO9k->_ql1j()){
					$_qO5x = $_qO9k->_ql16($_ql4d);
					$_qOaz = $_qO9k->_ql16($_ql4d + 1);
					$_qlb0 = $_qO9k->_ql16($_ql4d - 1);
					array_push($_qO5x->_ql6o, $_ql3y);
					$_qO5x->_qO4c($_ql6u, $_qO6v, $_ql6w, $_qO6w, $_qOb0);
					$_qO5n = $_ql3y->_qO87;
					$_qlb1 = $_ql3y->_ql88;
					$_qOb1 = array();
					$_qlb2 = false;
					if(!empty($_qOax[$_qO5x->_qlk][$_ql3y->_ql6c][_qlz::_qO1x]) && !$this->_qO9t){
						$_qOb2 = $_qOax[$_qO5x->_qlk];
						$_ql8i = $_qOb2[$_ql3y->_ql6c][_qlz::_qO1x];
						foreach($_ql8i as $_qlb3){
							$_qOb3 = $_qOb2[$_qlb3];
							array_push($_qOb1, array(
								_qlz::_ql17 => urldecode($_qOb3[_qlz::_ql17]),
								_qlz::_qO1d => $_qOb3[_qlz::_qO1d],
								_qlz::_qO1j => $_qOb3[_qlz::_qO1j],
								_qlz::_ql19 => $_qOb3[_qlz::_ql19],
								_qlz::_qO1u => $_qOb3[_qlz::_qO1u],
								_qlz::_ql1v => $_qOb3[_qlz::_ql1v],
								_qlz::_qO1v => $_qOb3[_qlz::_qO1v]
							));
						}
					}else if($_qO5x->_ql6r == $_qlb0->_ql6r){
						foreach($_ql3y->_qO88 as $_qlu){
							array_push($_qOb1, array(_qlz::_ql17 => $_qlu, _qlz::_ql19 => $_qlu));
						}
						$_qlb2 = true;
					}else{
						$_qO5u = array($_qO5x->_ql5s);
						$_qlb4 = array(_qlz::_ql1w => _qO1u::_qO5m($_qO5n), _qlz::_qO1w => _qO1u::_qO5m($_qlb1));
						$_ql63 = $_qO70->_qO5y(true)->_qO5z($_qO5u, $_qlb4, null);
						$_ql54 = $_qO70->_queryall($_ql63);
						foreach($_ql54 as $_qO54){
							array_push($_qOb1, array(_qlz::_ql17 => $_qO54[$_qO6w], _qlz::_ql19 => $_qO54[$_qO6w]));
						}
						$_qlb2 = true;
					}
					foreach($_qOb1 as $_qOb4){
						$_qlu = $_qOb4[_qlz::_ql17];
						if($_qlb2){
							$_qlu = $_qO5x->_ql6v($_qlu);
						}
						if($_qO5x->_ql7a($_qlu)){
							$_ql44 = $_ql3y->_ql7w($_qlu);
							if(empty($_ql44)){
								$_ql44 = _ql85::_ql8a($_qlu, $_qO5x);
								$_ql3y->_qO3x($_ql44);
								if(isset ($_qOb4[_qlz::_qO1d])){
									$_ql44->_qO8e($_qOb4[_qlz::_qO1d]);
								}
								if(isset ($_qOb4[_qlz::_qO1j])){
									$_ql44->_ql8e($_qOb4[_qlz::_qO1j]);
								}
								$_ql44->_ql8f($_qOb4[_qlz::_ql19]);
								$this->_qOaw($_qO3d, $_ql44);
								$_ql44->_qO87 = _qO1u::_qO5m();
								$_ql44->_ql88 = _qO1u::_qO5m();
								if($_ql4d < $_qO9k->_ql1j() - 1){
									$_ql44->_ql86 = true;
								}
								if($_ql44->Expand || $_qO5x->_ql6r == $_qOaz->_ql6r){
									$_qO3s->_qO3n($_ql44);
								}
							}
							if($_qlb2){
								$_qlb5 = $_qO70->_ql65($_qO70->_ql64($_qOb4[_qlz::_ql17]));
								$_ql44->_qO87->_qO5p($_ql6w . _ql3e::_ql3i . $_qlb5, _ql3e::_qO3e);
								$_ql44->_ql88->_qO5p($_ql6u . _ql3e::_ql3i . $_qlb5, _ql3e::_qO3e);
								array_push($_ql44->_qO88, $_qOb4[_qlz::_ql17]);
							}else{
								$_ql44->_qO87 = $_qOb4[_qlz::_qO1u];
								$_ql44->_ql88 = $_qOb4[_qlz::_ql1v];
								$_ql44->_qO88 = $_qOb4[_qlz::_qO1v];
							}
						}
					}
					foreach($_ql3y->_ql3u as $_ql44){
						if($_ql44->_qO87 instanceof _qO1u){
							$_ql44->_qO87 = $_ql44->_qO87->_qO5p($_qO5n)->_ql5o();
						}
						if($_ql44->_ql88 instanceof _qO1u){
							$_ql44->_ql88 = $_ql44->_ql88->_qO5p($_qlb1)->_ql5o();
						}
					}
					if($this->AllowCaching){
						$_qOax[$_qO5x->_qlk][$_ql3y->_ql6c] = $_ql3y->_qO8h();
						foreach($_ql3y->_ql3u as $_ql44){
							$_qOax[$_qO5x->_qlk][$_ql44->_ql6c] = $_ql44->_qO8h();
						}
					}
				}
			}

			return $_qlaz;
		}

		function process(){
			$this->_qO6a();
			$this->_qO6x();
			if(!isset ($this->_ql6n->_ql69[$this->_ql6c])){
				$this->_qO9s = true;
			}
			$_qlm  = $this->_ql9s;
			$_qOb5 = round(microtime(true) * 01750);
			{
				if(isset ($_qlm->_qO6f[$this->_ql6c])){
					$_ql5f = $_qlm->_qO6f[$this->_ql6c];
					$_ql71 = $_ql5f[_qlz::_ql1d];
					$_qO71 = $_ql5f[_qlz::_ql21];
					switch($_ql71){
						case _qlz::_qO1f:
							if($this->EventHandler->onbeforefieldmove($this, array()) == true){
								$_qlb6 = _qO37::$_ql38[strtolower($_qO71[_qlz::_qO26])];
								$_qOb6 = _qO37::$_ql38[strtolower($_qO71[_qlz::_ql27])];
								$_qO5x = $this->_qO9q[$_qlb6]->_qO9m($_qO71[_qlz::_qO27]);
								$this->_qO9q[$_qOb6]->_ql9l($_qO5x, $_qO71[_qlz::_ql28]);
								$this->EventHandler->onfieldmove($this, array());
							}
							break;
						case _qlz::_ql1f:
							if($this->EventHandler->_qlb7($this, array()) == true){
								$this->_qO9s = true;
								$this->EventHandler->onrefresh($this, array());
							}
							break;
						case _qlz::_qO2u:
							if($this->EventHandler->onbeforechangesortdata($this, array()) == true){
								if($_qO71[_qlz::_ql2v] == _qlz::_qO2v){
									$this->_qO9u = $this->_qO9q[_qO37::_ql14]->_ql16(0);
								}
								$this->EventHandler->onchangesortdata($this, array());
							}
							break;
					}
				}
			}
			$_qOb7 = round(microtime(true) * 01750);
			$_qO70 = $this->DataSource;
			foreach(_qO37::$_ql38 as $_qO3d){
				$this->_qO9q[$_qO3d]->_qO9n()->_qO9o();
				$_ql5x[$_qO3d] = $this->_qO9q[$_qO3d]->_ql9m();
			}
			$_qlb8 = $_ql5x[_qO37::_ql15];
			$_qOb8 = $_ql5x[_qO37::_qO15];
			$_qlb9 = $_ql5x[_qO37::_ql14];
			$_qOb5 = round(microtime(true) * 01750);
			{
				$_qOb9                    = null;
				$this->_qO9p              = array();
				$this->all_data_collected = array();
				if($this->AllowCaching){
					$_qOb2        = new _qO6i($this->CacheFolder, $this->CacheTime);
					$_qOb2->_ql6c = $this->_ql9u;
					if(!$this->_qO9s){
						$_qOb9 = $_qOb2->_qO6l(_qlz::_qO1c);
						if(isset ($_qOb9[_qlz::_qO1g]) && (!$this->_ql74)){
							$_qlba = $_qOb9[_qlz::_qO1g];
							foreach(_qO37::$_ql38 as $_qO3d){
								if($_qO3d != _qO37::_ql14){
									foreach($_ql5x[$_qO3d] as $_qO5x){
										$_qO5x->_ql78($_qlba[$_qO5x->_ql6c]);
									}
								}
							}
						}else{
							$this->_ql74 = true;
						}
						if(!$this->_ql74){
							if(isset ($_qOb9[_qlz::_ql1g])){
								$this->_qO9p = $_qOb9[_qlz::_ql1g];
							}
						}
					}
				}else{
					$this->_qO9s = true;
				}
			}
			$_qOb7 = round(microtime(true) * 01750);
			foreach(_qO37::$_ql38 as $_qO3d){
				foreach($_ql5x[$_qO3d] as $_qO5x){
					$_qO5x->_qO6z($_qlm);
				}
			}
			$_qOb5 = round(microtime(true) * 01750);
			{
				if($this->_qO9s){
					$_qO70->_qO5r = $this->_qO5r;
					$this->_ql74  = true;
				}
				if($this->_ql74){
					if(isset ($_qOb9[_qlz::_qO1h])){
						$_qOb9[_qlz::_qO1h] = null;
					}
					$this->_qO9p = null;
				}
			}
			$_qOb7 = round(microtime(true) * 01750);
			$_qOb5 = round(microtime(true) * 01750);
			{
				/**
				 * SELECT DISTINCT
				 */
				if(!isset ($_qOb9[_qlz::_qO1h])){
					$_qOb9[_qlz::_qO1h] = array();
				}
				foreach(array(_qO37::_ql15, _qO37::_qO15) as $_qO3d){
					$this->_qlax($_qO3d, $_qOb9[_qlz::_qO1h]);
				}
			}
			$_qOb7 = round(microtime(true) * 01750);
			foreach(array(_qO37::_ql15, _qO37::_qO15) as $_qO3d){
				$_qOba[$_qO3d] = $this->_qO7v[$_qO3d]->_ql7w(0);
			}
			$_ql7v = $_qOba[_qO37::_ql15];
			$_qO7w = $_qOba[_qO37::_qO15];
			$_qOb5 = round(microtime(true) * 01750);
			{
				$_qlbb = array();
				$_qObb = array();
				foreach(_qO37::$_ql38 as $_qO3d){
					foreach($_ql5x[$_qO3d] as $_qO5x){
						if($_qO5x->_qO76()){
							array_push($_qlbb, $_qO5x->_ql5s);
						}
					}
				}
				foreach($_qlb9 as $_qO5x){
					array_push($_qObb, $_qO5x->_ql5s);
				}
				foreach($_qlb8 as $_ql5f => $_qlbc){
					foreach($_qOb8 as $_qO5d => $_qObc){
						$_qO7x = $_qlbc->_qlk . $_qObc->_qlk;
						$_qlbd = array();
						$_qObd = array();
						for($_qO5i = 1; $_qO5i <= $_ql5f; $_qO5i++){
							array_push($_qlbd, $_qlb8[$_qO5i]->_ql5s);
						}
						for($_qO5i = 1; $_qO5i <= $_qO5d; $_qO5i++){
							array_push($_qObd, $_qOb8[$_qO5i]->_ql5s);
						}
						$_qlbe = array();
						$_qObe = array();
						foreach(array($_qlbb, $_qlbd, $_qObd) as $_qlbf){
							foreach($_qlbf as $_ql5s){
								if(!in_array($_ql5s[_qlz::_ql18], $_qObe)){
									array_push($_qObe, $_ql5s[_qlz::_ql18]);
									array_push($_qlbe, $_ql5s);
								}
							}
						}
						$_qObf = array_merge($_qlbe, $_qObb);
						$_qlbg = false;
						$_qObg = _qO1u::_qO5m();
						$_qlbh = _qO1u::_qO5m();
						foreach($_qlbc->_ql6o as $_qObh){
							foreach($_qObc->_ql6o as $_qlbi){
								$_qlap = $_qObh->_ql6c . $_qlbi->_ql6c;
								if(!isset ($this->_qO9p[$_qO7x][$_qlap])){
									$_qObg->_qO5p(_qO1u::_qO5m($_qObh->_qO87)->_qO5p($_qlbi->_qO87), _ql3e::_qO3e);
									$_qlbh->_qO5p(_qO1u::_qO5m($_qObh->_ql88)->_qO5p($_qlbi->_ql88), _ql3e::_qO3e);
									$_qlbg = true;
								}
							}
						}
						if($_qlbg){
							$_ql60 = array(_qlz::_ql1w => $_qObg, _qlz::_qO1w => $_qlbh);
							$_ql63 = $_qO70->_qO5y(false)->_qO5z($_qObf, $_ql60, $_qlbe);
							$_qO5e = 0;
							$_ql5w = $_qO70->getquerysize();
							while(true){
								if($_ql5w == 0){
									$_ql54 = $_qO70->_queryall($_ql63);
									$_ql5w = PHP_INT_MAX;
								}else if($_ql5w > 0){
									$_ql54 = $_qO70->_querylimit($_ql63, $_qO5e, $_ql5w);
									$_qO5e += $_ql5w;
								}
								$_qOb5 = round(microtime(true) * 01750);
								foreach($_ql54 as $_qO54){
									$_ql76 = true;
									foreach($_qlbb as $_qObi){
										$_qO7z = $_qObi[_qlz::_qO16];
										$_qlu  = $_qO7z->_ql6v($_qO54[$_qObi[_qlz::_ql18]]);
										if(!$_qO7z->_ql7a($_qlu)){
											$_ql76 = false;
											break;
										}
									}
									if($_ql76){
										$_qlam = $_ql7v;
										foreach($_qlbd as $_qlbj){
											$_qO7z = $_qlbj[_qlz::_qO16];
											$_qlu  = $_qO7z->_ql6v($_qO54[$_qlbj[_qlz::_ql18]]);
											$_qlam = $_qlam->_ql7w($_qlu);
										}
										$_qOao = $_qO7w;
										foreach($_qObd as $_qObj){
											$_qO7z = $_qObj[_qlz::_qO16];
											$_qlu  = $_qO7z->_ql6v($_qO54[$_qObj[_qlz::_ql18]]);
											$_qOao = $_qOao->_ql7w($_qlu);
										}
										if(isset ($_qlam) && isset ($_qOao)){
											$_qlbk = array($_qlam);
											$_qO5i = $_ql5f + 1;
											while(isset ($_qlb8[$_qO5i]) && $_qlb8[$_qO5i]->_ql6r == $_qlbc->_ql6r){
												$_ql5s = end($_qObd);
												$_qlu  = $_qlb8[$_qO5i]->_ql6v($_qO54[$_ql5s[_qlz::_ql18]]);
												$_qlam = $_qlam->_ql7w($_qlu);
												array_push($_qlbk, $_qlam);
												$_qO5i++;
											}
											$_qObk = array($_qOao);
											$_qO5i = $_qO5d + 1;
											while(isset ($_qOb8[$_qO5i]) && $_qOb8[$_qO5i]->_ql6r == $_qObc->_ql6r){
												$_ql5s = end($_qObd);
												$_qlu  = $_qOb8[$_qO5i]->_ql6v($_qO54[$_ql5s[_qlz::_ql18]]);
												$_qOao = $_qOao->_ql7w($_qlu);
												array_push($_qObk, $_qOao);
												$_qO5i++;
											}
											foreach($_qlbk as $_qlam){
												foreach($_qObk as $_qOao){
													foreach($_qObb as $_qlbl){
														$_qO7z = $_qlbl[_qlz::_qO16];
														$_qlu  = $_qO7z->_ql6v($_qO54[$_qlbl[_qlz::_ql18]]);
														$_qO5x = $_qlbl[_qlz::_qO16];
														if(isset ($_qO5x->RelevantField)){
															if(strtolower(get_class($_qO5x)) === 'pivotstringfield'){
																$this->_qObl($_qlam, $_qOao, $_qlbl[_qlz::_ql18], '');
															}else{
																$this->_qObl($_qlam, $_qOao, $_qlbl[_qlz::_ql18], 0);
															}
															if($_qO5x->RelevantField === $_qOao->_qO85->FieldName){
																if(strtolower(get_class($_qO5x)) === 'pivotstringfield'){
																	$this->_qlbm($_qlam, $_qOao, $_qlbl[_qlz::_ql18], $_qlu);
																}else{
																	$this->_qObm($_qlam, $_qOao, $_qlbl[_qlz::_ql18], $_qlu);
																}
															}else{
																$this->_qlbm($_qlam, $_qOao, $_qlbl[_qlz::_ql18], 'NA');
															}
														}else{
															$this->_qObl($_qlam, $_qOao, $_qlbl[_qlz::_ql18], 0);
															$this->_qObm($_qlam, $_qOao, $_qlbl[_qlz::_ql18], $_qlu);
														}
													}
												}
											}
										}
									}
								}
								$_qOb7 = round(microtime(true) * 01750);
								if(count($_ql54) < $_ql5w){
									break;
								}
							}
						}
					}
				}
				$this->all_data_collected = $this->_qO9p;
				foreach($_qlb9 as $_qOap){
					$this->all_data_collected = $_qOap->_ql7t($this->all_data_collected);
				}
			}
			$_qOb7 = round(microtime(true) * 01750);
			foreach(array(_qO37::_ql15, _qO37::_qO15) as $_qO3d){
				$this->_ql9q[$_qO3d] = $_qOba[$_qO3d]->_ql8k();
			}
			$_qOb5 = round(microtime(true) * 01750);
			if($this->AllowSorting || $this->AllowSortingData){
				$_qlbn = array(_qO37::_qO15 => false, _qO37::_ql15 => false);
				$_qObn = array(_qO37::_qO15 => false, _qO37::_ql15 => false);
				if(isset ($this->_ql73)){
					$this->_qlbo($this->_ql73);
					$_qlbn[$this->_ql73] = true;
				}
				if(!empty($this->_qO72)){
					foreach($this->_qO72 as $_qO3d => $_ql8h){
						if(!empty($_ql8h)){
							$_qObo = _qO37::_qOz($_qO3d);
							if(isset ($this->_ql9v[$_qO3d][$_ql8h[_qlz::_ql1x]])){
								$_ql3y = $this->_ql9v[$_qO3d][$_ql8h[_qlz::_ql1x]];
								$this->_qlbp($_qObo, $_ql3y);
								$_qlbn[$_qObo] = true;
							}
							$_qObn[$_qObo] = true;
							if(method_exists($_qOba[$_qObo], '_DoSortingGroups')){
								$_qOba[$_qObo]->_dosortinggroups($_ql8h[_qlz::_qO18]);
							}
						}
					}
				}
				foreach($_qObn as $_qO3d => $_qObp){
					if($_qObp == false){
						foreach($_ql5x[$_qO3d] as $_qO5x){
							$_qO5x->_qO6m = true;
						}
						$_qOba[$_qO3d]->_ql8j();
					}
				}
				foreach($_qlb8 as $_ql5f => $_qlbc){
					$_qlbc->_qO7a();
				}
				foreach($_qOb8 as $_qO5d => $_qObc){
					$_qObc->_qO7a();
				}
			}
			$_qOb7 = round(microtime(true) * 01750);
			foreach(array(_qO37::_ql15, _qO37::_qO15) as $_qO3d){
				$this->_ql9q[$_qO3d] = $_qOba[$_qO3d]->_ql8k();
			}
			foreach($this->_ql9q[_qO37::_ql15] as $_qlam){
				foreach($this->_ql9q[_qO37::_qO15] as $_qOao){
					foreach($_qObb as $_qlbl){
						if($_qlam->_ql8c()){
							$this->_qlbm($_qlam, $_qOao, $_qlbl[_qlz::_ql18], 0);
							$_qla3 = $_qlam->_qO8c();
							foreach($_qla3 as $_ql44){
								$_qlu  = $this->_ql4n($_ql44, $_qOao, $_qlbl[_qlz::_ql18]);
								$_qO5x = $_qlbl[_qlz::_qO16];
								if(isset ($_qO5x->RelevantField)){
									$this->_qlbm($_qlam, $_qOao, $_qlbl[_qlz::_ql18], 'NA');
								}else{
									$this->_qObm($_qlam, $_qOao, $_qlbl[_qlz::_ql18], $_qlu);
								}
							}
						}else if($_qOao->_ql8c()){
							$this->_qlbm($_qlam, $_qOao, $_qlbl[_qlz::_ql18], 0);
							$_qla3 = $_qOao->_qO8c();
							foreach($_qla3 as $_ql44){
								$_qlu  = $this->_ql4n($_qlam, $_ql44, $_qlbl[_qlz::_ql18]);
								$_qO5x = $_qlbl[_qlz::_qO16];
								if(isset ($_qO5x->RelevantField)){
									$this->_qlbm($_qlam, $_qOao, $_qlbl[_qlz::_ql18], 'NA');
								}else{
									$this->_qObm($_qlam, $_qOao, $_qlbl[_qlz::_ql18], $_qlu);
								}
							}
						}
					}
					$this->all_data_collected = $this->_qO9p;
					foreach($_qlb9 as $_qOap){
						$this->all_data_collected = $_qOap->_ql7t($this->all_data_collected);
					}
				}
			}
			$_qOb5 = round(microtime(true) * 01750);
			if($this->AllowCaching){
				$_qlba = array();
				foreach(_qO37::$_ql38 as $_qO3d){
					if($_qO3d != _qO37::_ql14){
						foreach($_ql5x[$_qO3d] as $_qO5x){
							$_qlba[$_qO5x->_ql6c] = $_qO5x->_qO79();
						}
					}
				}
				$_qOb9[_qlz::_qO1g] = $_qlba;
				foreach($_qlb8 as $_qlbc){
					foreach($_qOb8 as $_qObc){
						$_qO7x = $_qlbc->_qlk . $_qObc->_qlk;
						if(isset ($this->_qO9p[$_qO7x])){
							$_qOb9[_qlz::_ql1g][$_qO7x] = $this->_qO9p[$_qO7x];
						}
					}
				}
				$_qOb2->_ql6l(_qlz::_qO1c, $_qOb9);
			}
			$_qOb7 = round(microtime(true) * 01750);
			$_qOb5 = round(microtime(true) * 01750);
			if(isset ($this->Pager)){
				$this->Pager->_qO8s = $_qOba[_qO37::_qO15]->_ql4a() - 1;
				$this->Pager->_qO6z($_qlm);
			}
			$this->_qO75();
			$_qOb7 = round(microtime(true) * 01750);
		}

		function _qObl($_qlam, $_qOao, $_qlbq, $_qlu){
			$this->_ql7x($_qlam, $_qOao, $_qO7x, $_qlap, $_qlk);
			if(!isset ($this->_qO9p[$_qO7x][$_qlap][$_qlk][$_qlbq])){
				$this->_qO9p[$_qO7x][$_qlap][$_qlk][$_qlbq] = $_qlu;
			}

			return $this;
		}

		function _qlbm($_qlam, $_qOao, $_qlbq, $_qlu){
			$this->_ql7x($_qlam, $_qOao, $_qO7x, $_qlap, $_qlk);
			$this->_qO9p[$_qO7x][$_qlap][$_qlk][$_qlbq] = $_qlu;

			return $this;
		}

		function _qObm($_qlam, $_qOao, $_qlbq, $_qlu){
			$this->_ql7x($_qlam, $_qOao, $_qO7x, $_qlap, $_qlk);
			$this->_qO9p[$_qO7x][$_qlap][$_qlk][$_qlbq] += $_qlu;

			return $this;
		}

		function _ql4n($_qlam, $_qOao, $_qlbq){
			$this->_ql7x($_qlam, $_qOao, $_qO7x, $_qlap, $_qlk);
			if(isset ($this->_qO9p[$_qO7x][$_qlap][$_qlk][$_qlbq])){
				return $this->_qO9p[$_qO7x][$_qlap][$_qlk][$_qlbq];
			}else{
				return 0;
			}
		}

		function _qObq($_qO5d, $_ql5f, $_qO4d){
			$_ql6  = array();
			$_qObk = $this->_qla2($_qO5d[0], $_qO5d[1]);
			$_qlbk = $this->_qla2($_ql5f[0], $_ql5f[1]);
			$_qlag = $this->_qO9l($_qO4d, _qO37::_ql14);
			$_qO4j = $_qlag->_ql5s;
			foreach($_qlbk as $_qlam){
				$_qlbr = array();
				foreach($_qObk as $_qOao){
					$_qlu = $this->_ql4n($_qlam, $_qOao, $_qO4j[_qlz::_ql18]);
					array_push($_qlbr, $_qlu);
				}
				array_push($_ql6, $_qlbr);
			}

			return $_ql6;
		}

		function getvalues($_qO5d, $_ql5f, $_qO4d){
			$_ql6  = array();
			$_qObk = $this->_qla2(_qO37::_qO15, $_qO5d);
			$_qlbk = $this->_qla2(_qO37::_ql15, $_ql5f);
			$_qlag = $this->_qO9l($_qO4d, _qO37::_ql14);
			$_qO4j = $_qlag->_ql5s;
			foreach($_qlbk as $_qlam){
				$_qlbr = array();
				foreach($_qObk as $_qOao){
					$_qlu = $this->_ql4n($_qlam, $_qOao, $_qO4j[_qlz::_ql18]);
					array_push($_qlbr, $_qlu);
				}
				array_push($_ql6, $_qlbr);
			}

			return $_ql6;
		}

		function _qlbo($_qObr){
			foreach($this->_ql9q[$_qObr] as $_ql3y){
				$_ql3y->_ql8f($_ql3y->Value);
			}
		}

		function _qlbp($_qObr, $_ql8h){
			foreach($this->_ql9q[$_qObr] as $_ql3y){
				if($_qObr == _qO37::_ql15){
					$_qlam = $_ql3y;
					$_qOao = $_ql8h;
				}else if($_qObr == _qO37::_qO15){
					$_qlam = $_ql8h;
					$_qOao = $_ql3y;
				}else{
					return false;
				}
				$this->_ql7x($_qlam, $_qOao, $_qO7x, $_qlap, $_qlk);
				if(empty($this->_qO9u)){
					$this->_qO9u = $this->_qO9q[_qO37::_ql14]->_ql16(0);
				}
				$_qO7y = $this->_qO9u->_qO6r;
				if(isset ($this->all_data_collected[$_qO7x][$_qlap][$_qlk][$_qO7y])){
					$_ql3y->_qls = $this->all_data_collected[$_qO7x][$_qlap][$_qlk][$_qO7y];
				}else{
					$_ql3y->_qls = 0;
				}
			}
		}

		function _qlbs(){
			$_ql7d = "\074div\040id\075\047\173id\175_filterzone'\040class='k\160tFilter\132oneDiv'>\173items}<\057div>";
			$_ql7q = "\074span class='kpt\104esc'\076\173text}\074\057span\076";
			$_qO78 = "";
			foreach($this->_qO9q[_qO37::_qO14]->_ql9m() as $_qO5x){
				$_qO78 .= $_qO5x->_qO7p();
			}
			if($_qO78 != ""){
				$_qlg = _qO0("\173items}", $_qO78, $_ql7d);
			}else{
				$_qObs = _qO0("\173text\175", $this->Localization->_ql6g[_qlz::_qO2p], $_ql7q);
				$_qlg  = _qO0("\173items}", $_qObs, $_ql7d);
			}
			$_qlg = _qO0("\173id\175", $this->_ql6c, $_qlg);

			return $_qlg;
		}

		function _qlbt(){
			$_ql7d = "\074div id=\047\173id}_columnzone' class='\153\160tCol\165mnZoneDiv'\076\173items\175\074/div\076";
			$_ql7q = "\074span\040class=\047\153ptDesc'>\173text}</s\160an>";
			$_qO78 = "";
			foreach($this->_qO9q[_qO37::_ql15]->_ql9m(1) as $_qO5x){
				$_qO78 .= $_qO5x->_qO7p();
			}
			if($_qO78 != ""){
				$_qlg = _qO0("\173items}", $_qO78, $_ql7d);
			}else{
				$_qObs = _qO0("\173text}", $this->Localization->_ql6g[_qlz::_qO2o], $_ql7q);
				$_qlg  = _qO0("\173items}", $_qObs, $_ql7d);
			}
			$_qlg = _qO0("\173id}", $this->_ql6c, $_qlg);

			return $_qlg;
		}

		function _qObt(){
			$_ql7d = "\074div id\075\047\173id\175\137rowzone' class\075'kpt\122owZone\104iv'><table cells\160acing\075'0'st\171le='border:0px\073\047><tbod\171\076\173items}<\057tbody>\074\057table\076\074/div>";
			$_ql7q = "\074span class\075'kpt\104esc'>\173text}<\057span>";
			$_ql7h = "<td>\173field}</td\076";
			$_qO78 = "";
			foreach($this->_qO9q[_qO37::_qO15]->_ql9m(1) as $_qO5x){
				$_ql79 = _qO0("\173field}", $_qO5x->_qO7p(), $_ql7h);
				$_qO78 .= $_ql79;
			}
			if($_qO78 != ""){
				$_qlg = _qO0("\173items}", $_qO78, $_ql7d);
			}else{
				$_qObs = _qO0("\173text}", $this->Localization->_ql6g[_qlz::_ql2p], $_ql7q);
				$_qlg  = _qO0("\173items}", $_qObs, $_ql7d);
			}
			$_qlg = _qO0("\173id}", $this->_ql6c, $_qlg);

			return $_qlg;
		}

		function _qlbu(){
			$_ql7d = "\074div id\075'\173id}_datazone'\040class\075\047kpt\104ataZoneDiv'>\173items}\074\057div>";
			$_ql7q = "\074span class='kpt\104esc'>\173text}<\057span>";
			$_qO78 = "";
			foreach($this->_qO9q[_qO37::_ql14]->_ql9m() as $_qO5x){
				$_qO78 .= $_qO5x->_qO7p(_qO37::_ql14);
			}
			if($_qO78 != ""){
				$_qlg = _qO0("\173items}", $_qO78, $_ql7d);
			}else{
				$_qObs = _qO0("\173text}", $this->Localization->_ql6g[_qlz::_ql2q], $_ql7q);
				$_qlg  = _qO0("\173items}", $_qObs, $_ql7d);
			}
			$_qlg = _qO0("\173id}", $this->_ql6c, $_qlg);

			return $_qlg;
		}

		function _qObu(){
			$_ql7d = "<div\040class='\153\160tColumn\110eader\104iv'><table\040class\075\047kptTable' cellspacing='\060\047 style='table-layo\165t: auto\073'><colgroup>\173cols}<\057colgro\165\160><tbod\171>\173trs}</tbody></table>\074\057div>";
			$_qlbv = "<tr>\173tds}</tr\076";
			$_qO7c = $this->CssClasses;
			$_qObv = "\074td\173id\175\040class='kpt\103olumn\110eader\173wraptext} \173css}'\173colspan}\173rowspan}\076\173text\175\074/td>";
			$_qObv = _qO0("\173css\175", isset ($_qO7c['column header']) ? $_qO7c['column header'] : "", $_qObv);
			$_qlbw = "<td\040class=\047\153ptCol\165mnHeader kpt\103olumn\110eaderTotal\173wraptext} \173css}'\173colspan}\173rowspan}>\173text}<\057td>";
			$_qlbw = _qO0("\173css\175", isset ($_qO7c['column header']) ? $_qO7c['column header'] : "", $_qlbw);
			$_qObw = "<td\040\173id\175\040class='kptColumnHeader kpt\103olumnHeaderTotal\173wraptext} \173css}'\173colspan\175\173rows\160an}>\173text}\173sort}</td\076";
			$_qObw = _qO0("\173css}", isset ($_qO7c['column header']) ? $_qO7c['column header'] : "", $_qObw);
			$_qlbx = "\074col/>";
			$_qObx = "\074tr class\075\047kptDimensionRow'\076\173tds}\074\057tr>";
			$_qlby = "<td\076\074/td>";
			$_qOby = $this->_qO7v[_qO37::_ql15]->_ql7w(0);
			$_qlbz = $_qOby->_qO48();
			$_qObz = $_qOby->_ql4a();
			$_qlc0 = $this->_qO9q[_qO37::_ql14]->_ql1j();
			$_qOak = array();
			for($_qO9 = 0; $_qO9 < $_qlbz; $_qO9++){
				array_push($_qOak, $_qlbv);
			}
			$_qOc0 = "";
			if($_qlc0 > 1){
				$_qOc0 = $_qlbv;
			}
			$_qlc1 = $this->_ql9q[_qO37::_ql15];
			$_ql5e = "";
			for($_qO9 = 0; $_qO9 < count($_qlc1); $_qO9++){
				if($_qlc1[$_qO9]->_qO85->FieldName == _qlz::_qO12){
					if($this->ShowGrandColumn){
						$_qOc1 = _qO0("\173text}", $_qlc1[$_qO9]->_ql8m(), $_qObw);
						$_qOc1 = _qO0("\173rows\160an}", ($_qlbz > 1) ? " rowspan\075'\173rows\160an}'" : "", $_qOc1);
						$_qOc1 = _qO0("\173rows\160an}", $_qlbz, $_qOc1);
						$_qOc1 = _qO0("\173wraptext\175", $_qlc1[$_qO9]->_qO85->HeaderTextWrap ? "" : "\040kptNoWra\160", $_qOc1);
						$_qOc1 = _qO0("\173id\175", " id\075\047\173id\175\047", $_qOc1);
						$_qOc1 = _qO0("\173id}", $_qOby->_ql6c, $_qOc1);
						$_ql7r = "\074span class='k\160tSortButton k\160t\123ort\173direction}\173status}'\040title=\047\173toolti\160\175' onclick='\160ivot_group_sort\137toggle\050this)\047\076</span\076";
						if($this->AllowSortingData){
							switch(strtolower($_qOby->_ql89)){
								case _qlz::_qO10:
									$_qO7r = _qO0("\173direction\175", "Asc", $_ql7r);
									$_qO7r = _qO0("\173tooltip}", $this->Localization->_ql6g[_qlz::_qO2s], $_qO7r);
									break;
								case _qlz::_ql11:
									$_qO7r = _qO0("\173direction\175", "\104esc", $_ql7r);
									$_qO7r = _qO0("\173tooltip\175", $this->Localization->_ql6g[_qlz::_ql2t], $_qO7r);
									break;
								case _qlz::_ql1y:
								default :
									$_qO7r = _qO0("\173direction}", "\101sc", $_ql7r);
									$_qO7r = _qO0("\173tooltip}", $this->Localization->_ql6g[_qlz::_qO2s], $_qO7r);
									break;
							}
							$_ql7s = "\117ff";
							if(!empty($this->_qO72)){
								foreach($this->_qO72 as $_qO3d => $_ql8h){
									if(!empty($_ql8h) && $_ql8h[_qlz::_ql1x] == $_qOby->_ql6c){
										$_ql7s = "On";
									}
								}
							}
							$_qO7r = _qO0("\173status}", $_ql7s, $_qO7r);
						}else{
							$_qO7r = "";
						}
						$_qOc1 = _qO0("\173sort}", $this->AllowSortingData ? $_qO7r : "", $_qOc1);
						if($_qlc0 > 1){
							$_qOc1 = _qO0("\173colspan\175", " colspan='\173colspan\175\047", $_qOc1);
							$_qOc1 = _qO0("\173colspan\175", $_qlc0, $_qOc1);
						}else{
							$_qOc1 = _qO0("\173colspan}", "", $_qOc1);
						}
						if(!isset ($_qOak[0])){
							array_push($_qOak, $_qlbv);
						}
						$_qOak[0] = _qO0("\173tds}", $_qOc1, $_qOak[0]);
					}
				}else{
					$_qlc2 = $_qlc1[$_qO9]->_ql4a();
					$_qOc2 = $_qlc1[$_qO9]->_qO48();
					$_ql8l = $_qlc1[$_qO9]->_ql47();
					$_qlaj = _qO0("\173id}", "\040id='\173id}'", $_qObv);
					$_qlaj = _qO0("\173id}", $_qlc1[$_qO9]->_ql6c, $_qlaj);
					$_qlaj = _qO0("\173text}", $_qlc1[$_qO9]->_ql8m(), $_qlaj);
					$_qlaj = _qO0("\173wraptext\175", $_qlc1[$_qO9]->_qO85->HeaderTextWrap ? "" : "\040kptNoWrap", $_qlaj);
					if($_qlc0 > 1){
						$_qlaj = _qO0("\173colspan\175", " cols\160an='\173colspan\175'", $_qlaj);
						$_qlaj = _qO0("\173cols\160an}", (($_qlc2 > 1) ? $_qlc2 - 1 : $_qlc2) * $_qlc0, $_qlaj);
					}else{
						$_qlaj = _qO0("\173colspan\175", ($_qlc2 > 1) ? " colspan=\047\173colspan}'" : "", $_qlaj);
						$_qlaj = _qO0("\173colspan}", $_qlc2 - 1, $_qlaj);
					}
					if($_ql8l < $_qlbz - 1 & $_qlc2 <= 1){
						$_qlaj = _qO0("\173rows\160an}", "\040rowspan='\173rowspan}\047", $_qlaj);
						$_qlaj = _qO0("\173rowspan\175", $_qlbz - $_ql8l, $_qlaj);
					}else{
						$_qlaj = _qO0("\173rows\160an}", "", $_qlaj);
					}
					$_qOak[$_ql8l] = _qO0("\173tds}", $_qlaj . "\173tds}", $_qOak[$_ql8l]);
					if($_qlc2 > 1){
						$_qOal = _qO0("\173text}", $_qlc1[$_qO9]->_qO8n(), $_qlbw);
						$_qOal = _qO0("\173wraptext\175", $_qlc1[$_qO9]->_qO85->HeaderTextWrap ? "" : " k\160tNoWra\160", $_qOal);
						$_qOal = _qO0("\173rowspan\175", " rowspan='\173rowspan\175'", $_qOal);
						$_qOal = _qO0("\173rows\160an}", $_qlbz, $_qOal);
						if($_qlc0 > 1){
							$_qOal = _qO0("\173colspan\175", " cols\160an='\173colspan}\047", $_qOal);
							$_qOal = _qO0("\173colspan}", $_qlc0, $_qOal);
						}else{
							$_qOal = _qO0("\173cols\160an}", "", $_qOal);
						}
						$_qOak[$_ql8l] = _qO0("\173tds}", $_qOal . "\173tds}", $_qOak[$_ql8l]);
					}
				}
				if($_qlc0 > 1){
					$_qlc3 = "";
					for($_qOc3 = 0; $_qOc3 < $_qlc0; $_qOc3++){
						$_ql7r = "<span class='k\160tSortB\165tton k\160tSort\173direction}' title='\173toolti\160\175' onclick=\047\160ivot_group_sort_toggle(t\150is)'><\057span>";
						$_qlc4 = $this->_qO9q[_qO37::_ql14]->_ql16($_qOc3)->renderheadertotal($_qlc1[$_qO9]->Value);
						$_qlaj = _qO0("\173id}", " id\075'\173id\175'", $_qObv);
						$_qlaj = _qO0("\173id}", $_qlc1[$_qO9]->_ql6c . $_qlc4, $_qlaj);
						$_qlaj = _qO0("\173cols\160an}", "", $_qlaj);
						$_qlaj = _qO0("\173rowspan\175", "", $_qlaj);
						$_qlaj = _qO0("\173text}", $_qlc4, $_qlaj);
						$_qlaj = _qO0("\173wra\160text}", $_qlc1[$_qO9]->_qO85->HeaderTextWrap ? "" : "\040k\160tNoWrap", $_qlaj);
						$_qlc3 .= $_qlaj;
						$_ql5e .= $_qlbx;
					}
					$_qOc0 = _qO0("\173tds}", $_qlc3 . "\173tds}", $_qOc0);
				}else{
					$_ql5e .= $_qlbx;
				}
			}
			$_qOc4 = "";
			for($_qO9 = 0; $_qO9 < $_qObz * $_qlc0; $_qO9++){
				$_qOc4 .= $_qlby;
			}
			$_qlc5 = _qO0("\173tds\175", $_qOc4, $_qObx);
			for($_qO9 = 0; $_qO9 < $_qlbz; $_qO9++){
				$_qOak[$_qO9] = _qO0("\173tds}", "", $_qOak[$_qO9]);
			}
			$_qOc0 = _qO0("\173tds}", "", $_qOc0);
			$_qlg  = _qO0("\173trs}", implode("", $_qOak) . $_qOc0 . $_qlc5, $_ql7d);
			$_qlg  = _qO0("\173cols}", $_ql5e, $_qlg);

			return $_qlg;
		}

		function _qOc5(){
			$_ql7d = "\074div class='k\160tRowHeaderDiv'\173minwidth}>\074table class=\047\153ptTable' cellspacing='0\047\040><colgrou\160\076\173cols}</colgroup\076\074tbod\171>\173trs}</tbody>\074\057table\076</div>";
			$_qlbv = "\074tr>\173tds}<\057tr>";
			$_qO7c = $this->CssClasses;
			$_qObv = "\074td id=\047\173id}' class='\153\160tRowHeader\173wraptext} \173css}'\173colspan\175\173rowspan}>\173text}\074\057td>";
			$_qObv = _qO0("\173css}", isset ($_qO7c['row header']) ? $_qO7c['row header'] : "", $_qObv);
			$_qlbw = "<td\040class=\047\173class}\173wraptext} \173css}' scope\075\047col'\173colspan}\173rowspan}\076\173text}\074\057td>";
			$_qlbw = _qO0("\173css}", isset ($_qO7c['row header']) ? $_qO7c['row header'] : "", $_qlbw);
			$_qObw = "\074td id='\173id}' class='kpt\122owHeader \173class\175\040\173css\175\047 sco\160e='col\047\173colspan}\173rowspan\175>\173text}\173sort}</td\076";
			$_qObw = _qO0("\173css}", isset ($_qO7c['row header']) ? $_qO7c['row header'] : "", $_qObw);
			$_qlbx = "<col/>";
			$_qOby = $this->_qO7v[_qO37::_qO15]->_ql7w(0);
			$_qlbz = $_qOby->_qO48();
			$_qObz = $_qOby->_ql4a();
			$_qlc0 = $this->_qO9q[_qO37::_ql14]->_ql1j();
			$_qlc6 = $this->_ql9q[_qO37::_qO15];
			$_qOa6 = 0;
			$_qla7 = count($_qlc6) - 1;
			if(isset ($this->Pager)){
				$_qOa6 = $this->Pager->PageIndex * $this->Pager->PageSize;
				$_qla7 = ($_qOa6 + $this->Pager->PageSize < $this->Pager->_qO8s) ? $this->Pager->PageSize : ($this->Pager->_qO8s - $_qOa6);
			}
			$_qOak = array();
			for($_qO9 = 0; $_qO9 < $_qla7; $_qO9++){
				array_push($_qOak, $_qlbv);
			}
			$_qOc6 = array();
			$_ql5e = "";
			for($_qlc7 = 0; $_qlc7 < $_qlbz; $_qlc7++){
				$_qOc7 = 0;
				for($_qlc8 = 0; $_qlc8 < count($_qlc6) - 1; $_qlc8++){
					$_qlc2 = $_qlc6[$_qlc8]->_ql4a();
					$_qOc2 = $_qlc6[$_qlc8]->_qO48();
					$_ql8l = $_qlc6[$_qlc8]->_ql47();
					if($_ql8l == $_qlc7){
						if($_qlc2 > 1){
							if($_qOc7 >= $_qOa6 && $_qOc7 < $_qOa6 + $_qla7){
								$_qlaj                  = _qO0("\173id}", $_qlc6[$_qlc8]->_ql6c, $_qObv);
								$_qlaj                  = _qO0("\173text}", $_qlc6[$_qlc8]->_ql8m(), $_qlaj);
								$_qlaj                  = _qO0("\173wraptext\175", $_qlc6[$_qlc8]->_qO85->HeaderTextWrap ? "" : " \153\160tNoWrap", $_qlaj);
								$_qlaj                  = _qO0("\173colspan}", "", $_qlaj);
								$_qlaj                  = _qO0("\173rowspan}", " rowspan\075'\173rows\160an}'", $_qlaj);
								$_qlaj                  = _qO0("\173rowspan\175", ($_qOc7 + $_qlc2 - 1 < $_qOa6 + $_qla7) ? ($_qlc2 - 1) : ($_qOa6 + $_qla7 - $_qOc7), $_qlaj);
								$_qOak[$_qOc7 - $_qOa6] = _qO0("\173tds}", $_qlaj . "\173tds\175", $_qOak[$_qOc7 - $_qOa6]);
							}else if($_qOc7 < $_qOa6 && $_qOc7 + $_qlc2 - 1 > $_qOa6){
								$_qlaj    = _qO0("\173id}", $_qlc6[$_qlc8]->_ql6c, $_qObv);
								$_qlaj    = _qO0("\173text}", $_qlc6[$_qlc8]->_ql8m(), $_qlaj);
								$_qlaj    = _qO0("\173wraptext\175", $_qlc6[$_qlc8]->_qO85->HeaderTextWrap ? "" : " k\160tNoWra\160", $_qlaj);
								$_qlaj    = _qO0("\173colspan\175", "", $_qlaj);
								$_qlaj    = _qO0("\173rowspan}", " rowspan='\173rowspan\175'", $_qlaj);
								$_qlaj    = _qO0("\173rows\160an}", ($_qOc7 + $_qlc2 - 1 < $_qOa6 + $_qla7) ? ($_qOc7 + $_qlc2 - 1 - $_qOa6) : ($_qla7), $_qlaj);
								$_qOak[0] = _qO0("\173tds}", $_qlaj . "\173tds}", $_qOak[0]);
							}
							$_qOc7 += ($_qlc2 - 1);
							if($_qOc7 >= $_qOa6 && $_qOc7 < $_qOa6 + $_qla7){
								$_qOal = _qO0("\173text}", $_qlc6[$_qlc8]->_qO8n(), $_qlbw);
								$_qOal = _qO0("\173wraptext\175", $_qlc6[$_qlc8]->_qO85->HeaderTextWrap ? "" : "\040kptNo\127rap", $_qOal);
								$_qOal = _qO0("\173rowspan\175", "", $_qOal);
								$_qOal = _qO0("\173colspan\175", "\040colspan=\047\173colspan\175\047", $_qOal);
								$_qOal = _qO0("\173colspan}", $_qlbz, $_qOal);
								+$_qOal = _qO0("\173class}", "kptRowHeaderTotal", $_qOal);
								$_qOak[$_qOc7 - $_qOa6] = _qO0("\173tds}", $_qOal, $_qOak[$_qOc7 - $_qOa6]);
							}
							$_qOc6[$_qOc7] = 1;
							$_qOc7++;
						}else{
							while(isset ($_qOc6[$_qOc7])){
								$_qOc7++;
							}
							if($_qOc7 >= $_qOa6 && $_qOc7 < $_qOa6 + $_qla7){
								$_qlaj                  = _qO0("\173id}", $_qlc6[$_qlc8]->_ql6c, $_qObv);
								$_qlaj                  = _qO0("\173text}", $_qlc6[$_qlc8]->_ql8m(), $_qlaj);
								$_qlaj                  = _qO0("\173wraptext\175", $_qlc6[$_qlc8]->_qO85->HeaderTextWrap ? "" : " \153\160tNoWrap", $_qlaj);
								$_qlaj                  = _qO0("\173rows\160an}", "", $_qlaj);
								$_qlaj                  = _qO0("\173colspan}", "\040colspan=\047\173colspan}'", $_qlaj);
								$_qlaj                  = _qO0("\173colspan}", $_qlbz - $_ql8l, $_qlaj);
								$_qOak[$_qOc7 - $_qOa6] = _qO0("\173tds}", $_qlaj . "\173tds}", $_qOak[$_qOc7 - $_qOa6]);
							}
							$_qOc6[$_qOc7] = 1;
							$_qOc7++;
						}
					}elseif($_ql8l < $_qlc7){
						$_qOc7++;
					}
				}
				$_ql5e .= $_qlbx;
			}
			for($_qO9 = 0; $_qO9 < $_qla7; $_qO9++){
				$_qOak[$_qO9] = _qO0("\173tds\175", "", $_qOak[$_qO9]);
			}
			$_qOc8 = _qO0("\173tds}", $_qObw, $_qlbv);
			$_qOc8 = _qO0("\173rowspan\175", "", $_qOc8);
			$_qOc8 = _qO0("\173cols\160an}", "\040colspan=\047\173colspan\175'", $_qOc8);
			$_qOc8 = _qO0("\173cols\160an}", $_qlbz, $_qOc8);
			$_qOc8 = _qO0("\173class}", "\153ptRowHeaderGrand\124otal", $_qOc8);
			$_qOc8 = _qO0("\173text}", $_qOby->_ql8m(), $_qOc8);
			$_qOc8 = _qO0("\173id}", $_qOby->_ql6c, $_qOc8);
			$_ql7r = "<s\160an class='kpt\123ortButton kpt\123ort\173direction}\173status\175\047 title\075'\173tooltip\175\047 onclick='pivot_group_sort_toggle(this\051\047></s\160an>";
			if($this->AllowSortingData){
				switch(strtolower($_qOby->_ql89)){
					case _qlz::_qO10:
						$_qO7r = _qO0("\173direction}", "Asc", $_ql7r);
						$_qO7r = _qO0("\173tooltip\175", $this->Localization->_ql6g[_qlz::_qO2s], $_qO7r);
						break;
					case _qlz::_ql11:
						$_qO7r = _qO0("\173direction}", "\104esc", $_ql7r);
						$_qO7r = _qO0("\173toolti\160\175", $this->Localization->_ql6g[_qlz::_ql2t], $_qO7r);
						break;
					case _qlz::_ql1y:
					default :
						$_qO7r = _qO0("\173direction}", "Asc", $_ql7r);
						$_qO7r = _qO0("\173tooltip}", $this->Localization->_ql6g[_qlz::_qO2s], $_qO7r);
						break;
				}
				$_ql7s = "\117ff";
				if(!empty($this->_qO72)){
					foreach($this->_qO72 as $_qO3d => $_ql8h){
						if(!empty($_ql8h) && $_ql8h[_qlz::_ql1x] == $_qOby->_ql6c){
							$_ql7s = "\117n";
						}
					}
				}
				$_qO7r = _qO0("\173stat\165s}", $_ql7s, $_qO7r);
			}else{
				$_qO7r = "";
			}
			$_qOc8 = _qO0("\173sort}", $this->AllowSortingData ? $_qO7r : "", $_qOc8);
			$_qlg  = $_ql7d;
			$_qlg  = _qO0("\173trs}", implode("", $_qOak) . ($this->ShowGrandRow ? $_qOc8 : ""), $_qlg);
			$_qlg  = _qO0("\173cols}", $_ql5e, $_qlg);
			$_qlg  = _qO0("\173minwidth}", ($this->Appearance->RowHeaderMinWidth !== null) ? "\040style='min\055widt\150\072" . $this->Appearance->RowHeaderMinWidth . "'" : "", $_qlg);

			return $_qlg;
		}

		function _qlc9(){
			$_ql7d = "<div class='\153\160tContent\104iv'>\074table\040cellspacing='0' class='k\160t\124able' st\171le='table-layo\165t: auto;'><colgroup>\173cols}</colgroup\076\074tbody>\173trs}</tbody>\074\057table\076</div\076";
			$_qlbv = "\074tr>\173tds\175</tr\076";
			$_qObv = "<td class='kpt\104ataCell \173css\175\047>\173text}\074\057td>";
			$_qlbx = "\074col />";
			$_qOc9 = $this->_ql9q[_qO37::_ql15];
			$_qlca = $this->_ql9q[_qO37::_qO15];
			$_qOa6 = 0;
			$_qla7 = count($_qlca) - 1;
			if(isset ($this->Pager)){
				$_qOa6 = $this->Pager->PageIndex * $this->Pager->PageSize;
				$_qla7 = ($_qOa6 + $this->Pager->PageSize < $this->Pager->_qO8s) ? $this->Pager->PageSize : ($this->Pager->_qO8s - $_qOa6);
			}
			$_ql5e = "";
			for($_qlc7 = 0; $_qlc7 < count($_qOc9); $_qlc7++){
				if($_qOc9[$_qlc7]->_qO85->FieldName != _qlz::_qO12 || $this->ShowGrandColumn){
					for($_qOca = 0; $_qOca < $this->_qO9q[_qO37::_ql14]->_ql1j(); $_qOca++){
						$_ql5e .= $_qlbx;
					}
				}
			}
			$_qOak = "";
			for($_qlc8 = $_qOa6; $_qlc8 < $_qOa6 + $_qla7 + ($this->ShowGrandRow ? 1 : 0); $_qlc8++){
				if($_qlc8 == $_qOa6 + $_qla7){
					$_qlc8 = count($_qlca) - 1;
				}
				$_qlc3 = "";
				for($_qlc7 = 0; $_qlc7 < count($_qOc9); $_qlc7++){
					if($_qOc9[$_qlc7]->_qO85->FieldName != _qlz::_qO12 || $this->ShowGrandColumn){
						$this->_ql7x($_qOc9[$_qlc7], $_qlca[$_qlc8], $_qO7x, $_qlap, $_qlk);
						for($_qO9 = 0; $_qO9 < $this->_qO9q[_qO37::_ql14]->_ql1j(); $_qO9++){
							$_qOap = $this->_qO9q[_qO37::_ql14]->_ql16($_qO9);
							$_qO7y = $_qOap->_qO6r;
							$_qlu  = (isset ($this->all_data_collected[$_qO7x][$_qlap][$_qlk][$_qO7y])) ? $_qOap->displayformat($this->all_data_collected[$_qO7x][$_qlap][$_qlk][$_qO7y]) : $_qOap->displayformat($this->EmptyValue);
							$_qlaj = _qO0("\173text\175", $_qlu, $_qObv);
							if(isset ($this->CssClasses['data cell'])){
								$_qlaj = _qO0("\173css}", $this->CssClasses['data cell'] . " \173css\175", $_qlaj);
							}
							if($_qlca[$_qlc8]->_qO85->FieldName == _qlz::_qO12){
								$_qlaj = _qO0("\173css}", " kptRow\107randTotal\104ataCell\173css}", $_qlaj);
							}else if($_qlca[$_qlc8]->_qO48() > 0){
								$_qlaj = _qO0("\173css}", " \153\160tRow\124otalDataCell\173css}", $_qlaj);
							}
							if($_qOc9[$_qlc7]->_qO85->FieldName == _qlz::_qO12){
								$_qlaj = _qO0("\173css}", "\040kptCol\165mnGrand\124otal\104ataCell", $_qlaj);
							}else if($_qOc9[$_qlc7]->_qO48() > 0){
								$_qlaj = _qO0("\173css}", "\040kptCol\165mnTotal\104ataCell", $_qlaj);
							}else{
								$_qlaj = _qO0("\173css}", "", $_qlaj);
							}
							$_qlc3 .= $_qlaj;
						}
					}
				}
				$_qOaj = _qO0("\173tds}", $_qlc3, $_qlbv);
				$_qOak .= $_qOaj;
			}
			$_qlg = _qO0("\173trs}", $_qOak, $_ql7d);
			$_qlg = _qO0("\173cols}", $_ql5e, $_qlg);

			return $_qlg;
		}

		function _qlcb(){
			$_ql7d = "\074div class\075'kptVertical\123crollDiv' st\171le='width:\061\067px;overflow-\171\072 scroll; overflow\055x: hidden;'>\074div st\171le='width:17px\047></div></div\076";

			return $_ql7d;
		}

		function _qOcb(){
			$_ql7d = "<div class\075\047kpt\110orizontal\123crollDiv' style='\150eight:\061\067px;overflow\055x: scroll; overflow\055\171: hidden;'>\074div st\171le='\150eight:\061\067px'>\074\057div\076\074/div\076";

			return $_ql7d;
		}

		function _qlcc(){
			return $this->Status->_ql6d();
		}

		function renderpivottable(){
			$this->_qOcc();
			$_qlcd = "\n<!--Kool\120ivot\124able\040version " . $this->_ql0 . "\040- www.\153oolphp.net -->\n";
			if(isset ($this->_ql75)){
				$_ql5z = $this->_ql75->_ql7c();
			}else{
				$_qOcd = "<table class='kpt\124able\173\150orizontalscrolling}\173verticalscrolling}' cellspacing='0'>\074colgro\165p>\173cols}<\057colgro\165\160><tbody>\173filter_zone}\173data_and_col\165mn_zone\175\173row\137and_columnheader_and_vertical_scrolling_zone\175\173row\150eader\137and_content\137\172one}\173\150orizontal_scrolling_\172one}\173\160ager\137\172one}\173status\137zone\175\074/tbody></table>";
				$_qlce = "\074tr><td\040colspan\075'\173total_colspan\175\047 class='k\160t\106ilterZone'\076\173zone}\074\057td>\074\057tr>";
				$_qOce = "";
				if($this->SeparateDataZone){
					if($this->ShowDataZone){
						$_qOce .= "\074tr><td\040colspan\075\047\173total_colspan}'\040class\075'kpt\104ataZone\047>\173data_zone\175</td>\074\057tr>";
					}
					if($this->ShowColumnZone){
						$_qOce .= "\074tr><td\040colspan\075\047\173total_cols\160an}'\040class\075'kpt\103olumn\132one'>\173column\137\172one}\074\057td><\057tr>";
					}
				}else{
					$_qOce = "\074tr><td colspan=\047\173data_colspan\175\047 class='\153\160tData\132one'>\173data_zone}</td><td class='\153\160tColumnZone'\040colspan='\173column_colspan\175\047>\173column_\172one}<\057td></tr>";
				}
				$_qlcf = "\173\172one}";
				$_qOcf = "\173zone}";
				if($this->SeparateRowZone){
					$_qlcg = "\074tr><td colspan=\047\062' class='kpt\122owZone\047>\173row_zone}</td\076\074/tr>\074tr><td\040colspan='\173row_cols\160an}' class='\047\040style\075'widt\150\072$this->RowZoneWidth\073\040min-width:$this->RowZoneMinWidth'>&nbsp;</td\076\074td colspan='\173column\150eader\137cols\160an}' class=\047\153ptCol\165mnHeaderZone\047>\173columnheader_zone}</td\076\173vertical_scrolling\137zone}\074\057tr>";
				}else{
					$_qlcg = "<tr><td\040colspan\075'\173row\137cols\160an}' class=\047\153ptRow\132one'\040style=\047width:$this->RowZoneWidth; min-width:$this->RowZoneMinWidth'>\173row\137zone\175\074/td><td cols\160an='\173column\150eader\137colspan\175\047 class='kpt\103olumn\110eaderZone'>\173columnheader_zone}</td\076\173vertical_scrolling_zone}</tr\076";
				}
				$_qOcg = "\173\172one}";
				$_qlch = "\173zone}";
				$_qOch = "\074td rowspan='2' class='\153\160tVertical\123crollingZone\047\040style\075'widt\150\07217px'\076\173zone}\074\057td>";
				$_qlci = "\074tr><td\040colspan\075'\173rowheader\137cols\160an}' class=\047\153ptRow\110eaderZone'>\173rowheader_zone\175\074/td\076\074td colspan=\047\173content_cols\160an}' class='k\160tContentZone\047>\173content\137\172one}<\057td></tr>";
				$_qOci = "\173zone\175";
				$_qlcj = "\173\172one}";
				$_qOcj = "<tr\076<td\040colspan\075\047\173total_colspan\175\047 class='kpt\110orizontalScrolling\132one'>\173\172one}<\057td></tr\076";
				$_qlck = "\074tr><td colspan\075'\173total_colspan\175\047 class='kptPagerZone\047\076\173zone\175</td>\074\057tr>";
				$_qOck = "\074tr><td\040cols\160an='\173total_colspan\175\047 class\075'kpt\123tatus\132one'>\173\172one}<\057td></tr\076";
				if($this->VerticalScrolling){
					$_qlcl = 3;
					$_qOcl = 1;
					$_qlcm = 2;
					$_qOcm = $_qlcn = 1;
					$_qOcn = $_qlco = 1;
					$_ql5e = "\074col /><col /><col\040style='width:17\160x' />";
				}else{
					$_qlcl = 2;
					$_qOcl = $_qlcm = 1;
					$_qOcm = $_qlcn = 1;
					$_qOcn = $_qlco = 1;
					$_ql5e = "<col\040/><col\040\057>";
				}
				$_ql5z = $_qOcd;
				$_qOco = "";
				if($this->ShowStatus){
					$_qOco = _qO0("\173zone\175", $this->_qlcc(), $_qOck);
					$_qOco = _qO0("\173total_colspan}", $_qlcl, $_qOco);
				}
				$_qlcp = "";
				if($this->Pager !== null){
					$_qlcp = _qO0("\173\172one}", $this->Pager->render(), $_qlck);
					$_qlcp = _qO0("\173total_cols\160an}", $_qlcl, $_qlcp);
				}
				$_qOcp = "";
				if($this->HorizontalScrolling){
					$_qOcp = _qO0("\173zone}", $this->_qOcb(), $_qOcj);
					$_qOcp = _qO0("\173total_colspan}", $_qlcl, $_qOcp);
				}
				$_qlcq = _qO0("\173\172one}", $this->_qlc9(), $_qlcj);
				/**
				 *
				 */
				$_qOcq = _qO0("\173\172one}", $this->_qOc5(), $_qOci);
				$_qlcr = _qO0("\173row\150eader_zone}", $_qOcq, $_qlci);
				$_qlcr = _qO0("\173content\137zone}", $_qlcq, $_qlcr);
				$_qlcr = _qO0("\173rowheader\137colspan\175", $_qOcn, $_qlcr);
				$_qlcr = _qO0("\173content_colspan}", $_qlco, $_qlcr);
				$_qOcr = "";
				if($this->VerticalScrolling){
					$_qOcr = _qO0("\173zone}", $this->_qlcb(), $_qOch);
				}
				$_qlcs = _qO0("\173zone\175", $this->_qObu(), $_qlch);
				$_qOcs = "";
				if($this->ShowRowZone){
					$_qOcs = _qO0("\173zone}", $this->_qObt(), $_qOcg);
				}
				$_qlct = _qO0("\173vertical_scrolling_zone}", $_qOcr, $_qlcg);
				$_qlct = _qO0("\173columnheader_zone\175", $_qlcs, $_qlct);
				$_qlct = _qO0("\173row_zone\175", $_qOcs, $_qlct);
				$_qlct = _qO0("\173columnheader_colspan}", $_qlcn, $_qlct);
				$_qlct = _qO0("\173row\137colspan\175", $_qOcm, $_qlct);
				$_qOct = "";
				if($this->ShowColumnZone){
					$_qOct = _qO0("\173zone}", $this->_qlbt(), $_qOcf);
				}
				$_qlcu = "";
				if($this->ShowDataZone){
					$_qlcu = _qO0("\173zone}", $this->_qlbu(), $_qlcf);
				}
				$_qOcu = "";
				if($_qlcu != "" && $_qOct != "" || $this->SeparateDataZone){
					$_qOcu = _qO0("\173data_zone\175", $_qlcu, $_qOce);
					$_qOcu = _qO0("\173column_zone}", $_qOct, $_qOcu);
					$_qOcu = _qO0("\173data_colspan}", $_qOcl, $_qOcu);
					$_qOcu = _qO0("\173column_colspan}", $_qlcm, $_qOcu);
					$_qOcu = _qO0("\173total_colspan\175", $_qlcl, $_qOcu);
				}
				$_qlcv = "";
				if($this->ShowFilterZone){
					$_qlcv = _qO0("\173zone}", $this->_qlbs(), $_qlce);
					$_qlcv = _qO0("\173total_colspan}", $_qlcl, $_qlcv);
				}
				$_ql5z = _qO0("\173filter\137\172one\175", $_qlcv, $_qOcd);
				$_ql5z = _qO0("\173data_and\137col\165mn_zone}", $_qOcu, $_ql5z);
				$_ql5z = _qO0("\173row\137and_col\165mnheader_and\137vertical_scrolling_zone\175", $_qlct, $_ql5z);
				$_ql5z = _qO0("\173rowheader\137and_content_\172one}", $_qlcr, $_ql5z);
				$_ql5z = _qO0("\173hori\172ontal_scrolling\137zone}", $_qOcp, $_ql5z);
				$_ql5z = _qO0("\173pager_zone}", $_qlcp, $_ql5z);
				$_ql5z = _qO0("\173status_zone}", $_qOco, $_ql5z);
				$_ql5z = _qO0("\173cols}", $_ql5e, $_ql5z);
				$_ql5z = _qO0("\173\150orizontalscrolling}", $this->HorizontalScrolling ? "\040kptHori\172ontal\123crolling" : "", $_ql5z);
				$_ql5z = _qO0("\173verticalscrolling}", $this->VerticalScrolling ? " \153\160tVerticalScrolling" : "", $_ql5z);
			}
			$_qlg = _qO0("\173id}", $this->id, _qOd());
			if(_qOf($_qlg)){
				$_qlg = _qO0("\173width}", ($this->Width === null) ? "" : "widt\150\072" . $this->Width . ";", $_qlg);
				$_qlg = _qO0("\173height}", ($this->Height === null) ? "" : "height\072" . $this->Height . ";", $_qlg);
				$_qlg = _qO0("\173style}", $this->_ql4h, $_qlg);
				$_qlg = _qO0("\173trademar\153\175", $_qlcd, $_qlg);
				$_qlg = _qO0("\173table}", $_ql5z, $_qlg);
				$_qlg = _qO0("\173viewstate}", $this->_ql6n->_ql6d(), $_qlg);
				$_qlg = _qO0("\173command\175", $this->_ql9s->_ql6d(), $_qlg);
				$_qlg = _qO0("\173version}", $this->_ql0, $_qlg);
			}

			return $_qlg;
		}

		function render(){
			$_qOcv = $this->registercss();
			$_qOcv .= $this->renderpivottable();
			$_qlcw = isset ($_POST["\137\137koolajax"]) || isset ($_GET["\137\137koola\152ax"]);
			$_qOcv .= ($_qlcw) ? "" : $this->registerscript();
			$_qOcv .= "<scri\160t type=\047text/javascri\160t'>";
			$_qOcv .= $this->startupscript();
			$_qOcv .= "\074/script>";
			if($this->AjaxEnabled && class_exists("\125\160datePanel")){
				$_qOcw           = new updatepanel($this->id . "_u\160datepanel");
				$_qOcw->content  = $_qOcv;
				$_qOcw->cssclass = $this->_ql4h . "K\120\124_Update\120anel";
				if($this->AjaxLoadingImage){
					$_qOcw->setloading($this->AjaxLoadingImage);
				}
				$_qOcv = $_qOcw->render();
			}

			return $_qOcv;
		}

		function _qOcc(){
			$this->styleFolder = _qO0("\134", "/", $this->styleFolder);
			$_qlcx             = trim($this->styleFolder, "/");
			$_qOcx             = strrpos($_qlcx, "/");
			$this->_ql4h       = substr($_qlcx, ($_qOcx ? $_qOcx : -1) + 1);
		}

		function registercss(){
			$this->_qOcc();
			$_qlcy = "<script\040type='text/javascript\047\076if (document.get\105lement\102yId('\137\137\173style}KP\124\047)==null)\173var\040_head\040= doc\165ment.getElementsByTagName('\150ead')[\060\135;var\040_lin\153 = doc\165ment.createElement\050\047link\047\051; _link.id \075\040'__\173style}\113\120T';_link.rel\075'stylesheet\047; _link.href\075'\173stylepat\150}/\173style}\057\173st\171le}.css';_\150ead.a\160\160endC\150ild(_link);\175\074/scri\160t>";
			$_qOcv = _qO0("\173style\175", $this->_ql4h, $_qlcy);
			$_qOcv = _qO0("\173stylepat\150}", $this->_qOcy(), $_qOcv);

			return $_qOcv;
		}

		function registerscript(){
			$_qlcy = "\074script t\171\160e='text/javascript\047>if(t\171peof\040_lib\113\120T=='undefined\047\051\173document\056write\050\165nesca\160e(\042%\063\103script\040type=\047text/\152avascri\160t' src\075'\173src}'%\063\105 %3C\057script\045\063E\042\051\051;_lib\113PT=1;\175\074/scri\160t>";
			$_qOcv = _qO0("\173src}", $this->_qlcz() . "?" . md5("\152s"), $_qlcy);

			return $_qOcv;
		}

		function startupscript(){
			$_qlcy = "var \173id}; function \173id}_init()\173\040\173id} =\040new Kool\120ivotTable('\173id}',\173\101\152axEnabled},'\173\101\152axHandlePage\175');}";
			$_qlcy .= "if (typeof\050KoolPivotTable\051=='function\047\051\173\173id}_init\050\051;}";
			$_qlcy .= "else\173if\050typeof\050\137_KPTInits)==\047\165ndefined')\173\137\137KPTInits\075new \101rray()\073\175 __KPT\111nits.pus\150\050\173id\175\137init\051\073\173register_script}\175";
			$_qOcz = "if\050typeof\050_libKP\124\051\075='undefined\047)\173var _head = doc\165ment\056getElementsByTagName('head')[0\135\073var _script = document\056create\105lement\050\047scri\160t'); _script.t\171\160e='text/javascri\160t\047; _script.src='\173src}';\040\137head.a\160\160endC\150ild(_script);\137libKP\124\0751;}";
			$_qld0 = _qO0("\173src}", $this->_qlcz() . "\077" . md5("js"), $_qOcz);
			$_qOcv = _qO0("\173id}", $this->id, $_qlcy);
			$_qOcv = _qO0("\173\101jaxEnabled}", $this->AjaxEnabled ? "1" : "0", $_qOcv);
			$_qOcv = _qO0("\173\101\152axHandlePage}", $this->AjaxHandlePage, $_qOcv);
			$_qOcv = _qO0("\173register\137script\175", $_qld0, $_qOcv);

			return $_qOcv;
		}

		function _qlcz(){
			if($this->scriptFolder == ""){
				$_ql5  = _qO3();
				$_qOd0 = substr(_qO0("\134", "/", __FILE__), strlen($_ql5));

				return $_qOd0;
			}else{
				$_qOd0 = _qO0("\134", "/", __FILE__);
				$_qOd0 = $this->scriptFolder . substr($_qOd0, strrpos($_qOd0, "/"));

				return $_qOd0;
			}
		}

		function _qOcy(){
			$_qld1 = $this->_qlcz();
			$_qOd1 = _qO0(strrchr($_qld1, "/"), "", $_qld1) . "\057styles";

			return $_qOd1;
		}
	}
} ?>
