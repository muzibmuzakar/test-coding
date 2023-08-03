<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Laporan Profit / Loss') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="my-4">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded"
                            onclick="exportToExcel()">Export to Excel</button>
                    </div>

                    <div class="relative overflow-x-auto py-4">
                        <table id="laporanTable" class="table-auto text-sm text-left text-gray-500">
                            <thead class="text-gray-700 capitalize bg-gray-100">
                                <tr>
                                    <th></th>
                                    <th scope="col" class="px-6 py-2">
                                        <input type="month" id="tgl"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                                            placeholder="Tanggal">
                                    </th>
                                    <th scope="col" class="px-6 py-2">
                                        <input type="month" id="tglB"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                                            placeholder="Tanggal">
                                    </th>
                                    <th scope="col" class="px-6 py-2">
                                        <input type="month" id="tglC"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full"
                                            placeholder="Tanggal">
                                    </th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th scope="col">
                                        <span id="selectedMonth" class="hidden"></span>
                                    </th>
                                    <th scope="col">
                                        <span id="selectedMonthB" class="hidden"></span>
                                    </th>
                                    <th scope="col">
                                        <span id="selectedMonthC" class="hidden"></span>
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="col" class="px-6 py-2">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-2">
                                        Amount
                                    </th>
                                    <th scope="col" class="px-6 py-2">
                                        Amount
                                    </th>
                                    <th scope="col" class="px-6 py-2">
                                        Amount
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        Salary
                                    </th>
                                    <td class="px-6 py-4">
                                        <span id="totalCredit">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="totalCreditB">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="totalCreditC">0</span>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        Other Income
                                    </th>
                                    <td class="px-6 py-4">
                                        <span id="otherIncome">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="otherIncomeB">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="otherIncomeC">0</span>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        Total Income
                                    </th>
                                    <td class="px-6 py-4">
                                        <span id="totalIncome">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="totalIncomeB">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="totalIncomeC">0</span>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        Family Expanse
                                    </th>
                                    <td class="px-6 py-4">
                                        <span id="familyExpanse">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="familyExpanseB">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="familyExpanseC">0</span>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        Transport Expense
                                    </th>
                                    <td class="px-6 py-4">
                                        <span id="transportExpense">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="transportExpenseB">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="transportExpenseC">0</span>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        Meal Expense
                                    </th>
                                    <td class="px-6 py-4">
                                        <span id="mealExpense">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="mealExpenseB">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="mealExpenseC">0</span>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        Total Expense
                                    </th>
                                    <td class="px-6 py-4">
                                        <span id="totalExpense">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="totalExpenseB">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="totalExpenseC">0</span>
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        Net Income
                                    </th>
                                    <td class="px-6 py-4">
                                        <span id="netIncome">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="netIncomeB">0</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span id="netIncomeC">0</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Fungsi untuk mengatur nilai default ke bulan sekarang
            function setDefaultMonth() {
                var now = new Date();
                var year = now.getFullYear();
                var month = now.getMonth() + 1;

                // Konversi bulan dan tahun ke format "YYYY-MM" yang diharapkan oleh input month
                var formattedMonth = year + '-' + (month < 10 ? '0' : '') + month;
                var formattedMonthB = year + '-' + (month < 10 ? '0' : '') + (month - 1);
                var formattedMonthC = year + '-' + (month < 10 ? '0' : '') + (month - 2);

                // Set nilai default pada input tanggal (input month)
                $('#tgl').val(formattedMonth);
                $('#tglB').val(formattedMonthB);
                $('#tglC').val(formattedMonthC);
                $('#selectedMonth').text(formattedMonth);
                $('#selectedMonthB').text(formattedMonthB);
                $('#selectedMonthC').text(formattedMonthC);
            }

            // Panggil fungsi setDefaultMonth saat halaman pertama kali dimuat
            setDefaultMonth();

            // Pertama kali, panggil fungsi calculateReport dengan nilai bulan saat ini
            var currentMonth = new Date().getMonth();
            var currentYear = new Date().getFullYear();
            calculateReport(currentMonth);
            calculateReportB(currentMonth-1);
            calculateReportB(currentMonth-2);
            
            // Event handler untuk peristiwa perubahan nilai input tanggal
            $('#tgl').change(function() {
                // Mendapatkan nilai bulan yang dipilih dari input tanggal
                var selectedMonth = new Date($(this).val()).getMonth();
                var selectedYears = new Date($(this).val()).getFullYear();
                $('#selectedMonth').text((selectedMonth+1)+'-'+selectedYears);

                // Panggil fungsi calculateReport dengan nilai bulan yang dipilih
                calculateReport(selectedMonth);
            });
            
            $('#tglB').change(function() {
                var selectedMonth = new Date($(this).val()).getMonth();
                var selectedYears = new Date($(this).val()).getFullYear();
                $('#selectedMonthB').text((selectedMonth+1)+'-'+selectedYears);
                calculateReportB(selectedMonth);
            });
            
            $('#tglC').change(function() {
                var selectedMonth = new Date($(this).val()).getMonth();
                var selectedYears = new Date($(this).val()).getFullYear();
                $('#selectedMonthC').text((selectedMonth+1)+'-'+selectedYears);
                calculateReportC(selectedMonth);
            });

            // Fungsi untuk menghitung dan memperbarui laporan
            function calculateReport(month) {
                // Menghitung total kredit
                var totalCredit = 0;
                @foreach ($salary as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) { // Cek apakah bulan transaksi adalah Juli (nilai 7)
                        totalCredit += {{ $transaksi->credit }};
                    }
                @endforeach

                // Menampilkan total kredit di elemen dengan ID totalCredit
                $('#totalCredit').text(totalCredit);

                // Menghitung total Other Income
                var totalOtherIncome = 0;
                @foreach ($otherIncome as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) {
                        totalOtherIncome += {{ $transaksi->credit }};
                    }
                @endforeach

                // Menampilkan total other income di elemen dengan ID otherIncome
                $('#otherIncome').text(totalOtherIncome);

                // menhitung total Income
                var totalIncome = totalCredit + totalOtherIncome;
                $('#totalIncome').text(totalIncome);

                // Menghitung total family expense
                var totalfamilyExpanse = 0;
                @foreach ($familyExpanse as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) {
                        totalfamilyExpanse += {{ $transaksi->debit }};
                    }
                @endforeach

                // Menampilkan total family expanse di elemen dengan ID familyExpanse
                $('#familyExpanse').text(totalfamilyExpanse);

                // Menghitung total transport expense
                var totaltransportExpense = 0;
                @foreach ($transportExpense as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) {
                        totaltransportExpense += {{ $transaksi->debit }};
                    }
                @endforeach

                // Menampilkan total transport expanse di elemen dengan ID transportExpanse
                $('#transportExpense').text(totaltransportExpense);

                // Menghitung total meal expense
                var totalmealExpense = 0;
                @foreach ($mealExpense as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) {
                        totalmealExpense += {{ $transaksi->debit }};
                    }
                @endforeach

                // Menampilkan total meal expense di elemen dengan ID mealExpanse
                $('#mealExpense').text(totalmealExpense);

                // menhitung total expense
                var totalExpense = totalfamilyExpanse + totaltransportExpense + totalmealExpense;

                // Menampilkan total expense di elemen dengan ID totalExpanse
                $('#totalExpense').text(totalExpense);

                // menhitung net income
                var netIncome = totalIncome - totalExpense;

                // Menampilkan net income di elemen dengan ID netIncome
                $('#netIncome').text(netIncome);
            }

            function calculateReportB(month) {
                // Menghitung total kredit
                var totalCreditB = 0;
                @foreach ($salary as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) { // Cek apakah bulan transaksi adalah Juli (nilai 7)
                        totalCreditB += {{ $transaksi->credit }};
                    }
                @endforeach

                // Menampilkan total kredit di elemen dengan ID totalCredit
                $('#totalCreditB').text(totalCreditB);

                // Menghitung total Other Income
                var totalOtherIncomeB = 0;
                @foreach ($otherIncome as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) {
                        totalOtherIncomeB += {{ $transaksi->credit }};
                    }
                @endforeach

                // Menampilkan total other income di elemen dengan ID otherIncome
                $('#otherIncomeB').text(totalOtherIncomeB);

                // menhitung total Income
                var totalIncomeB = totalCreditB + totalOtherIncomeB;
                $('#totalIncomeB').text(totalIncomeB);

                // Menghitung total family expense
                var totalfamilyExpanseB = 0;
                @foreach ($familyExpanse as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) {
                        totalfamilyExpanseB += {{ $transaksi->debit }};
                    }
                @endforeach

                // Menampilkan total family expanse di elemen dengan ID familyExpanse
                $('#familyExpanseB').text(totalfamilyExpanseB);

                // Menghitung total transport expense
                var totaltransportExpenseB = 0;
                @foreach ($transportExpense as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) {
                        totaltransportExpenseB += {{ $transaksi->debit }};
                    }
                @endforeach

                // Menampilkan total transport expanse di elemen dengan ID transportExpanse
                $('#transportExpenseB').text(totaltransportExpenseB);

                // Menghitung total meal expense
                var totalmealExpenseB = 0;
                @foreach ($mealExpense as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) {
                        totalmealExpenseB += {{ $transaksi->debit }};
                    }
                @endforeach

                // Menampilkan total meal expense di elemen dengan ID mealExpanse
                $('#mealExpenseB').text(totalmealExpenseB);

                // menhitung total expense
                var totalExpenseB = totalfamilyExpanseB + totaltransportExpenseB + totalmealExpenseB;

                // Menampilkan total expense di elemen dengan ID totalExpanse
                $('#totalExpenseB').text(totalExpenseB);

                // menhitung net income
                var netIncomeB = totalIncomeB - totalExpenseB;

                // Menampilkan net income di elemen dengan ID netIncome
                $('#netIncomeB').text(netIncomeB);
            }

            function calculateReportC(month) {
                // Menghitung total kredit
                var totalCreditC = 0;
                @foreach ($salary as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) { // Cek apakah bulan transaksi adalah Juli (nilai 7)
                        totalCreditC += {{ $transaksi->credit }};
                    }
                @endforeach

                // Menampilkan total kredit di elemen dengan ID totalCredit
                $('#totalCreditC').text(totalCreditC);

                // Menghitung total Other Income
                var totalOtherIncomeC = 0;
                @foreach ($otherIncome as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) {
                        totalOtherIncomeC += {{ $transaksi->credit }};
                    }
                @endforeach

                // Menampilkan total other income di elemen dengan ID otherIncome
                $('#otherIncomeC').text(totalOtherIncomeC);

                // menhitung total Income
                var totalIncomeC = totalCreditC + totalOtherIncomeC;
                $('#totalIncomeC').text(totalIncomeC);

                // Menghitung total family expense
                var totalfamilyExpanseC = 0;
                @foreach ($familyExpanse as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) {
                        totalfamilyExpanseC += {{ $transaksi->debit }};
                    }
                @endforeach

                // Menampilkan total family expanse di elemen dengan ID familyExpanse
                $('#familyExpanseC').text(totalfamilyExpanseC);

                // Menghitung total transport expense
                var totaltransportExpenseC = 0;
                @foreach ($transportExpense as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) {
                        totaltransportExpenseC += {{ $transaksi->debit }};
                    }
                @endforeach

                // Menampilkan total transport expanse di elemen dengan ID transportExpanse
                $('#transportExpenseC').text(totaltransportExpenseC);

                // Menghitung total meal expense
                var totalmealExpenseC = 0;
                @foreach ($mealExpense as $transaksi)
                    var tanggal = new Date("{{ $transaksi->tanggal }}");
                    if (tanggal.getMonth() === month) {
                        totalmealExpenseC += {{ $transaksi->debit }};
                    }
                @endforeach

                // Menampilkan total meal expense di elemen dengan ID mealExpanse
                $('#mealExpenseC').text(totalmealExpenseC);

                // menhitung total expense
                var totalExpenseC = totalfamilyExpanseC + totaltransportExpenseC + totalmealExpenseC;

                // Menampilkan total expense di elemen dengan ID totalExpanse
                $('#totalExpenseC').text(totalExpenseC);

                // menhitung net income
                var netIncomeC = totalIncomeC - totalExpenseC;

                // Menampilkan net income di elemen dengan ID netIncome
                $('#netIncomeC').text(netIncomeC);
            }
        });
        // function untuk export file excel
        function exportToExcel() {
            // Ambil tabel yang ingin dieksport berdasarkan ID atau class (misalnya, tabel memiliki ID "laporanTable")
            var table = document.getElementById('laporanTable');
            $("#selectedMonth").removeClass("hidden");
            $("#selectedMonthB").removeClass("hidden");
            $("#selectedMonthC").removeClass("hidden");

            // Buat variabel untuk menyimpan data yang akan dieksport
            var data = [];

            // Loop untuk setiap baris tabel (kecuali baris pertama yang merupakan header)
            for (var i = 1; i < table.rows.length; i++) {
                var rowData = [];
                var row = table.rows[i];

                // Loop untuk setiap sel dalam baris
                for (var j = 0; j < row.cells.length; j++) {
                    rowData.push(row.cells[j].innerText);
                }

                // Tambahkan data baris ke data utama
                data.push(rowData);
            }

            // Buat objek Workbook baru dari data tabel
            var wb = XLSX.utils.book_new();
            var ws = XLSX.utils.aoa_to_sheet(data);
            XLSX.utils.book_append_sheet(wb, ws, "Laporan");

            // Export data ke file Excel
            var wbout = XLSX.write(wb, {
                bookType: 'xlsx',
                type: 'binary'
            });

            // Fungsi untuk membuat blob dari data dan membuat link untuk mengunduh file
            function stringToUint8Array(s) {
                var buf = new ArrayBuffer(s.length);
                var view = new Uint8Array(buf);
                for (var i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
                return buf;
            }

            var blob = new Blob([stringToUint8Array(wbout)], {
                type: "application/octet-stream"
            });
            var url = URL.createObjectURL(blob);

            // Buat link unduh Excel dan klik otomatis
            var a = document.createElement("a");
            a.href = url;
            a.download = "laporan-profit-loss.xlsx";
            a.click();

            // Hapus objek URL setelah selesai
            setTimeout(function() {
                URL.revokeObjectURL(url);
            }, 100);
            
            $("#selectedMonth").addClass("hidden");
            $("#selectedMonthB").addClass("hidden");
            $("#selectedMonthC").addClass("hidden");
        }
    </script>
</x-app-layout>
