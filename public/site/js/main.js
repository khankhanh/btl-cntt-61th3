const $ = document.querySelectorAll.bind(document);
const dataBxh = [{
        "name": "Bước qua chân nhau",
        "author": "Vũ",
        "type": "VN"
    },
    {
        "name": "Bước qua đầu nhau",
        "author": "Vũ 2",
        "type": "VN"
    },
    {
        "name": "Bước qua đầu nhau",
        "author": "Vũ 2",
        "type": "VN"
    },
    {
        "name": "Bước qua Hàn Xẻng 1",
        "author": "Vũ 2",
        "type": "HQ"
    },
    {
        "name": "Bước qua Hàn Xẻng 2",
        "author": "Vũ 2",
        "type": "HQ"
    }
];


function BXH_click(e, params) {
    const bxh_data = $("#bxh_data")[0];
    const arr_click = $(".btn_tab_select > a");

    for (let i = 0; i < arr_click.length; i++) { // lặp qua 3 thẻ a : VN Aau Mỹ, Hàn Xẻng
        for (let j = 0; j < arr_click[i].classList.length; j++) // kiểm tra từng thẻ a xem có class acitve
            if (arr_click[i].classList[j] == 'active') // nếu có thì xóa class active
                arr_click[i].classList.remove("active");
    }

    e.classList.add("active");

    // xử lý màu


    // xóa đi các thẻ li
    bxh_data.innerText = '';
    // duyệt qua tất cả dữ liệu 
    for (let index = 0; index < dataBxh.length; index++) {
        if (dataBxh[index].type == params) { // kiểm tra type == params
            const element = dataBxh[index]; // lấy giá trị của giữ liệu trong mảng
            let node = `<li>
        <span style="    float: left;
        width: 31px;
        color: #7a7a7a;
        height: 42px;
        margin-right: 10px;
        font-size: 20px;
        text-align: center;
        line-height: 42px;
        vertical-align: middle;" class="number special-2">${index}</span>
        <div class="info_data">

            <h3><a style="font-size: 14px;
                margin: 0 0 4px 0;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
                line-height: 1.3;
                width: 248px;" title="Bước Qua Nhau - Vũ" href="https://www.nhaccuatui.com/bai-hat/buoc-qua-nhau-vu.EdENCgJm9dAa.html" onclick="lt(['home','BXH','click','song','EdENCgJm9dAa','','Nhac Viet']);" ga="_gaq.push(['_trackEvent', 'TOP 20', 'Click', 'Top 20 Bai Hat Trang Chu Nhac Viet']);"
                    class="name_song">${element.name}</a></h3>
            <h4 style="margin-top: -15px;"><a style="    font-size: 12px;
                color: #a2a2a2;
                line-height: 15px; margin-top: -10px; " href="https://www.nhaccuatui.com/nghe-si-vu.html" class="name_singer" title="Tìm các bài hát, playlist, mv do ca sĩ Vũ trình bày" target="_blank">${element.author}</a></h4>

        </div>
        <!--span id="NCTCounter__7120388" class="icon_listen">0</span-->
    </li>`;
            node = new DOMParser().parseFromString(node, 'text/html'); // chuyển chuỗi về html
            console.log(node);
            // thêm vào con của thẻ ul
            // lấy thẻ li trong đoạn node đã đc convert
            bxh_data.appendChild(node.children[0].children[1].children[0]);
        }
    }
}