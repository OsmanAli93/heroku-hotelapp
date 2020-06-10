
const btn = document.querySelectorAll('.btn-book');
btn.forEach(btn => btn.addEventListener('click', getRoom, false));


function getNode(id,slnt)
{   /*
    if (arguments.length == 1 || (arguments.length == 2 && !arguments[1])) {
        if (document.getElementById(id) == null)
            alert("NODE [" + id + "] NOT FOUND");
    }
    */

    return document.getElementById(id);
}

function getNodes(nme)
{
	return document.getElementsByName(nme);
}

function newNode(typ)
{
	return document.createElement(typ);
}

function checkRoomAvail (roomId) {
	
	(getNode("qty_" + roomId).value);

	var ret = true;

	var params = [];
	params[0] = 'room_id=' + roomId;
	params[1] = 'no_room=' + parseInt(getNode("qty_" + roomId).value);
	params = params.join("&");
	
	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function () {

		if (xhttp.readyState == 4 && xhttp.status == 200) {

			getNode('button_' + roomId).disabled = false;
			
			if (xhttp.responseText != '1') {
				ret = false;
				console.log(this.responseText);
				
				getNode('button_' + roomId).innerHTML = 'ROOM UNAVAILABLE';
				getNode('button_' + roomId).classList.remove('booked');

			} else {

				bookRoom(roomId);
				getNode('button_' + roomId).innerHTML = '<i class="ion-ios-checkmark-empty"></i> BOOKED';
				getNode('button_' + roomId).classList.add('booked');
			}
			

		} else {

			getNode('button_' + roomId).disabled = true;

		}
	};

	xhttp.open('POST', '../class.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send(params);

	
	return ret;
}

function getRoom () {
    
    let id = this.dataset.id;

    checkRoomAvail(id);

    //console.log(id);
}

function bookRoom(rmTypId)
{
	var frm = getNode("frmIndexCore");
	var qty = getNode("qty_" + rmTypId).value;

	var cellId = getNode("room_type_id_" + rmTypId,true);
	var cellQty = getNode("room_type_qty_" + rmTypId,true);

	if (cellId == null && cellQty == null) {
		var eleName = newNode("input");
		eleName.type = "hidden";
		eleName.id = "room_type_name_" + rmTypId;
		eleName.name = "room_type_name[]";
		eleName.value = getNode("name_" + rmTypId).value;
		frm.appendChild(eleName);

		var eleId = newNode("input");
		eleId.type = "hidden";
		eleId.id = "room_type_id_" + rmTypId;
		eleId.name = "room_type_id[]";
		eleId.value = rmTypId;
		frm.appendChild(eleId);

		var eleQty = newNode("input");
		eleQty.type = "hidden";
		eleQty.id = "room_type_qty_" + rmTypId;
		eleQty.name = "room_type_qty[]";
		eleQty.value = getNode("qty_" + rmTypId).value;
		frm.appendChild(eleQty);

		var elePrc = newNode("input");
		elePrc.type = "hidden";
		elePrc.id = "room_type_prc_" + rmTypId;
		elePrc.name = "room_type_prc[]";
		elePrc.value = getNode("prc_" + rmTypId).value;
		frm.appendChild(elePrc);

		var eleAmt = newNode("input");
		eleAmt.type = "hidden";
		eleAmt.id = "room_type_amt_" + rmTypId;
		eleAmt.name = "room_type_amt[]";
		eleAmt.value = (getNode("amt_" + rmTypId).value * qty).toFixed(2);
		frm.appendChild(eleAmt);
	} else {
		eleQty = getNode("room_type_qty_" + rmTypId);
		eleQty.value = getNode("qty_" + rmTypId).value;

		eleAmt = getNode("room_type_amt_" + rmTypId);
		eleAmt.value = (getNode("amt_" + rmTypId).value * qty).toFixed(2);
	}

	updBkgSumry();
}

function delBkgRow(rmTypId)
{
	let frm = getNode("frmIndexCore");
    let roomTypeId = getNode("room_type_id_" + rmTypId).value;

	frm.removeChild(getNode("room_type_name_" + rmTypId));
	frm.removeChild(getNode("room_type_id_" + rmTypId));
	frm.removeChild(getNode("room_type_qty_" + rmTypId));
	frm.removeChild(getNode("room_type_prc_" + rmTypId));
	frm.removeChild(getNode("room_type_amt_" + rmTypId));

	getNode('button_' + rmTypId).innerHTML = 'BOOK';
	getNode('button_' + rmTypId).classList.remove('booked');

	updBkgSumry();
}

function updBkgSumry()
{
	let bkgDtls = getNode("bkgDtls");
	while (bkgDtls.childNodes.length > 0)
		bkgDtls.removeChild(bkgDtls.childNodes[bkgDtls.childNodes.length - 1]);
	
	let rmTypIds = getNodes("room_type_id[]");
	let rmTypQtys = getNodes("room_type_qty[]");
	let rmTypPrcs = getNodes("room_type_prc[]");
	let rmTypAmts = getNodes("room_type_amt[]");
	ttlAmt = 0.00;

	for (let i = 0; i < rmTypIds.length; i++) {
		rmTypId = rmTypIds[i].value;
		rmTypQty = rmTypQtys[i].value;
		rmTypPrc = rmTypPrcs[i].value;
		rmTypAmt = rmTypAmts[i].value;
		ttlAmt += parseFloat(rmTypAmt);

		let tr = newNode("tr");
		tr.id = "bkgRow_" + i;
		bkgDtls.appendChild(tr);

		let td3 = newNode("td");
		td3.innerHTML = getNode("name_" + rmTypId).value;
		tr.appendChild(td3);

		let td5 = newNode("td");
		td5.style.textAlign = "center";
		td5.innerHTML = rmTypQty;
		tr.appendChild(td5);

		let td7 = newNode("td");
		td7.style.textAlign = "right";
		td7.innerHTML = rmTypAmt;
		tr.appendChild(td7);

		let td8 = newNode("td");
		let del = newNode("button");
		del.type = "button";
		del.setAttribute("class", "btn btn-xs");

		del.innerHTML = "<i class='ion-ios-close'></i>";
		del.setAttribute("data-id",rmTypId);
		del.onclick = function() {delBkgRow(this.getAttribute("data-id"));};
		td8.appendChild(del);
		tr.appendChild(td8);
	}

	getNode("bkgTtl").innerHTML = ttlAmt.toFixed(2);
}

let btnUp = document.querySelectorAll('.count-up');
btnUp.forEach(btn => btn.addEventListener('click', function(){
	const id = this.id;
	
	let input = parseInt(getNode("qty_" + id).value);
	input++;
	getNode("qty_" + id).value = input;
	console.log(input);
}))

let btnDown = document.querySelectorAll('.count-down');
btnDown.forEach(btn => btn.addEventListener('click', function(){
	const id = this.id;
	let input = parseInt(getNode("qty_" + id).value);

	if (input <= 1) return;

	input--;
	getNode("qty_" + id).value = input;
	console.log(input);
}))

