// // function AjaxCallBack( url ) {
// //     $.ajax({
// //         url: url,
// //         method: "GET",
// //     }).done(function( data ) {
// //         const selectActor = document.createElement("SELECT");                       // Create a <p> element
// //
// //         console.log('ok');
// //     });
// // }
// window.getElementById('valide-time');
// const $actor = document.getElementById('actor');
//
// window.addEventListener('click', function (e) {
//     e.preventDefault();
//     e.stopPropagation();
//     $.ajax({
//         url: "{{ app.request.getSchemeAndHttpHost() ~ path('get_actor') }}",
//         method: "GET",
//     }).done(function( datas ) {
//         data = JSON.parse(datas);
//         console.log(data);
//         const $selectActor = document.createElement("SELECT");
//         $selectActor.setAttribute('name',"actor");
//
//         for (let i = 0; i < data.length; i++){
//             let $opt = document.createElement("OPTION");
//             $opt.setAttribute('value',data[i].id);
//             let t = document.createTextNode(data[i].name);
//             $opt.appendChild(t);
//             $selectActor.appendChild($opt)
//         }
//
//         $actor.appendChild($selectActor)
//         // Create a <p> element
//
//     });
// });
// // console.log("ok");
// // AjaxCallBack("{{ app.request.getSchemeAndHttpHost() ~ path('get_actors') }}");
