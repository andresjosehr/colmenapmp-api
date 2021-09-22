<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProvidersQuePlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::select("INSERT INTO `providers_queplan` (`id`, `super_plan_provider_id`, `name`, `rut`, `created_at`, `updated_at`) VALUES
                (1, 75, 'Arauco Salud', '76110809', NULL, '2021-07-15 01:53:15'),
                (2, 80, 'Centromed', '1038', NULL, '2021-07-15 01:53:15'),
                (3, 76, 'Centro Médico San Joaquin', '1033', NULL, '2021-07-15 01:53:15'),
                (4, 73, 'Centros Médicos RedSalud', '1062', NULL, '2021-07-15 01:53:15'),
                (5, 68, 'Centros Médicos Red Salud UC Christus', '1041', NULL, '2021-07-15 01:53:15'),
                (6, 74, 'Centros Médicos Vidaintegra', '1039', NULL, '2021-07-15 01:53:15'),
                (7, 26, 'Clínica Alemana De Osorno', '1011', NULL, '2021-07-15 01:53:15'),
                (8, 3, 'Clínica Alemana De Santiago', '96770100', NULL, '2021-07-15 01:53:15'),
                (9, 49, 'Clínica Alemana De Temuco', '1000', NULL, '2021-07-15 01:53:15'),
                (10, 25, 'Clínica Alemana Valdivia', '76555870', NULL, '2021-07-15 01:53:15'),
                (11, 83, 'Clínica Antofagasta', '95432000', NULL, '2021-07-15 01:53:15'),
                (12, 59, 'Clínica Arica', '1024', NULL, '2021-07-15 01:53:15'),
                (13, 39, 'Clínica Atacama', '76938510', NULL, '2021-07-15 01:53:15'),
                (14, 48, 'Clínica Bio Bio', '96885940', NULL, '2021-07-15 01:53:15'),
                (15, 15, 'Clínica Bupa Santiago', '1026', NULL, '2021-07-15 01:53:15'),
                (16, 46, 'Clínica Chillán', '76515070', NULL, '2021-07-15 01:53:16'),
                (17, 20, 'Clínica Ciudad Del Mar', '96885950', NULL, '2021-07-15 01:53:15'),
                (18, 16, 'Clínica Cordillera', '76871970', NULL, '2021-07-15 01:53:16'),
                (19, 31, 'Clínica Dávila', '96530470', NULL, '2021-07-15 01:53:16'),
                (20, 35, 'Clínica El Loa', '96802800', NULL, '2021-07-15 01:53:15'),
                (21, 57, 'Clínica Hospital Del Profesor', '53125850', NULL, '2021-07-15 01:53:16'),
                (22, 8, 'Clínica Indisa', '92051000', NULL, '2021-07-15 01:53:16'),
                (23, 71, 'Clínica Iram', '1061', NULL, '2021-07-15 01:53:16'),
                (24, 63, 'Clínica Isamédica', '96662450', NULL, '2021-07-15 01:53:14'),
                (25, 55, 'Clínica Juan Pablo II', '89593200', NULL, '2021-07-15 01:53:15'),
                (26, 1, 'Clínica Las Condes', '93930000', NULL, '2021-07-15 01:53:16'),
                (27, 45, 'Clínica Lircay', '1007', NULL, '2021-07-15 01:53:16'),
                (28, 22, 'Clínica Los Andes (Chillán)', '1018', NULL, '2021-07-15 01:53:16'),
                (29, 22, 'Clínica Los Andes (Los Angeles)', '96662020', NULL, '2021-07-15 01:53:16'),
                (30, 28, 'Clínica Los Carrera', '1029', NULL, '2021-07-15 01:53:15'),
                (31, 81, 'Clínica Los Leones', '1027', NULL, '2021-07-15 01:53:13'),
                (32, 9, 'Clínica MEDS', '1021', NULL, '2021-07-15 01:53:16'),
                (33, 72, 'Clínica Oftalmológica Pasteur', '1060', NULL, '2021-07-15 01:53:16'),
                (34, 53, 'Clínica Puerto Montt', '76444740', NULL, '2021-07-15 01:53:16'),
                (35, 51, 'Clinica Puerto Varas', '1057', NULL, '2021-07-15 01:53:16'),
                (36, 27, 'Clínica RedSadud Magallanes', '96567920', NULL, '2021-07-15 01:53:16'),
                (37, 40, 'Clínica RedSalud Elqui', '99533790', NULL, '2021-07-15 01:53:15'),
                (38, 60, 'Clínica RedSalud Iquique', '1014', NULL, '2021-07-15 01:53:15'),
                (39, 50, 'Clínica RedSalud Mayor Temuco', '96774580', NULL, '2021-07-15 01:53:16'),
                (40, 30, 'Clínica RedSalud Providencia (Ex Avansalud)', '78040520', NULL, '2021-07-15 01:53:16'),
                (41, 64, 'Clínica RedSalud Rancagua', '78918290', NULL, '2021-07-15 01:53:14'),
                (42, 54, 'Clínica RedSalud Santiago (Ex Bicentenario)', '96885930', NULL, '2021-07-15 01:53:16'),
                (43, 41, 'Clínica RedSalud Valparaiso', '1028', NULL, '2021-07-15 01:53:15'),
                (44, 10, 'Clínica RedSalud Vitacura (Ex Tabancura)', '78053560', NULL, '2021-07-15 01:53:16'),
                (45, 36, 'Clínica Regional La Portada', '99537800', NULL, '2021-07-15 01:53:15'),
                (46, 14, 'Clínica Reñaca', '79576810', NULL, '2021-07-15 01:53:15'),
                (47, 23, 'Clínica Sanatorio Aleman', '1016', NULL, '2021-07-15 01:53:16'),
                (48, 4, 'Clínica San Carlos De Apoquindo', '99573490', NULL, '2021-07-15 01:53:16'),
                (49, 34, 'Clínica San José', '96613220', NULL, '2021-07-15 01:53:15'),
                (50, 7, 'Clínica Santa María', '90753000', NULL, '2021-07-15 01:53:16'),
                (51, 86, 'Clínica Tarapaca', '1025', NULL, '2021-07-15 01:53:15'),
                (52, 5, 'Clínica Universidad Católica', '96534960', NULL, '2021-07-15 01:53:16'),
                (53, 6, 'Clínica Universidad De Los Andes', '71614000', NULL, '2021-07-15 01:53:16'),
                (54, 47, 'Clínica Universitaria De Concepción', '76018992', NULL, '2021-07-15 01:53:16'),
                (55, 52, 'Clínica Universitaria De Puerto Montt', '96766640', NULL, '2021-07-15 01:53:16'),
                (56, 32, 'Clínica Vespucio', '96898980', NULL, '2021-07-15 01:53:16'),
                (57, 24, 'Hospital Clínico Del Sur', '76057904', NULL, '2021-07-15 01:53:16'),
                (58, 87, 'Hospital Clínico De Magallanes', '1013', NULL, '2021-07-15 01:53:15'),
                (59, 44, 'Hospital Clínico Fusat', '70905700', NULL, '2021-07-15 01:53:15'),
                (60, 89, 'Hospital Clínico UC', '81698900', NULL, '2021-07-15 01:53:16'),
                (61, 33, 'Hospital Clínico Universidad De Chile', '60910000', NULL, '2021-07-15 01:53:16'),
                (62, 42, 'Hospital Clínico Viña Del Mar', '96963660', NULL, '2021-07-15 01:53:13'),
                (63, 88, 'Hospital De Niños Y Cunas Viña Del Mar', '82031900', NULL, '2021-07-15 01:53:13'),
                (64, 58, 'Hospital Parroquial de San Bernardo', '82031800', NULL, '2021-07-15 01:53:15'),
                (65, 77, 'Instituto Oftalmológico Puerta Del Sol', '96759910', NULL, '2021-07-15 01:53:16'),
                (66, 69, 'Integramédica', '7370362', NULL, '2021-07-15 01:53:16'),
                (67, 70, 'Medicien', '1059', NULL, '2021-07-15 01:53:16'),
                (68, 78, 'Sonorad centros médicos', '1058', NULL, '2021-07-15 01:53:15');");
    }
}
