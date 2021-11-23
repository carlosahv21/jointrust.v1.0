/*

=========================================================
* Jointrust*
=========================================================

* Copyright 2021

* Designed and coded by Ing. Carlos Hernandez

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal. Contact us if you want to remove it.

*/

let deleteAlert = document.getElementsByClassName('deleteAlert');

for(let con of deleteAlert) {
    console.log(deleteAlert);
    con.addEventListener("click", destroy)
  }


function destroy(event) {
    alert('si');
} 