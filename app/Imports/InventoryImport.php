<?php

namespace App\Imports;

use App\Inventory;
use Maatwebsite\Excel\Concerns\ToModel;

/* excel with heading */
use Maatwebsite\Excel\Concerns\WithHeadingRow; 

use Carbon\Carbon;

class InventoryImport implements ToModel, WithHeadingRow {
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    // Brand
    public function brand($column) {
        switch($column) {
            case '555';                 return 2; break;
            case 'A3';                  return 3; break;
            case 'Aceclafied';          return 4; break;
            case 'Acer';                return 5; break;
            case 'Alfamart';            return 6; break;
            case 'Alison';              return 7; break;
            case 'Aqua';                return 8; break;
            case 'Araldite';            return 9; break;
            case 'Artline';             return 10; break;
            case 'Asus';                return 11; break;
            case 'ATS';                 return 12; break;
            case 'Avx';                 return 13; break;
            case 'Axeel';               return 14; break;
            case 'Bantex';              return 15; break;
            case 'Baofeng';             return 16; break;
            case 'Benex';               return 17; break;
            case 'Bison';               return 18; break;
            case 'Bitec';               return 19; break;
            case 'Black & D';           return 20; break;
            case 'Borma';               return 21; break;
            case 'Bosch';               return 22; break;
            case 'Broco';               return 23; break;
            case 'Camel';               return 24; break;
            case 'Canon M100';          return 25; break;
            case 'Casio';               return 26; break;
            case 'China';               return 27; break;
            case 'Dacom';               return 28; break;
            case 'Dca';                 return 29; break;
            case 'Deli';                return 30; break;
            case 'Dexsta';              return 31; break;
            case 'Dextone';             return 32; break;
            case 'Drekcell';            return 33; break;
            case 'Dunia Mas';           return 34; break;
            case 'Ekonomi';             return 35; break;
            case 'Entena';              return 36; break;
            case 'Epson';               return 37; break;
            case 'Essen';               return 38; break;
            case 'Eterna';              return 39; break;
            case 'Etona';               return 40; break;
            case 'Excel';               return 41; break;
            case 'F75';                 return 42; break;
            case 'Faber';               return 43; break;
            case 'Fox';                 return 44; break;
            case 'FSK';                 return 45; break;
            case 'GCC';                 return 46; break;
            case 'Genius';              return 47; break;
            case 'Gold Fox';            return 48; break;
            case 'Grebel';              return 49; break;
            case 'Gunindo';             return 50; break;
            case 'Haier';               return 51; break;
            case 'Haston';              return 52; break;
            case 'HP';                  return 53; break;
            case 'Hurica';              return 54; break;
            case 'Imudex';              return 55; break;
            case 'IN3106';              return 56; break;
            case 'Index';               return 57; break;
            case 'Informa';             return 58; break;
            case 'Inspiroy';            return 59; break;
            case 'Joyko';               return 60; break;
            case 'Kangaro';             return 61; break;
            case 'Ken Master';          return 62; break;
            case 'Kenko';               return 63; break;
            case 'Kiki';                return 64; break;
            case 'Kin';                 return 65; break;
            case 'Kingstone';           return 66; break;
            case 'Kingstone Tape';      return 67; break;
            case 'Kirin';               return 68; break;
            case 'Korea';               return 69; break;
            case 'Kris';                return 70; break;
            case 'Krisbow';             return 71; break;
            case 'Laba Laba';           return 72; break;
            case 'Larkin';              return 73; break;
            case 'Leister';             return 74; break;
            case 'Lenovo';              return 75; break;
            case 'LG';                  return 76; break;
            case 'Linex';               return 77; break;
            case 'Lionstar';            return 78; break;
            case 'Logitech';            return 79; break;
            case 'Max';                 return 80; break;
            case 'MDM';                 return 81; break;
            case 'Meiden';              return 82; break;
            case 'Metabo';              return 83; break;
            case 'Mimaki';              return 84; break;
            case 'Molab';               return 85; break;
            case 'MTM';                 return 86; break;
            case 'Multiopro';           return 87; break;
            case 'Mutoh';               return 88; break;
            case 'Nachi Tape';          return 89; break;
            case 'Nelson';              return 90; break;
            case 'Neudelan';            return 91; break;
            case 'Nipon Tape';          return 92; break;
            case 'Nito';                return 93; break;
            case 'Ocean';               return 94; break;
            case 'Onemed';              return 95; break;
            case 'Panasonic';           return 96; break;
            case 'Paperline';           return 97; break;
            case 'Paperone';            return 98; break;
            case 'Pextons';             return 99; break;
            case 'Philip';              return 100; break;
            case 'Piorus';              return 101; break;
            case 'Post It';             return 102; break;
            case 'Prohek';              return 103; break;
            case 'Propan';              return 104; break;
            case 'Rakitan Intel';       return 105; break;
            case 'Repil x';             return 106; break;
            case 'Roland';              return 107; break;
            case 'Rotring';             return 108; break;
            case 'Ryu';                 return 109; break;
            case 'Salery';              return 110; break;
            case 'Samsung';             return 111; break;
            case 'Samurai Paint';       return 112; break;
            case 'Sandplex';            return 113; break;
            case 'Sapord';              return 114; break;
            case 'SC';                  return 115; break;
            case 'SDI';                 return 116; break;
            case 'Seagate';             return 117; break;
            case 'Sensi';               return 118; break;
            case 'Sharp';               return 119; break;
            case 'Shayu';               return 120; break;
            case 'Sidu';                return 121; break;
            case 'Smartfren';           return 122; break;
            case 'Snowman';             return 123; break;
            case 'SPC';                 return 124; break;
            case 'SPS';                 return 125; break;
            case 'Staedtier';           return 126; break;
            case 'Standard';            return 127; break;
            case 'Stanly';              return 128; break;
            case 'Stanvik';             return 129; break;
            case 'Suzuki';              return 130; break;
            case 'Tangit';              return 131; break;
            case 'Targus';              return 132; break;
            case 'Tekiro';              return 133; break;
            case 'Tiger';               return 134; break;
            case 'Tokay';               return 135; break;
            case 'Top';                 return 136; break;
            case 'Toshiba';             return 137; break;
            case 'Toyo';                return 138; break;
            case 'TP-LINK';             return 139; break;
            case 'Turbo';               return 140; break;
            case 'Type Super';          return 141; break;
            case 'Ultra';               return 142; break;
            case 'Uniken';              return 143; break;
            case 'Uticon';              return 144; break;
            case 'Velix';               return 145; break;
            case 'Vezel';               return 146; break;
            case 'Votre';               return 147; break;
            case 'Vtec';                return 148; break;
            case 'WD40';                return 149; break;
            case 'Wipol';               return 150; break;
            case 'Workpro 24"';         return 151; break;
            case 'Xiaomi';              return 152; break;
            case 'Xinta';               return 153; break;
            case 'Zebra';               return 154; break;
            default:                    return 1; break;
        }
    }

