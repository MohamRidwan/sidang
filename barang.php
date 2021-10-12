<?php
    class Barang extends Database
    {

        public function index()
        {
            $databarang = mysqli_query($this->koneksi, "select * from barang");

            return $databarang;
        }
        public function barang_rusak()
        {
            $databarang = mysqli_query($this->koneksi, "select * from barang where status='rusak'");

            return $databarang;
        }
        public function barang_bagus()
        {
            $databarang = mysqli_query($this->koneksi, "select * from barang where status='bagus'");

            return $databarang;
        }
        public function data_room($ruangan)
        {
            $databarang = mysqli_query($this->koneksi, "select * from barang where ruangan='$ruangan'");

            return $databarang;
        }
        public function create($ruangan,$nama_barang,$status,$jumlah)
        {
            mysqli_query($this->koneksi,
            "insert into barang values (null,'$ruangan','$nama_barang','$status','$jumlah')"
                    );

        }
        public function edit($id)
        {
            $databarang = mysqli_query($this->koneksi, 
                        "select * from barang where id='$id'"
                    );


            return $databarang;
        }
        public function update($id,$ruangan,$nama_barang, $status, $jumlah)
        {
            mysqli_query(
                $this->koneksi,
                "update barang set ruangan='$ruangan',nama_barang='$nama_barang',status='$status',jumlah='$jumlah' where id='$id'"
            );
        }
        public function delete($id)
        {
            mysqli_query($this->koneksi, "delete from barang where id='$id'"
                    );

        }
        
    }
?>