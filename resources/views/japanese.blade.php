<html lang="en">

<head>
  <title>Invoice</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {

        extend: {
          fontFamily: {
            mincho: ["Zen Old Mincho", "serif"],
          },
          borderWidth: {
            '0.5': '0.5px',
          }
        }
      }
    }
  </script>
</head>

<body>
  <div class="bg-white font-mincho">
    <div class="px-14 mx-auto mt-2">
      <!-- Header -->
      <div class="flex px-4 bg-white space-x-1">
        <div class="flex-1 flex items-center">
  
        </div>
        <div class="flex-1 flex items-center justify-center p-6">
          <p class="text-[22px] tracking-wide text-zinc-950 text-center">
            &nbsp;&nbsp;&nbsp;&nbsp;注&nbsp;&nbsp;&nbsp;文&nbsp;&nbsp;&nbsp;書</p>
        </div>
        <div class="flex-1  px-4 py-0 text-[10px] flex items-end justify-end ">
          <div class="mr-2">
            <p class="order-number text-right font-thin">注文番号 O2021-000-000</p>
            <p class="order-date text-right">
              2024 年 6 月 18 日
            </p>
          </div>
        </div>
      </div> <!-- Header End -->

      <!-- Trader Name -->
      <div class="flex bg-white px-4 pb-4 pt-2 space-x-4">
        <div class="basis-6/12 ">
          <p
            class="trader-name text-base leading-8 border-l-0 border-r-0 border-t-0 border-b border-0.5 border-zinc-500 px-2 inline-block">
            {{$companyName}}<span class="ml-8">御中</span>
          </p>
          <p class="px-2 mt-4 text-[11px]">
            下記の通り注文お請け致します。
          </p>
          <p class="px-2 text-[11px]">
            お引き受けの場合は、注文請書をご提出ください。
          </p>
          <div class="flex mt-8 border border-slate-950 mx-2">
            <div
              class="mr-8 basis-5/12 border border-l-0 border-t-0 border-b-0 border-r-1 border-0.5 border-zinc-500 dark:border-white/10 dark:text-white bg-gray-200">
              <p class="text-sm text-center mt-1">合計金額</p>
              <p class="text-[10px] text-center pb-1">(消費税別)</p>
            </div>
            <div class="flex basis-7/12 items-center justify-center py-2">
              <h1 class="text-xl font-light">¥ 2,280,000 -</h1>
            </div>
          </div>
          <p class="mt-1 text-[10px] text-right mr-1">消費税 &nbsp; ¥ 2,280,000 - は別途お支払いします。</p>
        </div>
        <div class="basis-6/12 flex flex-col justify-start items-end pr-6">
          <div>
            <img src="{{ public_path('/img/logo.png') }}" class="h-auto w-[150px] mt-6" />
          </div>
          <div class="my-3 text-right">
            <p class="text-[11px] leading-4">〒652-0815&nbsp;&nbsp; 神戸市兵庫区三川口町 2-4-8</p>
            <p class="text-[11px] leading-4">TEL 078-000-0000 / FAX 078-000-0000</p>
          </div>
          <div class="flex space-x-6 items-center">
            <div>
             <p class="text-[10px]">担当者</p>
            </div>
            <div>
              <p class="text-[11px]">サイード　アハマド</p>
            </div>
              <div class="flex h-4 w-4 items-center justify-center rounded-full border border-0.5 border-gray-400">
                <p class="text-[10px] text-gray-400">印</p>
              </div>
          </div>
        </div>
      </div> <!-- End Trader Name -->

      <!-- Construction Information -->
      <div class="bg-white px-4 mt-2 ">
        <div class="flex flex-col items-start  mx-2 border border-slate-950">
          <!-- row 1 -->
          <div class="flex w-full">
            <div
              class=" border border-l-0 border-t-0 border-b-0 border-r-1 border-0.5  border-zinc-500 dark:border-white/10 dark:text-white"
              style="flex-basis: 18%;">
              <p class="py-2 text-[11px] leading-6 text-center bg-gray-200 tracking-widest">工事名称</p>
            </div>
            <div class="flex items-center text-xs text-left pl-4 tracking-widest" style="flex-basis: 82%;">
              <p class="pl-2"> (仮称) 神戸駅前大晶ビル新築工事 </p>
            </div>
          </div>
          <!-- row 2 -->
          <div class="flex w-full">
            <div
              class=" border border-l-0 border-t-1 border-b-0 border-r-1 border-0.5  border-zinc-500 dark:border-white/10 dark:text-white"
              style="flex-basis: 18%;">
              <p class="py-2 text-[11px] leading-6 text-center bg-gray-200 tracking-widest">施工納品場所</p>
            </div>
            <div
              class="flex items-center text-xs text-left pl-4 tracking-widest border border-l-0 border-t-1 border-b-0 border-r-0 border-0.5  border-zinc-500 dark:border-white/10 dark:text-white"
              style="flex-basis: 82%;">
              <p class="pl-2"> 東京都港区麻布台1丁目9番地12号 </p>
            </div>
          </div>

          <div class="flex w-full">
            <div
              class="basis-3/12  border border-l-0 border-t-1 border-b-0 border-r-1 border-0.5  border-zinc-500 dark:border-white/10 dark:text-white"
              style="flex-basis: 18%;">
              <p class="py-2 text-[11px] leading-6 text-center bg-gray-200 tracking-widest">納期</p>
            </div>
            <div
              class="flex items-center basis-9/12 text-xs text-left pl-4 tracking-widest border border-l-0 border-t-1 border-b-0 border-r-0 border-0.5  border-zinc-500 dark:border-white/10 dark:text-white"
              style="flex-basis: 82%;">
              <p class="pl-2"> 2021 年 8 月 10 日 ~ 2021 年 10 月 15 日 </p>
            </div>
          </div>
          <div class="flex justify-center w-full">
            <div
              class="basis-3/12 bg-gray-200 border border-l-0 border-t-1 border-b-0 border-r-1 border-0.5  border-zinc-500 dark:border-white/10 dark:text-white"
              style="flex-basis: 18%;">
              <p class="py-2 text-[11px] leading-6 text-center bg-gray-200 tracking-widest mt-8">支払条件</p>
            </div>
            <div
              class="flex flex-col items-center basis-9/12 text-left pl-4 tracking-widest border border-l-0 border-t-1 border-b-0 border-r-0 border-0.5  border-zinc-500 dark:border-white/10 dark:text-white"
              style="flex-basis: 82%;">
              <p class="pl-2 flex w-full mt-3 text-xs">毎月15日締め翌月15日払い</p>
              <p class="pl-2 flex w-full text-xs">現金30%、120日手形 70% </p>
              <p class="pl-2 flex w-full text-[10px] mt-3">※出来高請求の支払いは10%を保留します。</p>
              <p class="pl-2 flex w-full text-[10px] mb-3">※最終の出来高請求とともに保留金を解除し、お支払いします。</p>
            </div>
          </div>
        </div>
      </div><!-- End Construction Information -->
      <!-- Table -->
      <div class="bg-white px-4 pt-4 pb-2 m-2">
        <table class="w-full border border-slate-950">
          <tr class="border-b border-zinc-500 dark:border-white/10">
            <td
              class="text-[10px] text-center tracking-widest py-1 leading-4 border-r border-zinc-500 dark:border-white/10 w-[4%]">
              no
            </td>
            <td
              class="text-[10px] text-center tracking-widest py-1 border-r border-zinc-500 dark:border-white/10 w-[23%]">
              工種名 / 名称
            </td>
            <td
              class="text-[10px] text-center tracking-widest py-1 border-r border-zinc-500 dark:border-white/10 w-[30%]">
              内&nbsp;&nbsp;容
            </td>
            <td
              class="text-[10px] text-center tracking-widest py-1 border-r border-zinc-500 dark:border-white/10 w-[8%]">
              数&nbsp;&nbsp;量
            </td>
            <td
              class="text-[10px] text-center tracking-widest py-1 border-r border-zinc-500 dark:border-white/10 w-[5%]">
              単位
            </td>
            <td
              class="text-[10px] text-center tracking-widest py-1 border-r border-zinc-500 dark:border-white/10 w-[8%]">
              単&nbsp;&nbsp;価
            </td>
            <td class="text-[10px] text-center tracking-widest py-1 border-zinc-500 dark:border-white/10 w-[13%]">
              金&nbsp;&nbsp;額
            </td>
          </tr>
          <tr class="border-b border-zinc-500 dark:border-white/10">
            <td class="text-[11px] text-center py-2 leading-5 border-r border-zinc-500 dark:border-white/10">
              1
            </td>
            <td class="text-[11px] text-left py-2 pl-2 border-r border-zinc-500 dark:border-white/10">
              特殊基礎工事
            </td>
            <td class="text-[11px] text-left py-2 pl-2 border-r border-zinc-500 dark:border-white/10">
              杭異形棒鋼
            </td>
            <td class="text-[11px] text-right py-2 pr-2 border-r border-zinc-500 dark:border-white/10">
              1
            </td>
            <td class="text-[11px] text-center py-2 border-r border-zinc-500 dark:border-white/10">
              式
            </td>
            <td class="text-[10px] text-right py-2 pr-2 border-r border-zinc-500 dark:border-white/10">
              2,280,000
            </td>
            <td class="text-[11px] text-right py-2 pr-2 border-zinc-500 dark:border-white/10">
              2,280,000
            </td>
          </tr>
          <tr class="border-b border-zinc-500 dark:border-white/10">
            <td
              class="text-[11px] text-center py-2 leading-5 tracking-widest py-1 border-r border-zinc-500 dark:border-white/10">
              2
            </td>
            <td class="text-[11px] text-left py-2 pl-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-left py-2 pl-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-right py-2 pr-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-center py-2 border-r border-zinc-500 dark:border-white/10">

            </td>
            <td class="text-[10px] text-right py-2 pr-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-right py-2 pr-2 border-zinc-500 dark:border-white/10 ">

            </td>
          </tr>
          <tr class="border-b border-zinc-500 dark:border-white/10">
            <td
              class="text-[11px] text-center py-2 leading-5 tracking-widest py-1 border-r border-zinc-500 dark:border-white/10">
              3
            </td>
            <td class="text-[11px] text-left py-2 pl-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-left py-2 pl-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-right py-2 pr-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-center py-2 border-r border-zinc-500 dark:border-white/10">

            </td>
            <td class="text-[10px] text-right py-2 pr-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-right py-2 pr-2 border-zinc-500 dark:border-white/10 ">

            </td>
          </tr>
          <tr class="border-b border-zinc-500 dark:border-white/10">
            <td
              class="text-[11px] text-center py-2 leading-5 tracking-widest py-1 border-r border-zinc-500 dark:border-white/10">
              4
            </td>
            <td class="text-[11px] text-left py-2 pl-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-left py-2 pl-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-right py-2 pr-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-center py-2 border-r border-zinc-500 dark:border-white/10">

            </td>
            <td class="text-[10px] text-right py-2 pr-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-right py-2 pr-2 border-zinc-500 dark:border-white/10 ">

            </td>
          </tr>
          <tr class="border-b border-zinc-500 dark:border-white/10">
            <td
              class="text-[11px] text-center py-2 leading-5 tracking-widest py-1 border-r border-zinc-500 dark:border-white/10">
              5
            </td>
            <td class="text-[11px] text-left py-2 pl-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-left py-2 pl-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-right py-2 pr-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-center py-2 border-r border-zinc-500 dark:border-white/10">

            </td>
            <td class="text-[10px] text-right py-2 pr-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-right py-2 pr-2 border-zinc-500 dark:border-white/10 ">

            </td>
          </tr>
          <tr>
            <td
              class="text-[11px] text-center py-2 leading-5 tracking-widest py-1 border-r border-zinc-500 dark:border-white/10">

            </td>
            <td class="text-[11px] text-left py-2 pl-2 border-r border-zinc-500 dark:border-white/10 ">
              法定福利費
            </td>
            <td class="text-[11px] text-left py-2 pl-2 border-r border-zinc-500 dark:border-white/10 ">
              ※契約金雞に含む
            </td>
            <td class="text-[11px] text-right py-2 pr-2 border-r border-zinc-500 dark:border-white/10 ">
                1
            </td>
            <td class="text-[11px] text-center py-2 border-r border-zinc-500 dark:border-white/10">
              式
            </td>
            <td class="text-[10px] text-right py-2 pr-2 border-r border-zinc-500 dark:border-white/10 ">

            </td>
            <td class="text-[11px] text-right py-2 pr-2 border-zinc-500 dark:border-white/10 ">
             
            </td>
          </tr>
        </table>
        <p
          class="trader-name text-[11px] leading-6 border-l-0 border-r-0 border-t-0 border-b border-0.5 border-zinc-500 ml-7 mt-2 px-1 inline-block">
          安全对策協力費 <span class="ml-4 mr-1">¥4,560 -</span>(請負代金 x 0.2%) を本工事1件に対し、 安全対策協力費を徴収させていただきます。
        </p>
      </div><!-- End Table -->
      <!-- remark -->
      <div class="bg-white px-4 ">
        <div class="flex flex-col items-start mx-2 border border-slate-950">
          <div class="flex w-full">
            <div
              class="border border-l-0 border-t-0 border-b-0 border-r-1 border-0.5  border-zinc-500 dark:border-white/10 dark:text-white"
              style="flex-basis: 18%;">
              <p class="py-4 text-[11px] text-center tracking-widest">備&nbsp;&nbsp;考</p>
            </div>
            <div class="flex items-center text-xs text-left pl-2 tracking-widest" style="flex-basis: 82%;">
              <p class="pl-2"> </p>
            </div>
          </div>
        </div>
        <p class="text-[10px] ml-2 mt-1">&#x25cf; 詳細は、2021 年 6 月 15 日付　1 枚の見積書を参考に係員の指示通りとします。</p>

        <div class="text-[10px] mt-3 mx-2 py-2 px-3 border border-slate-950">
          <p class="text-[10px]"><span
              class="text-[2px] mr-1 inline-block align-middle">&#x25cf;</span>差額が発生した場合は、その都度、協議させていただきます。</p>
          <p class="text-[10px]">
            <span class="text-[2px] mr-1 inline-block align-middle">&#x25cf;</span>荷造費および受渡場所へ到着までの運賃その他の諸掛は、当方の負担とします。
          </p>
          <p class="text-[10px]">
            <span
              class="text-[2px] mr-1 inline-block align-middle">&#x25cf;</span>工程(納入)延期その他の事由により竣工(完納)の見込みのないものと貴社において認めた時は、納期期間内であっても本注文を取消され<br><span
              class="ml-1">これによって生ずる損害の全ては当方において負担します。</span>
          </p>
          <p class="text-[10px]">
            <span class="text-[2px] mr-1 inline-block align-middle">&#x25cf;</span>立替払い等がある場合は、支払金額と相殺することがあります。
          </p>
          <p class="text-[10px]">
            <span class="text-[2px] mr-1 inline-block align-middle">&#x25cf;</span>現場作業後、次工程に渡す前に必ず自主検査を行い、記録を提出してください。
          </p>
        </div>

      </div> <!-- End remark -->

    </div>
  </div>


</body>

</html>
