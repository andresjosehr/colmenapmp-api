<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        DB::select("INSERT INTO `plans` (`id`, `name`, `code`, `description`, `isapre_id`, `base_factor`, `plan_type_id`, `ambulatory_percentage`, `hospitable_percentage`, `urgency_percentage`, `annual_limit`, `regional`, `national`, `source`, `pdf`, `pdf_benefits`, `created_at`, `updated_at`) VALUES
            (1, 'CÉLTICO 26120', 'CLTC26120', NULL, 3, 4.73, 1, 90, 100, 90, 5000, 0, 1, 'queplan', 'CLTC26120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC26120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (2, 'CÉLTICO 25120', 'CLTC25120', NULL, 3, 4.58, 1, 90, 100, 90, 5000, 0, 1, 'queplan', 'CLTC25120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC25120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (3, 'CÉLTICO 24120', 'CLTC24120', NULL, 3, 4.32, 1, 90, 100, 90, 5000, 0, 1, 'queplan', 'CLTC24120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC24120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (5, 'CÉLTICO 23120', 'CLTC23120', NULL, 3, 4.07, 1, 90, 100, 90, 5000, 0, 1, 'queplan', 'CLTC23120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC23120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (6, 'CÉLTICO 22120', 'CLTC22120', NULL, 3, 3.84, 1, 90, 100, 90, 5000, 0, 1, 'queplan', 'CLTC22120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC22120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (8, 'CÉLTICO 21120', 'CLTC21120', NULL, 3, 3.63, 1, 90, 100, 90, 5000, 0, 1, 'queplan', 'CLTC21120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC21120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (9, 'JONICO 3 REG 20120', 'JNC20120', NULL, 3, 6.86, 1, 90, 100, 90, 8000, 1, 0, 'queplan', 'JNC20120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC20120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (10, 'CÉLTICO 20120', 'CLTC20120', NULL, 3, 3.42, 1, 90, 100, 90, 5000, 0, 1, 'queplan', 'CLTC20120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC20120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (11, 'CÉLTICO 19120', 'CLTC19120', NULL, 3, 3.29, 1, 90, 100, 90, 5000, 0, 1, 'queplan', 'CLTC19120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC19120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (12, 'JONICO 3 REG 19120', 'JNC19120', NULL, 3, 6.13, 1, 90, 100, 90, 8000, 1, 0, 'queplan', 'JNC19120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC19120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (16, 'CÉLTICO 18120', 'CLTC18120', NULL, 3, 3.16, 1, 90, 100, 90, 5000, 0, 1, 'queplan', 'CLTC18120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC18120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (21, 'CÉLTICO 17120', 'CLTC17120', NULL, 3, 3.04, 1, 90, 100, 90, 5000, 0, 1, 'queplan', 'CLTC17120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC17120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (23, 'JONICO 3 REG 18120', 'JNC18120', NULL, 3, 5.48, 1, 90, 100, 90, 8000, 1, 0, 'queplan', 'JNC18120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC18120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (36, 'CÉLTICO 16120', 'CLTC16120', NULL, 3, 2.92, 1, 90, 100, 90, 5000, 0, 1, 'queplan', 'CLTC16120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC16120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (55, 'JONICO 3 REG 17120', 'JNC17120', NULL, 3, 4.97, 1, 90, 100, 90, 8000, 1, 0, 'queplan', 'JNC17120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC17120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (58, 'CÉLTICO 15120', 'CLTC15120', NULL, 3, 2.81, 1, 90, 100, 90, 5000, 0, 1, 'queplan', 'CLTC15120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC15120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (61, 'JONICO 3 REG 16120', 'JNC16120', NULL, 3, 4.84, 1, 90, 100, 90, 8000, 1, 0, 'queplan', 'JNC16120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC16120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:02'),
            (104, 'JONICO 3 REG 15120', 'JNC15120', NULL, 3, 4.65, 1, 80, 100, 80, 8000, 1, 0, 'queplan', 'JNC15120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC15120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (129, 'ADRIATICO 16120', 'ADRT16120', NULL, 3, 7.51, 1, 80, 90, 80, 8000, 0, 0, 'queplan', 'ADRT16120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT16120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (130, 'ADRIATICO 15120', 'ADRT15120', NULL, 3, 6.98, 1, 80, 90, 80, 8000, 0, 0, 'queplan', 'ADRT15120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT15120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (131, 'ADRIATICO 14120', 'ADRT14120', NULL, 3, 6.47, 1, 80, 90, 80, 8000, 0, 0, 'queplan', 'ADRT14120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT14120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (134, 'ADRIATICO 13120', 'ADRT13120', NULL, 3, 5.95, 1, 80, 90, 80, 8000, 0, 0, 'queplan', 'ADRT13120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT13120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (135, 'ADRIATICO 12120', 'ADRT12120', NULL, 3, 5.44, 1, 80, 90, 80, 8000, 0, 0, 'queplan', 'ADRT12120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT12120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (136, 'ADRIATICO 11120', 'ADRT11120', NULL, 3, 4.92, 1, 80, 90, 80, 8000, 0, 0, 'queplan', 'ADRT11120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT11120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (137, 'ADRIATICO 10120', 'ADRT10120', NULL, 3, 4.61, 1, 80, 90, 80, 8000, 0, 0, 'queplan', 'ADRT10120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT10120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (147, 'JONICO 3 REG 14120', 'JNC14120', NULL, 3, 4.42, 1, 90, 100, 90, 8000, 1, 0, 'queplan', 'JNC14120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC14120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (149, 'CÉLTICO 14120', 'CLTC14120', NULL, 3, 2.65, 1, 90, 100, 90, 5000, 0, 1, 'queplan', 'CLTC14120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC14120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (170, 'ADRIATICO 9120', 'ADRT9120', NULL, 3, 4.11, 1, 80, 90, 80, 8000, 0, 0, 'queplan', 'ADRT9120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT9120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (193, 'ADRIATICO 8120', 'ADRT8120', NULL, 3, 3.96, 1, 80, 90, 80, 8000, 0, 0, 'queplan', 'ADRT8120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT8120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (197, 'ADRIATICO 7120', 'ADRT7120', NULL, 3, 3.96, 1, 80, 90, 80, 8000, 0, 0, 'queplan', 'ADRT7120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT7120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (198, 'JONICO 2 REG 13120', 'JNC13120', NULL, 3, 3.99, 1, 90, 100, 90, 7000, 1, 0, 'queplan', 'JNC13120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC13120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (210, 'ADRIATICO 6120', 'ADRT6120', NULL, 3, 3.80, 1, 80, 90, 80, 8000, 0, 0, 'queplan', 'ADRT6120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT6120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (211, 'JONICO 2 REG 12120', 'JNC12120', NULL, 3, 3.58, 1, 90, 100, 90, 7000, 1, 0, 'queplan', 'JNC12120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC12120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:03'),
            (254, 'ADRIATICO 5120', 'ADRT5120', NULL, 3, 3.82, 1, 80, 90, 80, 8000, 0, 0, 'queplan', 'ADRT5120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT5120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:04'),
            (260, 'JONICO 2 REG 11120', 'JNC11120', NULL, 3, 3.24, 1, 90, 100, 90, 7000, 1, 0, 'queplan', 'JNC11120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC11120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:04'),
            (261, 'ADRIATICO 4120', 'ADRT4120', NULL, 3, 3.67, 1, 80, 90, 80, 8000, 0, 0, 'queplan', 'ADRT4120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT4120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:04'),
            (288, 'CÉLTICO 13120', 'CLTC13120', NULL, 3, 2.53, 1, 90, 100, 90, 4000, 0, 1, 'queplan', 'CLTC13120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC13120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:04'),
            (303, 'MISURI 4120', 'MSR4120', NULL, 3, 2.73, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'MSR4120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MSR4120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:04'),
            (304, 'MISURI 6120', 'MSR6120', NULL, 3, 2.83, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'MSR6120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MSR6120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:04'),
            (305, 'MISURI 5120', 'MSR5120', NULL, 3, 2.77, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'MSR5120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MSR5120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:04'),
            (358, 'MISURI 3120', 'MSR3120', NULL, 3, 2.67, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'MSR3120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MSR3120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:04'),
            (417, 'JONICO 2 REG 10120', 'JNC10120', NULL, 3, 3.08, 1, 80, 100, 80, 7000, 1, 0, 'queplan', 'JNC10120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC10120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:05'),
            (418, 'TIGRIS 6120', 'TGRS6120', NULL, 3, 2.63, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'TGRS6120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=TGRS6120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:05'),
            (429, 'MISURI 2120', 'MSR2120', NULL, 3, 2.50, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'MSR2120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MSR2120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:05'),
            (441, 'JONICO 2 REG 9120', 'JNC9120', NULL, 3, 2.77, 1, 80, 100, 80, 7000, 1, 0, 'queplan', 'JNC9120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC9120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:05'),
            (462, 'TIGRIS 5120', 'TGRS5120', NULL, 3, 2.53, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'TGRS5120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=TGRS5120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:05'),
            (489, 'CÉLTICO 12120', 'CLTC12120', NULL, 3, 2.33, 1, 90, 100, 90, 4000, 0, 1, 'queplan', 'CLTC12120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC12120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:05'),
            (507, 'MEDITERRÁNEO 9220', 'MDT9220', NULL, 3, 3.65, 1, 70, 90, 70, 7000, 0, 0, 'queplan', 'MDT9220.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MDT9220&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:06'),
            (508, 'MEDITERRÁNEO 8220', 'MDT8220', NULL, 3, 3.46, 1, 70, 90, 70, 7000, 0, 0, 'queplan', 'MDT8220.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MDT8220&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:06'),
            (529, 'TIGRIS 4120', 'TGRS4120', NULL, 3, 2.37, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'TGRS4120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=TGRS4120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:06'),
            (535, 'ADRIATICO 3120', 'ADRT3120', NULL, 3, 3.35, 1, 70, 80, 70, 8000, 0, 0, 'queplan', 'ADRT3120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT3120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:06'),
            (536, 'MISURI 1120', 'MSR1120', NULL, 3, 2.23, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'MSR1120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MSR1120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:06'),
            (541, 'JONICO 2 REG 8120', 'JNC8120', NULL, 3, 2.39, 1, 80, 100, 80, 7000, 1, 0, 'queplan', 'JNC8120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC8120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:06'),
            (546, 'ADRIATICO 2120', 'ADRT2120', NULL, 3, 3.16, 1, 70, 80, 70, 8000, 0, 0, 'queplan', 'ADRT2120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT2120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:06'),
            (554, 'MEDITERRÁNEO 7220', 'MDT7220', NULL, 3, 3.25, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'MDT7220.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MDT7220&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:06'),
            (560, 'MEDITERRANEO 6120', 'MDT6120', NULL, 3, 2.86, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'MDT6120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MDT6120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:06'),
            (615, 'TIGRIS 3120', 'TGRS3120', NULL, 3, 2.25, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'TGRS3120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=TGRS3120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:06'),
            (620, 'MEDITERRANEO 5120', 'MDT5120', NULL, 3, 2.77, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'MDT5120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MDT5120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:06'),
            (627, 'CÉLTICO 11120', 'CLTC11120', NULL, 3, 2.23, 1, 90, 100, 90, 4000, 0, 1, 'queplan', 'CLTC11120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC11120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:06'),
            (631, 'JONICO 1 REG 7120', 'JNC7120', NULL, 3, 2.33, 1, 80, 100, 80, 6000, 1, 0, 'queplan', 'JNC7120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC7120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:07'),
            (648, 'MEDITERRANEO 4120', 'MDT4120', NULL, 3, 2.69, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'MDT4120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MDT4120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:07'),
            (679, 'JONICO 1 REG 6120', 'JNC6120', NULL, 3, 2.10, 1, 80, 100, 80, 6000, 1, 0, 'queplan', 'JNC6120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC6120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:07'),
            (681, 'ADRIATICO 1120', 'ADRT1120', NULL, 3, 2.94, 1, 70, 70, 70, 8000, 0, 0, 'queplan', 'ADRT1120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=ADRT1120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:07'),
            (693, 'TIGRIS 2120', 'TGRS2120', NULL, 3, 2.18, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'TGRS2120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=TGRS2120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:07'),
            (694, 'CÉLTICO 10120', 'CLTC10120', NULL, 3, 2.09, 1, 90, 100, 90, 3500, 0, 1, 'queplan', 'CLTC10120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC10120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:07'),
            (737, 'MEDITERRANEO 3120', 'MDT3120', NULL, 3, 2.54, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'MDT3120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MDT3120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:07'),
            (751, 'CÉLTICO 9120', 'CLTC9120', NULL, 3, 2.03, 1, 90, 100, 90, 3500, 0, 1, 'queplan', 'CLTC9120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC9120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:07'),
            (760, 'EBRO6120', 'EBRO6120', NULL, 3, 1.76, 1, 70, 80, 70, 6000, 0, 0, 'queplan', 'EBRO6120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=EBRO6120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (762, 'JONICO 1 REG 5120', 'JNC5120', NULL, 3, 2.03, 1, 80, 100, 80, 6000, 1, 0, 'queplan', 'JNC5120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC5120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (765, 'EGEO 6220', 'EGEO6220', NULL, 3, 2.09, 1, 80, 90, 80, 6000, 0, 0, 'queplan', 'EGEO6220.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=EGEO6220&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (794, 'EBRO5120', 'EBRO5120', NULL, 3, 1.73, 1, 70, 80, 70, 6000, 0, 0, 'queplan', 'EBRO5120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=EBRO5120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (798, 'JONICO 1 REG 4120', 'JNC4120', NULL, 3, 1.86, 1, 80, 100, 80, 6000, 1, 0, 'queplan', 'JNC4120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC4120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (802, 'TIGRIS 1120', 'TGRS1120', NULL, 3, 2.02, 1, 70, 80, 70, 7000, 0, 0, 'queplan', 'TGRS1120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=TGRS1120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (815, 'EGEO 5220', 'EGEO5220', NULL, 3, 2.03, 1, 80, 90, 80, 6000, 0, 0, 'queplan', 'EGEO5220.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=EGEO5220&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (831, 'MEDITERRANEO 1120', 'MDT1120', NULL, 3, 2.45, 1, 70, 70, 70, 7000, 0, 0, 'queplan', 'MDT1120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MDT1120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (832, 'MEDITERRANEO E 1120', 'MDTE1120', NULL, 3, 2.36, 1, 70, 70, 70, 7000, 0, 0, 'queplan', 'MDTE1120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MDTE1120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (835, 'EBRO 4120', 'EBRO4120', NULL, 3, 1.69, 1, 70, 80, 70, 6000, 0, 0, 'queplan', 'EBRO4120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=EBRO4120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (836, 'CÉLTICO 8120', 'CLTC8120', NULL, 3, 1.95, 1, 90, 100, 90, 3500, 0, 1, 'queplan', 'CLTC8120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC8120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (848, 'JONICO 1 REG 3120', 'JNC3120', NULL, 3, 1.70, 1, 80, 100, 80, 6000, 1, 0, 'queplan', 'JNC3120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC3120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (869, 'EBRO 3120', 'EBRO3120', NULL, 3, 1.66, 1, 70, 80, 70, 6000, 0, 0, 'queplan', 'EBRO3120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=EBRO3120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (874, 'EGEO 4220', 'EGEO4220', NULL, 3, 1.85, 1, 80, 90, 80, 6000, 0, 0, 'queplan', 'EGEO4220.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=EGEO4220&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (875, 'CÉLTICO 7120', 'CLTC7120', NULL, 3, 1.91, 1, 90, 100, 90, 3500, 0, 1, 'queplan', 'CLTC7120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC7120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (881, 'MISISIPI 5120', 'MSSP5120', NULL, 3, 1.46, 1, 70, 80, 70, 6000, 0, 0, 'queplan', 'MSSP5120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MSSP5120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:08'),
            (888, 'EGEO 3220', 'EGEO3220', NULL, 3, 1.79, 1, 80, 90, 80, 6000, 0, 0, 'queplan', 'EGEO3220.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=EGEO3220&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:09'),
            (901, 'EBRO 2120', 'EBRO2120', NULL, 3, 1.47, 1, 60, 80, 60, 6000, 0, 0, 'queplan', 'EBRO2120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=EBRO2120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:09'),
            (914, 'JONICO 1 REG 2120', 'JNC2120', NULL, 3, 1.61, 1, 80, 100, 80, 6000, 1, 0, 'queplan', 'JNC2120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC2120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:09'),
            (943, 'MISISIPI 4120', 'MSSP4120', NULL, 3, 1.44, 1, 70, 80, 70, 6000, 0, 0, 'queplan', 'MSSP4120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MSSP4120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:09'),
            (947, 'EGEO 2220', 'EGEO2220', NULL, 3, 1.64, 1, 80, 90, 80, 6000, 0, 0, 'queplan', 'EGEO2220.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=EGEO2220&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:09'),
            (959, 'CÉLTICO 6120', 'CLTC6120', NULL, 3, 1.84, 1, 90, 100, 90, 3000, 0, 1, 'queplan', 'CLTC6120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC6120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:09'),
            (965, 'EBRO120', 'EBRO1120', NULL, 3, 1.43, 1, 60, 80, 60, 6000, 0, 0, 'queplan', 'EBRO1120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=EBRO1120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:09'),
            (976, 'MISISIPI 3120', 'MSSP3120', NULL, 3, 1.38, 1, 70, 80, 70, 6000, 0, 0, 'queplan', 'MSSP3120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MSSP3120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:09'),
            (982, 'MISISIPI 2120', 'MSSP2120', NULL, 3, 1.25, 1, 60, 80, 60, 6000, 0, 0, 'queplan', 'MSSP2120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MSSP2120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:09'),
            (983, 'CÉLTICO 4120', 'CLTC4120', NULL, 3, 1.77, 1, 70, 90, 70, 3000, 0, 1, 'queplan', 'CLTC4120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC4120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:09'),
            (984, 'JONICO 1 REG 1120', 'JNC1120', NULL, 3, 1.51, 1, 80, 100, 80, 6000, 1, 0, 'queplan', 'JNC1120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=JNC1120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:09'),
            (994, 'EGEO 1120', 'EGEO1120', NULL, 3, 1.53, 1, 80, 90, 80, 6000, 0, 0, 'queplan', 'EGEO1120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=EGEO1120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:09'),
            (1011, 'CÉLTICO 3120', 'CLTC3120', NULL, 3, 1.71, 1, 70, 90, 70, 3000, 0, 1, 'queplan', 'CLTC3120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC3120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:09'),
            (1028, 'CÉLTICO 5120', 'CLTC5120', NULL, 3, 1.72, 1, 90, 100, 90, 3000, 0, 1, 'queplan', 'CLTC5120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC5120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:10'),
            (1032, 'CÉLTICO 2120', 'CLTC2120', NULL, 3, 1.68, 1, 70, 90, 70, 3000, 0, 1, 'queplan', 'CLTC2120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC2120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:10'),
            (1033, 'MISISIPI 1120', 'MSSP1120', NULL, 3, 1.22, 1, 60, 80, 60, 6000, 0, 0, 'queplan', 'MSSP1120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=MSSP1120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:10'),
            (1059, 'CÉLTICO 1120', 'CLTC1120', NULL, 3, 1.61, 1, 70, 90, 70, 3000, 0, 1, 'queplan', 'CLTC1120.pdf', 'https://www.colmena.cl/appVentas/ArchivoServlet?car=CLTC1120&clasif=car&tipo=PDF', NULL, '2021-06-30 01:41:10');");
        
     }
}