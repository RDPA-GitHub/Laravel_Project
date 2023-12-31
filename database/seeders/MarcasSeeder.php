<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marcas;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            ['COD_PROV' => '1', 'DESC_PROV' => 'ACADIAN             '],
            ['COD_PROV' => '2', 'DESC_PROV' => 'ACURA               '],
            ['COD_PROV' => '3', 'DESC_PROV' => 'AGRALE              '],
            ['COD_PROV' => '4', 'DESC_PROV' => 'ALFA ROMEO          '],
            ['COD_PROV' => '5', 'DESC_PROV' => 'AMERICAN MOTORS     '],
            ['COD_PROV' => '6', 'DESC_PROV' => 'AMERITRUCK          '],
            ['COD_PROV' => '7', 'DESC_PROV' => 'APRILIA             '],
            ['COD_PROV' => '8', 'DESC_PROV' => 'ARO                 '],
            ['COD_PROV' => '9', 'DESC_PROV' => 'ASIA                '],
            ['COD_PROV' => '10', 'DESC_PROV' => 'ASIA MOTORS         '],
            ['COD_PROV' => '11', 'DESC_PROV' => 'ASTON MARTIN        '],
            ['COD_PROV' => '12', 'DESC_PROV' => 'ASTRA               '],
            ['COD_PROV' => '13', 'DESC_PROV' => 'AUDI                '],
            ['COD_PROV' => '14', 'DESC_PROV' => 'AUSTIN              '],
            ['COD_PROV' => '15', 'DESC_PROV' => 'AUTOCAR             '],
            ['COD_PROV' => '16', 'DESC_PROV' => 'AUTORRAD            '],
            ['COD_PROV' => '17', 'DESC_PROV' => 'B.M.C.              '],
            ['COD_PROV' => '18', 'DESC_PROV' => 'BAIC                '],
            ['COD_PROV' => '19', 'DESC_PROV' => 'BAJAJ               '],
            ['COD_PROV' => '20', 'DESC_PROV' => 'BASHAN              '],
            ['COD_PROV' => '21', 'DESC_PROV' => 'BAW                 '],
            ['COD_PROV' => '22', 'DESC_PROV' => 'BEDFORD             '],
            ['COD_PROV' => '23', 'DESC_PROV' => 'BEIGING             '],
            ['COD_PROV' => '24', 'DESC_PROV' => 'BELAVTOMAZ          '],
            ['COD_PROV' => '25', 'DESC_PROV' => 'BENELLI             '],
            ['COD_PROV' => '26', 'DESC_PROV' => 'BENTLEY             '],
            ['COD_PROV' => '27', 'DESC_PROV' => 'BENYI               '],
            ['COD_PROV' => '28', 'DESC_PROV' => 'BENZHOU             '],
            ['COD_PROV' => '29', 'DESC_PROV' => 'BERLIET             '],
            ['COD_PROV' => '30', 'DESC_PROV' => 'BIGFOOT             '],
            ['COD_PROV' => '31', 'DESC_PROV' => 'BIMOTA              '],
            ['COD_PROV' => '32', 'DESC_PROV' => 'BMW                 '],
            ['COD_PROV' => '33', 'DESC_PROV' => 'BOATIAN             '],
            ['COD_PROV' => '34', 'DESC_PROV' => 'BORGWARD            '],
            ['COD_PROV' => '35', 'DESC_PROV' => 'BRILLIANCE          '],
            ['COD_PROV' => '36', 'DESC_PROV' => 'BUELL               '],
            ['COD_PROV' => '37', 'DESC_PROV' => 'BUICK               '],
            ['COD_PROV' => '38', 'DESC_PROV' => 'BULTACO             '],
            ['COD_PROV' => '39', 'DESC_PROV' => 'BUSSING             '],
            ['COD_PROV' => '40', 'DESC_PROV' => 'BYD                 '],
            ['COD_PROV' => '41', 'DESC_PROV' => 'CADILLAC            '],
            ['COD_PROV' => '42', 'DESC_PROV' => 'CAGIVA              '],
            ['COD_PROV' => '43', 'DESC_PROV' => 'CAKY-CHANGAN        '],
            ['COD_PROV' => '44', 'DESC_PROV' => 'CAMC                '],
            ['COD_PROV' => '45', 'DESC_PROV' => 'CATERHAM            '],
            ['COD_PROV' => '46', 'DESC_PROV' => 'CFMOTO              '],
            ['COD_PROV' => '47', 'DESC_PROV' => 'CHANGAN             '],
            ['COD_PROV' => '48', 'DESC_PROV' => 'CHANGHE             '],
            ['COD_PROV' => '49', 'DESC_PROV' => 'CHERY               '],
            ['COD_PROV' => '50', 'DESC_PROV' => 'CHEVROLET           '],
            ['COD_PROV' => '51', 'DESC_PROV' => 'CHRYSLER            '],
            ['COD_PROV' => '52', 'DESC_PROV' => 'CITROEN             '],
            ['COD_PROV' => '53', 'DESC_PROV' => 'COMIL GALLEGIANTE   '],
            ['COD_PROV' => '54', 'DESC_PROV' => 'COMMER              '],
            ['COD_PROV' => '55', 'DESC_PROV' => 'DACIA               '],
            ['COD_PROV' => '56', 'DESC_PROV' => 'DAELIM              '],
            ['COD_PROV' => '57', 'DESC_PROV' => 'DAEWOO              '],
            ['COD_PROV' => '58', 'DESC_PROV' => 'DAF                 '],
            ['COD_PROV' => '59', 'DESC_PROV' => 'DAIHATSU            '],
            ['COD_PROV' => '60', 'DESC_PROV' => 'DATSUN              '],
            ['COD_PROV' => '61', 'DESC_PROV' => 'DAYUN               '],
            ['COD_PROV' => '62', 'DESC_PROV' => 'DIAMOND             '],
            ['COD_PROV' => '63', 'DESC_PROV' => 'DIMEX               '],
            ['COD_PROV' => '64', 'DESC_PROV' => 'DODGE               '],
            ['COD_PROV' => '65', 'DESC_PROV' => 'DONGFENG            '],
            ['COD_PROV' => '66', 'DESC_PROV' => 'DUCATI              '],
            ['COD_PROV' => '67', 'DESC_PROV' => 'DUNNA               '],
            ['COD_PROV' => '68', 'DESC_PROV' => 'DYNA                '],
            ['COD_PROV' => '69', 'DESC_PROV' => 'EBRO                '],
            ['COD_PROV' => '70', 'DESC_PROV' => 'EUROMOT             '],
            ['COD_PROV' => '71', 'DESC_PROV' => 'F.S.O.              '],
            ['COD_PROV' => '72', 'DESC_PROV' => 'FARGO               '],
            ['COD_PROV' => '73', 'DESC_PROV' => 'FAW                 '],
            ['COD_PROV' => '74', 'DESC_PROV' => 'FBM                 '],
            ['COD_PROV' => '75', 'DESC_PROV' => 'FEDERAL             '],
            ['COD_PROV' => '76', 'DESC_PROV' => 'FERRARI             '],
            ['COD_PROV' => '77', 'DESC_PROV' => 'FIAT                '],
            ['COD_PROV' => '78', 'DESC_PROV' => 'FLSTF               '],
            ['COD_PROV' => '79', 'DESC_PROV' => 'FORD                '],
            ['COD_PROV' => '80', 'DESC_PROV' => 'FOTON               '],
            ['COD_PROV' => '81', 'DESC_PROV' => 'FOX                 '],
            ['COD_PROV' => '82', 'DESC_PROV' => 'FREIGHTLINER        '],
            ['COD_PROV' => '83', 'DESC_PROV' => 'FXA                 '],
            ['COD_PROV' => '84', 'DESC_PROV' => 'G.M.C.              '],
            ['COD_PROV' => '85', 'DESC_PROV' => 'GAC GONOW           '],
            ['COD_PROV' => '86', 'DESC_PROV' => 'GARELLI             '],
            ['COD_PROV' => '87', 'DESC_PROV' => 'GASGAS              '],
            ['COD_PROV' => '88', 'DESC_PROV' => 'GEELY               '],
            ['COD_PROV' => '89', 'DESC_PROV' => 'GILERA              '],
            ['COD_PROV' => '90', 'DESC_PROV' => 'GOLDEN DRAGON       '],
            ['COD_PROV' => '91', 'DESC_PROV' => 'GREAT WALL          '],
            ['COD_PROV' => '92', 'DESC_PROV' => 'GREYHOUND           '],
            ['COD_PROV' => '93', 'DESC_PROV' => 'GUZZI               '],
            ['COD_PROV' => '94', 'DESC_PROV' => 'HAFEI               '],
            ['COD_PROV' => '95', 'DESC_PROV' => 'HAIMA               '],
            ['COD_PROV' => '96', 'DESC_PROV' => 'HAO JUE             '],
            ['COD_PROV' => '97', 'DESC_PROV' => 'HARLEY-DAVIDSON     '],
            ['COD_PROV' => '98', 'DESC_PROV' => 'HARTFORD            '],
            ['COD_PROV' => '99', 'DESC_PROV' => 'HAVAL               '],
            ['COD_PROV' => '100', 'DESC_PROV' => 'HENSCHEL            '],
            ['COD_PROV' => '101', 'DESC_PROV' => 'HENSIM              '],
            ['COD_PROV' => '102', 'DESC_PROV' => 'HERO-PUCH           '],
            ['COD_PROV' => '103', 'DESC_PROV' => 'HIGER               '],
            ['COD_PROV' => '104', 'DESC_PROV' => 'HILLMAN             '],
            ['COD_PROV' => '105', 'DESC_PROV' => 'HINO                '],
            ['COD_PROV' => '106', 'DESC_PROV' => 'HONDA               '],
            ['COD_PROV' => '107', 'DESC_PROV' => 'HUANGHAI            '],
            ['COD_PROV' => '108', 'DESC_PROV' => 'HUSABERG            '],
            ['COD_PROV' => '109', 'DESC_PROV' => 'HUSQVARNA           '],
            ['COD_PROV' => '110', 'DESC_PROV' => 'HYOSUNG             '],
            ['COD_PROV' => '111', 'DESC_PROV' => 'HYUNDAI             '],
            ['COD_PROV' => '112', 'DESC_PROV' => 'INDIAN              '],
            ['COD_PROV' => '113', 'DESC_PROV' => 'INFINITI            '],
            ['COD_PROV' => '114', 'DESC_PROV' => 'INTERNATIONAL       '],
            ['COD_PROV' => '115', 'DESC_PROV' => 'ISUZU               '],
            ['COD_PROV' => '116', 'DESC_PROV' => 'IVECO               '],
            ['COD_PROV' => '117', 'DESC_PROV' => 'JAC                 '],
            ['COD_PROV' => '118', 'DESC_PROV' => 'JAGUAR              '],
            ['COD_PROV' => '119', 'DESC_PROV' => 'JAWA                '],
            ['COD_PROV' => '120', 'DESC_PROV' => 'JBC JINBEI          '],
            ['COD_PROV' => '121', 'DESC_PROV' => 'JEEP                '],
            ['COD_PROV' => '122', 'DESC_PROV' => 'JIANSHE             '],
            ['COD_PROV' => '123', 'DESC_PROV' => 'JIE FANG            '],
            ['COD_PROV' => '124', 'DESC_PROV' => 'JINBEI              '],
            ['COD_PROV' => '125', 'DESC_PROV' => 'JMC                 '],
            ['COD_PROV' => '126', 'DESC_PROV' => 'KAMAZ               '],
            ['COD_PROV' => '127', 'DESC_PROV' => 'KAWASAKI            '],
            ['COD_PROV' => '128', 'DESC_PROV' => 'KAYAK               '],
            ['COD_PROV' => '129', 'DESC_PROV' => 'KEEWAY              '],
            ['COD_PROV' => '130', 'DESC_PROV' => 'KENBO               '],
            ['COD_PROV' => '131', 'DESC_PROV' => 'KENWORTH            '],
            ['COD_PROV' => '132', 'DESC_PROV' => 'KIA MOTORS          '],
            ['COD_PROV' => '133', 'DESC_PROV' => 'KING LONG           '],
            ['COD_PROV' => '134', 'DESC_PROV' => 'KINLON              '],
            ['COD_PROV' => '135', 'DESC_PROV' => 'KTM                 '],
            ['COD_PROV' => '136', 'DESC_PROV' => 'KYMCO               '],
            ['COD_PROV' => '137', 'DESC_PROV' => 'LADA                '],
            ['COD_PROV' => '138', 'DESC_PROV' => 'LAMBORGHINI         '],
            ['COD_PROV' => '139', 'DESC_PROV' => 'LAMBRETTA           '],
            ['COD_PROV' => '140', 'DESC_PROV' => 'LANCIA              '],
            ['COD_PROV' => '141', 'DESC_PROV' => 'LAND ROVER          '],
            ['COD_PROV' => '142', 'DESC_PROV' => 'LANDWIND            '],
            ['COD_PROV' => '143', 'DESC_PROV' => 'LEXUS               '],
            ['COD_PROV' => '144', 'DESC_PROV' => 'LEYLAND             '],
            ['COD_PROV' => '145', 'DESC_PROV' => 'LIAZ                '],
            ['COD_PROV' => '146', 'DESC_PROV' => 'LIFAN               '],
            ['COD_PROV' => '147', 'DESC_PROV' => 'LINCOLN             '],
            ['COD_PROV' => '148', 'DESC_PROV' => 'LML                 '],
            ['COD_PROV' => '149', 'DESC_PROV' => 'LONCIN              '],
            ['COD_PROV' => '150', 'DESC_PROV' => 'LOTUS               '],
            ['COD_PROV' => '151', 'DESC_PROV' => 'LUOJIA              '],
            ['COD_PROV' => '152', 'DESC_PROV' => 'MACK                '],
            ['COD_PROV' => '153', 'DESC_PROV' => 'MAGIRUS             '],
            ['COD_PROV' => '154', 'DESC_PROV' => 'MAHINDRA            '],
            ['COD_PROV' => '155', 'DESC_PROV' => 'MAICO               '],
            ['COD_PROV' => '156', 'DESC_PROV' => 'MAN                 '],
            ['COD_PROV' => '157', 'DESC_PROV' => 'MARCOPOLO           '],
            ['COD_PROV' => '158', 'DESC_PROV' => 'MASERATI            '],
            ['COD_PROV' => '159', 'DESC_PROV' => 'MAXUS               '],
            ['COD_PROV' => '160', 'DESC_PROV' => 'MAZDA               '],
            ['COD_PROV' => '161', 'DESC_PROV' => 'MCLAREN             '],
            ['COD_PROV' => '162', 'DESC_PROV' => 'MERCEDES BENZ       '],
            ['COD_PROV' => '163', 'DESC_PROV' => 'MERCURY             '],
            ['COD_PROV' => '164', 'DESC_PROV' => 'MG                  '],
            ['COD_PROV' => '165', 'DESC_PROV' => 'MINI                '],
            ['COD_PROV' => '166', 'DESC_PROV' => 'MITSUBISHI          '],
            ['COD_PROV' => '167', 'DESC_PROV' => 'MONTELLI            '],
            ['COD_PROV' => '168', 'DESC_PROV' => 'MONTESA             '],
            ['COD_PROV' => '169', 'DESC_PROV' => 'MORGAN              '],
            ['COD_PROV' => '170', 'DESC_PROV' => 'MORRIS              '],
            ['COD_PROV' => '171', 'DESC_PROV' => 'MOTO BECANE         '],
            ['COD_PROV' => '172', 'DESC_PROV' => 'MOTOMEL             '],
            ['COD_PROV' => '173', 'DESC_PROV' => 'MOTORRAD            '],
            ['COD_PROV' => '174', 'DESC_PROV' => 'MSK                 '],
            ['COD_PROV' => '175', 'DESC_PROV' => 'MV AGUSTA           '],
            ['COD_PROV' => '176', 'DESC_PROV' => 'NISSAN              '],
            ['COD_PROV' => '177', 'DESC_PROV' => 'NSU                 '],
            ['COD_PROV' => '178', 'DESC_PROV' => 'O.M.                '],
            ['COD_PROV' => '179', 'DESC_PROV' => 'ODES                '],
            ['COD_PROV' => '180', 'DESC_PROV' => 'OLDSMOBILE          '],
            ['COD_PROV' => '181', 'DESC_PROV' => 'OPEL                '],
            ['COD_PROV' => '182', 'DESC_PROV' => 'OSSA                '],
            ['COD_PROV' => '183', 'DESC_PROV' => 'PEGASO              '],
            ['COD_PROV' => '184', 'DESC_PROV' => 'PEUGEOT             '],
            ['COD_PROV' => '185', 'DESC_PROV' => 'PGO                 '],
            ['COD_PROV' => '186', 'DESC_PROV' => 'PIAGGIO             '],
            ['COD_PROV' => '187', 'DESC_PROV' => 'PIONNER             '],
            ['COD_PROV' => '188', 'DESC_PROV' => 'PLYMOUTH            '],
            ['COD_PROV' => '189', 'DESC_PROV' => 'POLARIS             '],
            ['COD_PROV' => '190', 'DESC_PROV' => 'POLSKI FIAT         '],
            ['COD_PROV' => '191', 'DESC_PROV' => 'PONTIAC             '],
            ['COD_PROV' => '192', 'DESC_PROV' => 'PORSCHE             '],
            ['COD_PROV' => '193', 'DESC_PROV' => 'PROTON              '],
            ['COD_PROV' => '194', 'DESC_PROV' => 'PULLMAN STD AMERIC  '],
            ['COD_PROV' => '195', 'DESC_PROV' => 'PUMA                '],
            ['COD_PROV' => '196', 'DESC_PROV' => 'REGAL RAPTOR        '],
            ['COD_PROV' => '197', 'DESC_PROV' => 'RENAULT             '],
            ['COD_PROV' => '198', 'DESC_PROV' => 'REO                 '],
            ['COD_PROV' => '199', 'DESC_PROV' => 'RIZATO              '],
            ['COD_PROV' => '200', 'DESC_PROV' => 'ROLLS ROYCE         '],
            ['COD_PROV' => '201', 'DESC_PROV' => 'ROMAN               '],
            ['COD_PROV' => '202', 'DESC_PROV' => 'ROVER               '],
            ['COD_PROV' => '203', 'DESC_PROV' => 'S/M                 '],
            ['COD_PROV' => '204', 'DESC_PROV' => 'SAAB                '],
            ['COD_PROV' => '205', 'DESC_PROV' => 'SACHS               '],
            ['COD_PROV' => '206', 'DESC_PROV' => 'SAEHAN              '],
            ['COD_PROV' => '207', 'DESC_PROV' => 'SAMSUNG             '],
            ['COD_PROV' => '208', 'DESC_PROV' => 'SANFU               '],
            ['COD_PROV' => '209', 'DESC_PROV' => 'SANLG               '],
            ['COD_PROV' => '210', 'DESC_PROV' => 'SANYA               '],
            ['COD_PROV' => '211', 'DESC_PROV' => 'SANYANG SYM         '],
            ['COD_PROV' => '212', 'DESC_PROV' => 'SCANIA              '],
            ['COD_PROV' => '213', 'DESC_PROV' => 'SEAT                '],
            ['COD_PROV' => '214', 'DESC_PROV' => 'SG                  '],
            ['COD_PROV' => '215', 'DESC_PROV' => 'SHACMAN             '],
            ['COD_PROV' => '216', 'DESC_PROV' => 'SHENFENG            '],
            ['COD_PROV' => '217', 'DESC_PROV' => 'SHENYANG JINBEI     '],
            ['COD_PROV' => '218', 'DESC_PROV' => 'SHINERAY            '],
            ['COD_PROV' => '219', 'DESC_PROV' => 'SIMCA               '],
            ['COD_PROV' => '220', 'DESC_PROV' => 'SINOTRUK            '],
            ['COD_PROV' => '221', 'DESC_PROV' => 'SKODA               '],
            ['COD_PROV' => '222', 'DESC_PROV' => 'SKYGO               '],
            ['COD_PROV' => '223', 'DESC_PROV' => 'SMA                 '],
            ['COD_PROV' => '224', 'DESC_PROV' => 'SPITZ               '],
            ['COD_PROV' => '225', 'DESC_PROV' => 'SSANGYONG           '],
            ['COD_PROV' => '226', 'DESC_PROV' => 'STUDEBAKER          '],
            ['COD_PROV' => '227', 'DESC_PROV' => 'SUBARU              '],
            ['COD_PROV' => '228', 'DESC_PROV' => 'SUNLONG             '],
            ['COD_PROV' => '229', 'DESC_PROV' => 'SUZUKI              '],
            ['COD_PROV' => '230', 'DESC_PROV' => 'TAKASAKI            '],
            ['COD_PROV' => '231', 'DESC_PROV' => 'TATA                '],
            ['COD_PROV' => '232', 'DESC_PROV' => 'TATRA               '],
            ['COD_PROV' => '233', 'DESC_PROV' => 'TM                  '],
            ['COD_PROV' => '234', 'DESC_PROV' => 'TORITO              '],
            ['COD_PROV' => '235', 'DESC_PROV' => 'TOYOTA              '],
            ['COD_PROV' => '236', 'DESC_PROV' => 'TRIUMPH             '],
            ['COD_PROV' => '237', 'DESC_PROV' => 'TVS                 '],
            ['COD_PROV' => '238', 'DESC_PROV' => 'UNITED MOTORS       '],
            ['COD_PROV' => '239', 'DESC_PROV' => 'URAL                '],
            ['COD_PROV' => '240', 'DESC_PROV' => 'VERONA              '],
            ['COD_PROV' => '241', 'DESC_PROV' => 'VESPA               '],
            ['COD_PROV' => '242', 'DESC_PROV' => 'VOLARE              '],
            ['COD_PROV' => '243', 'DESC_PROV' => 'VOLKSWAGEN          '],
            ['COD_PROV' => '244', 'DESC_PROV' => 'VOLVO               '],
            ['COD_PROV' => '245', 'DESC_PROV' => 'WABCO               '],
            ['COD_PROV' => '246', 'DESC_PROV' => 'WANGYE              '],
            ['COD_PROV' => '247', 'DESC_PROV' => 'WESTERN STAR        '],
            ['COD_PROV' => '248', 'DESC_PROV' => 'WHITE               '],
            ['COD_PROV' => '249', 'DESC_PROV' => 'WILLYS              '],
            ['COD_PROV' => '250', 'DESC_PROV' => 'WOLKEN              '],
            ['COD_PROV' => '251', 'DESC_PROV' => 'XGJAO               '],
            ['COD_PROV' => '252', 'DESC_PROV' => 'XINGYUE             '],
            ['COD_PROV' => '253', 'DESC_PROV' => 'XMOTORS             '],
            ['COD_PROV' => '254', 'DESC_PROV' => 'YAMAHA              '],
            ['COD_PROV' => '255', 'DESC_PROV' => 'YAMAMOTO            '],
            ['COD_PROV' => '256', 'DESC_PROV' => 'YINXIANG            '],
            ['COD_PROV' => '257', 'DESC_PROV' => 'YOUYI               '],
            ['COD_PROV' => '258', 'DESC_PROV' => 'YUE JIN             '],
            ['COD_PROV' => '259', 'DESC_PROV' => 'YUGO                '],
            ['COD_PROV' => '260', 'DESC_PROV' => 'YUTONG              '],
            ['COD_PROV' => '261', 'DESC_PROV' => 'ZANELLAS            '],
            ['COD_PROV' => '262', 'DESC_PROV' => 'ZANELLO             '],
            ['COD_PROV' => '263', 'DESC_PROV' => 'ZASTAVA             '],
            ['COD_PROV' => '264', 'DESC_PROV' => 'ZNEN GROUP          '],
            ['COD_PROV' => '265', 'DESC_PROV' => 'ZONGSHEN            '],
            ['COD_PROV' => '266', 'DESC_PROV' => 'ZOTYE               '],
            ['COD_PROV' => '267', 'DESC_PROV' => 'ZUNDAPP             '],
            ['COD_PROV' => '268', 'DESC_PROV' => 'ZX                  '],
            ['COD_PROV' => '269', 'DESC_PROV' => 'DS AUTOMOBILES      '],
            ['COD_PROV' => '270', 'DESC_PROV' => 'LINHAI              '],
            ['COD_PROV' => '271', 'DESC_PROV' => 'ROYAL ENFIELD       '],
            ['COD_PROV' => '543', 'DESC_PROV' => 'RAM                 '],
            ['COD_PROV' => '544', 'DESC_PROV' => 'ZNA                 '],
            ['COD_PROV' => '545', 'DESC_PROV' => 'DFSK                '],
            ['COD_PROV' => '548', 'DESC_PROV' => 'PALLA               '],
            ['COD_PROV' => '549', 'DESC_PROV' => 'SUPER SOCO          '],
            ['COD_PROV' => '550', 'DESC_PROV' => 'MOTRAC              '],
            ['COD_PROV' => '551', 'DESC_PROV' => 'CORSA               '],
            ['COD_PROV' => '552', 'DESC_PROV' => 'ZONTES              '],
            ['COD_PROV' => '553', 'DESC_PROV' => 'E - TAKASAKI        '],
            ['COD_PROV' => '554', 'DESC_PROV' => 'KARMA               '],
            ['COD_PROV' => '555', 'DESC_PROV' => 'AIMA                '],
            ['COD_PROV' => '557', 'DESC_PROV' => 'GDM                 '],
            ['COD_PROV' => '558', 'DESC_PROV' => 'KYC                 '],
            ['COD_PROV' => '559', 'DESC_PROV' => 'RBS                 '],
            ['COD_PROV' => '560', 'DESC_PROV' => 'SWM                 '],
            ['COD_PROV' => '561', 'DESC_PROV' => 'VOGE                '],
            ['COD_PROV' => '562', 'DESC_PROV' => 'GAC                 '],
            ['COD_PROV' => '563', 'DESC_PROV' => 'JETOUR              '],
            ['COD_PROV' => '564', 'DESC_PROV' => 'SPEED UP            '],
            ['COD_PROV' => '565', 'DESC_PROV' => 'KARRY               '],
            ['COD_PROV' => '566', 'DESC_PROV' => 'WRIGHTBUS           ']
        ];

        foreach($data as $item)
        {
            Marcas::create($item);
        }
    }
}
