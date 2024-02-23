<?php defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    public function reservasi()
    {
        $query = "  SELECT
                    data_user.*,
                    reservasi.*,
                    reservasi.id as id_reservasi,
                    layanan.id,
                    layanan.layanan
                    FROM
                    reservasi
                    LEFT JOIN
                    data_user
                    ON
                    data_user.id = reservasi.id_user
                    LEFT JOIN
                                    layanan ON layanan.id = reservasi.id_layanan
                                    WHERE
                                    data_user.active = 1
                                    ORDER BY
                                    reservasi.id DESC";

        $res = $this->db->query($query);
        return $res->result_array();
    }

    public function pemeriksaan($date)
    {
        $query = "SELECT
                    reservasi.*,
					data_user.*,
                    reservasi.status status_reservasi,
                    reservasi.id id_reservasi,
                    data_user.id as iduser,
					layanan.layanan
                    FROM
                    reservasi
                    LEFT JOIN
                    data_user
                    ON
                    data_user.id = reservasi.id_user
                    LEFT JOIN
                    rekam_medis
                    ON
                    rekam_medis.id_user = reservasi.id_user
                    LEFT JOIN
					layanan
					ON
					layanan.id = reservasi.id_layanan
                    WHERE
                    data_user.active = 1
                    AND
                    reservasi.tanggal_terapi LIKE '%" . $date . "%'
                    GROUP BY reservasi.tanggal_terapi,data_user.id
                    ";

        $res = $this->db->query($query);
        return $res->result_array();
    }
    public function pembayaran($date)
    {
        $query = "SELECT
                    *,
                    reservasi.status status_reservasi,
                    nota.status_pembayaran status_payment,
                    reservasi.id id_reservasi,
                    data_user.id as iduser
                    FROM
                    reservasi
                    LEFT JOIN
                    data_user
                    ON
                    data_user.id = reservasi.id_user
                    LEFT JOIN
                    rekam_medis
                    ON
                    rekam_medis.id_user = reservasi.id_user
                    LEFT JOIN
                    nota
                    ON nota.id_reservasi = reservasi.id
                    LEFT JOIN 
                    history_transaksi
                    ON history_transaksi.id_reservasi = reservasi.id
                    WHERE
                    data_user.active = 1
                    AND
                    reservasi.tanggal_terapi LIKE '%" . $date . "%'
                    AND 
                    reservasi.status = 1
                  
                    GROUP BY reservasi.tanggal_terapi,data_user.id
                    ORDER BY reservasi.id asc
                    ";
        // var_dump($query);
        // die;
        $res = $this->db->query($query);
        return $res->result_array();
    }

    public function resep($id_reservasi)
    {
        $query = "SELECT
                    *
                    FROM
                    resep
                    LEFT JOIN
                    data_obat ON data_obat.id = resep.id_vitamin
                    WHERE
                    resep.id_reservasi = " . $id_reservasi . "";
        $res = $this->db->query($query)->result_array();
        return $res;
    }
    public function layanan($id_reservasi)
    {
        $query = "SELECT
                    *
                    FROM
                    reservasi
                    LEFT JOIN
                    layanan ON layanan.id = reservasi.id_layanan
                    WHERE
                    reservasi.id = " . $id_reservasi . "";
        $res = $this->db->query($query)->result_array();
        return $res;
    }


    public function userRegistered($mulai, $sampai)
    {
        $query = "  SELECT
                    *
                    FROM
                    data_user
                    WHERE
                    active = 1
                    AND
                    date_created BETWEEN '" . $mulai . "' AND '" . $sampai . "'";

        $res = $this->db->query($query);
        return $res;
    }
    public function tableReservasi($mulai, $sampai)
    {
        $query = "  SELECT
                    *,
                    reservasi.`status` as status_reservasi,
                    reservasi.id id_reservasi
                    FROM
                    reservasi
                    LEFT JOIN
                    data_user
                    ON data_user.id = reservasi.id_user
                    LEFT JOIN
                    layanan
                    ON
                    layanan.id = reservasi.id_layanan
                    WHERE
                    data_user.active = 1
                    AND
                    tanggal_terapi BETWEEN '" . $mulai . "' AND '" . $sampai . "'";

        $res = $this->db->query($query);
        return $res;
    }
    public function historyPembayaran($mulai, $sampai, $mulaiUser, $sampaiUser)
    {
        $query = "  SELECT
                    *,
                    reservasi.status status_reservasi,
                    nota.status_pembayaran status_payment,
                    reservasi.id id_reservasi,
                    data_user.id as iduser
                    FROM
                    reservasi
                    LEFT JOIN
                    data_user
                    ON
                    data_user.id = reservasi.id_user
                    LEFT JOIN
                    rekam_medis
                    ON
                    rekam_medis.id_user = reservasi.id_user
                    LEFT JOIN
                    nota
                    ON nota.id_reservasi = reservasi.id
                    LEFT JOIN 
                    history_transaksi
                    ON history_transaksi.id_reservasi = reservasi.id
                    WHERE
                    data_user.active = 1
                    AND
                    reservasi.tanggal_terapi BETWEEN '" . $mulaiUser . "' AND '" . $sampaiUser . "'
                   
                    AND 
                    reservasi.status = 1
                  
                    GROUP BY reservasi.tanggal_terapi,data_user.id
                    ORDER BY reservasi.id asc";
        // var_dump($query);
        // die;
        $res = $this->db->query($query);
        return $res;
    }
    public function tablePemeriksaan($mulai, $sampai)
    {
        $query = "  SELECT
                    reservasi.*,
					data_user.*,
                    reservasi.status status_reservasi,
                    reservasi.id id_reservasi,
                    data_user.id as iduser,
					layanan.layanan
                    FROM
                    reservasi
                    LEFT JOIN
                    data_user
                    ON
                    data_user.id = reservasi.id_user
                    LEFT JOIN
                    rekam_medis
                    ON
                    rekam_medis.id_user = reservasi.id_user
                    LEFT JOIN
					layanan
					ON
					layanan.id = reservasi.id_layanan
                    WHERE
                    data_user.active = 1
                    AND
                    reservasi.tanggal_terapi BETWEEN '" . $mulai . "' AND '" . $sampai . "'
                    GROUP BY reservasi.tanggal_terapi,data_user.id";

        $res = $this->db->query($query);
        return $res;
    }
    public function rekam_medis_pasien($id_user)
    {
        $query = "  SELECT
                    data_user.nama,
                    reservasi.tanggal_terapi,
                    rekam_medis.layanan,
                    rekam_medis.mata_kanan_minus,
                    rekam_medis.mata_kiri_minus,
                    rekam_medis.mata_kanan_plus,
                    rekam_medis.mata_kiri_plus,
                    rekam_medis.buta_warna,
                    rekam_medis.buta_warna_parsial,
                    rekam_medis.buta_warna_total,
                    rekam_medis.lampu15Titik,
                    rekam_medis.lampuTerangGelap,
                    rekam_medis.stikMagnet,
                    rekam_medis.osilatorListrik,
                    rekam_medis.snelled,
                    rekam_medis.kesimpulan,
                    data_obat.nama_obat
                    FROM
                    rekam_medis
                    LEFT JOIN
                    reservasi
                    ON reservasi.id = rekam_medis.id_reservasi
                    LEFT JOIN
                    data_user
                    ON
                    data_user.id = rekam_medis.id_user
                    LEFT JOIN
                    data_obat
                    ON
                    data_obat.id = rekam_medis.obat
                    WHERE
                    rekam_medis.id_user = $id_user
                    ORDER BY rekam_medis.id desc
                    ";

        $res = $this->db->query($query);
        return $res;
    }
}