    // category
    public function category($column) {
        switch($column) {
            case 'Alat Kerja';          return 2;	break;
            case 'Alat Laser';          return 3;	break;
            case 'Alat Produksi';       return 4;	break;
            case 'ATK';                 return 5;	break;
            case 'Bahan Laser';         return 6;	break;
            case 'Elektronik';          return 7;	break;
            case 'Rumah Tangga';        return 8;   break;
            default:                    return 1;   break;
        }
    }

    // supplier
    public function supplier($column) {
        switch($column) {
            case 'Abdurahman Store';    return 2;   break;
            case 'Akulaku';             return 3;   break;
            case 'BEC';                 return 4;   break;
            case 'Borma';               return 5;   break;
            case 'Marga Cipta';         return 3;   break;
            default:                    return 1;   break;
        }
    }

    public function model(array $row) {
        return new Inventory([
            'name'              => $row['name'],
            'user_id'           => 1, // admin
            'category_id'       => $this->category($row['category']),
            'brand_id'          => $this->brand($row['brand']),
            'supplier_id'       => $this->supplier($row['supplier']),
            'division_id'       => 1, // tidak diketahui
            'unit_price'        => $row['unit_price'],
            'price'             => $row['price'],
            'qty'               => $row['qty'],
            'year_of_purchase'  => $row['year'],
            'serial_number'     => $row['serial_number'],
            'created_at'        => Carbon::now(),
        ]);
    }
}
