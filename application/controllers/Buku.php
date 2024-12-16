<?php  defined('BASEPATH') or exit('gak oleh mlebu');


use chriskacerguis\RestServer\RestController;

class Buku extends RestController
{

    function index_get()
    {
        $data = $this->db->get('data_buku')->result();

        $this->response($data, RestController::HTTP_OK);
        // $data = array(
        //     'judul' => 'Halaman Dashboard',
        //     'data_buku' => $this->buku_model->get_buku()
        // );
        // $this->load->view('templates/header', $data);
        // $this->load->view('dashboard', $data);
        // $this->load->view('templates/footer');
    }

    function tambah_data()
    {
        $data = array(
            'judul' => 'Halaman Tambah Buku'
        );
        $this->load->view('templates/header', $data);
        $this->load->view('tambah');
        $this->load->view('templates/footer');
    }

    function simpan_data()
    {
        $judul = $this->input->post('judul_buku');
        $nama_pengarang = $this->input->post('pengarang_buku');
        $deskripsi = $this->input->post('deskripsi_buku');

        // echo $judul . ' ' . $nama_pengarang . ' ' . $deskripsi;
        $data_buku = array(
            'judul' => $judul,
            'pengarang' => $nama_pengarang,
            'deskripsi' => $deskripsi
        );
        if($this->buku_model->save_book($data_buku)){
            $this->session->set_flashdata('success','Berhasil menambah data');
        } else {
            $this->session->set_flashdata('error','Gagal menambah data');
        }
        redirect('buku');
    }

    function update()
    {
        $where = $this->input->post('id');
        $data_buku = array(
            'judul' => $this->input->post('judul_buku'),
            'pengarang' => $this->input->post('pengarang_buku'),
            'deskripsi' => $this->input->post('deskripsi')
        );
        if($this->buku_model->update($where,$data_buku)){
            $this->session->set_flashdata('success', 'Data berhasil diperbarui!');
        } else {
            $this->session->set_flashdata('error', 'Data gagal diperbarui.');
        }
        redirect('buku');
    }

    function ambil($id)
    {
        $data2['buku'] = $this->buku_model->get_id($id);

        $data = array(
            'judul' => 'Halaman Edit'
        );
        $this->load->view('templates/header', $data);
        $this->load->view('update',$data2);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        // Panggil fungsi model untuk menghapus data
        $delete = $this->buku_model->delete($id);

        // Periksa apakah data berhasil dihapus
        if ($delete) {
            // Set flashdata untuk notifikasi sukses
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        } else {
            // Set flashdata untuk notifikasi gagal
            $this->session->set_flashdata('error', 'Data gagal dihapus.');
        }

        // Redirect ke halaman tertentu setelah penghapusan
        redirect('');
    }
}
