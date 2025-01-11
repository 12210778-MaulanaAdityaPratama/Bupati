   <!-- Modal 1 -->
   <div class="modal" id="modal1">
       <div class="modal-content">
           <ul>
            @foreach ($luas_wilayah as $tp )


               <li><strong>1. Wilayah Daratan (KM²):</strong>{{$tp->daratan}} KM²</li>
               <li><strong>2. Wilayah Perairan (KM²):</strong>{{$tp->perairan}} KM²</li>
               <li><strong>3. Wilayah Khusus(Hutan Lindung, Marga Satwa, dll):</strong> {{$tp->khusus}} KM² </li>
               @endforeach
           </ul>
           <button class="close-modal">Tutup</button>
       </div>
   </div>


   <!-- Modal 2 -->
   <div class="modal" id="modal2">
       <div class="modal-content">
           <ul>
            @foreach ($batas_wilayah as $tp )


               <li><strong>1. Utara:</strong>{{$tp->utara}} KM²</li>
               <li><strong>2. Selatan:</strong>{{$tp->selatan}} KM²</li>
               <li><strong>3. Timur:</strong> {{$tp->timur}} KM²</li>
               <li><strong>4. Barat:</strong> {{$tp->barat}} KM² </li>
               <li><strong>5. Batas:</strong> {{$tp->batas}} KM² </li>
               <li><strong>6. Keterangan:</strong> {{$tp->keterangan}} </li>

               @endforeach
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <!-- Modal 3 -->
   <div class="modal" id="modal3">
       <div class="modal-content">
           <ul>
            @foreach ($jumlah_penduduk as $tp )
               <li><strong>1. Jumlah Kepala Keluarga:</strong> {{$tp->kk}}</li>
               <li><strong>2. Jumlah Laki-laki:</strong> {{$tp->laki_laki}}</li>
               <li><strong>3. Jumlah Perempuan:</strong> {{$tp->perempuan}}</li>
               @endforeach
           </ul>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <!-- Modal 4 -->
   <div class="modal" id="modal4">
       <div class="modal-content">
           <ul>
            @foreach ($luas_kepadatan as $tp )

               <li><strong>1. Jumlah KM²:</strong>{{$tp->jumlah}}</li>
               <li><strong>2. Luas Wilayah (KM²):</strong> {{$tp->luas}}</li>
               <li><strong>3. Kepadatan/(KM²):</strong> {{$tp->kepadatan}}</li>
               @endforeach
           </ul>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal5">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Umur 0-4 th</th>
                   <th>Umur 5-9 th</th>
                   <th>Umur 10-14 th</th>
                   <th>Umur 15-19 th</th>
                   <th>Umur 20-24 th</th>
               </tr>
               <tr>
                @foreach ($penduduk_umur as $tp )

                   <td>{{$tp->thn_0_4thn}} Jiwa</td>
                   <td>{{$tp->thn_5_9thn}} Jiwa</td>
                   <td>{{$tp->thn_10_14thn}} Jiwa</td>
                   <td>{{$tp->thn_15_19thn}} Jiwa</td>
                   <td>{{$tp->thn_20_24thn}} Jiwa</td>
                   @endforeach
               </tr>
               <tr>
                   <th>Umur 25-29 th</th>
                   <th>Umur 30-34 th</th>
                   <th>Umur 35-39 th</th>
                   <th>Umur 40-59 th</th>
                   <th>Umur >60 th</th>
               </tr>
               <tr>
                @foreach ($penduduk_umur as $tp )

                   <td>{{$tp->thn_25_29thn}} Jiwa</td>
                   <td>{{$tp->thn_30_34thn}} Jiwa</td>
                   <td>{{$tp->thn_35_39thn}} Jiwa</td>
                   <td>{{$tp->thn_40_59thn}} Jiwa</td>
                   <td>{{$tp->thn_60thn}} Jiwa</td>
                   @endforeach

               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal6">
       <div class="modal-content">
           <table>
               <tr>
                   <th>PNS</th>
                   <th>TNI</th>
                   <th>POLRI</th>
                   <th>PETANI</th>
               </tr>
               <tr>
                @foreach ($pekerjaan_penduduk as $tp )

                   <td>{{$tp->pns}} Jiwa</td>
                   <td>{{$tp->tni}} Jiwa</td>
                   <td>{{$tp->polri}} Jiwa</td>
                   <td>{{$tp->petani}} Jiwa</td>
                   @endforeach
               </tr>
               <tr>
                   <th>NELAYAN</th>
                   <th>PEDAGANG</th>
                   <th>BURUH</th>
                   <th>LAIN-LAIN</th>
               </tr>
               <tr>
                @foreach ($pekerjaan_penduduk as $tp )

                <td>{{$tp->nelayan}} Jiwa</td>
                <td>{{$tp->pedagang}} Jiwa</td>
                <td>{{$tp->buruh}} Jiwa</td>
                <td>{{$tp->lain}} Jiwa</td>
                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal7">
       <div class="modal-content">
           <table>
               <tr>
                   <th>ISLAM</th>
                   <th>KRISTEN</th>
                   <th>KHATOLIK</th>
               </tr>
               <tr>
                @foreach ($penduduk_agama as $tp )

                <td>{{$tp->islam}} Jiwa</td>
                <td>{{$tp->kristen}} Jiwa</td>
                <td>{{$tp->katolik}} Jiwa</td>
                @endforeach
               </tr>
               <tr>
                   <th>HINDU</th>
                   <th>BUDHA</th>
                   <th>KONGHUCU</th>
               </tr>
               <tr>
                @foreach ($penduduk_agama as $tp )

                <td>{{$tp->hindu}} Jiwa</td>
                <td>{{$tp->budha}} Jiwa</td>
                <td>{{$tp->konghucu}} Jiwa</td>
                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal8">
       <div class="modal-content">
           <table>
               <tr>
                   <th>JAWA</th>
                   <th>MELAYU</th>
                   <th>BUGIS</th>
                   <th>DAYAK</th>
               </tr>
               <tr>

                @foreach ($penduduk_suku as $tp )

                <td>{{$tp->jawa}} Jiwa</td>
                <td>{{$tp->melayu}} Jiwa</td>
                <td>{{$tp->bugis}} Jiwa</td>
                <td>{{$tp->dayak}} Jiwa</td>
                @endforeach
               </tr>
               <tr>
                   <th>CHINA</th>
                   <th>SUNDA</th>
                   <th>MADURA</th>
                   <th>BATAK</th>
               </tr>
               <tr>
                @foreach ($penduduk_suku as $tp )

                <td>{{$tp->cina}} Jiwa</td>
                <td>{{$tp->sunda}} Jiwa</td>
                <td>{{$tp->madura}} Jiwa</td>
                <td>{{$tp->batak}} Jiwa</td>
                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal9">
       <div class="modal-content">
        <table>
        <tr>
            <th>Jumlah Penduduk Tahun Ini</th>
            <th>Jumlah Penduduk Tahun Lalu</th>
            <th>Jumlah Pertumbuhan (%)</th>

        </tr>
        <tr>

         @foreach ($penduduk_pertumbuhan as $tp )

         <td>{{$tp->jumlah_penduduk_thn_ini}} Jiwa</td>
         <td>{{$tp->jumlah_penduduk_thn_lalu}} Jiwa</td>
         <td>{{$tp->pertumbuhan}} %</td>

         @endforeach
        </tr>
        </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal10">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Tidak Tamat SD</th>
                   <th>Tamat SD</th>
                   <th>Tamat SLTP</th>
               </tr>
               <tr>
                @foreach ($penduduk_pendidikan as $tp )

                <td>{{$tp->tidak_sekolah}} Jiwa</td>
                <td>{{$tp->sd}} Jiwa</td>
                <td>{{$tp->smp}} Jiwa</td>

                @endforeach
               </tr>
               <tr>
                   <th>Tamat SLTA</th>
                   <th>Tamat AKADEMI & SEKOLAH TINGGI</th>
                   <th>Tamat UNIVERSITAS</th>
               </tr>
               <tr>
                @foreach ($penduduk_pendidikan as $tp )

                <td>{{$tp->sma}} Jiwa</td>
                <td>{{$tp->akademi}} Jiwa</td>
                <td>{{$tp->universitas}} Jiwa</td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal11">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Padi</th>
                   <th>Jagung</th>
                   <th>Ubi Kayu</th>
                   <th>Kacang Panjang</th>
                   <th>Kangkung</th>
                   <th>Cabe</th>
               </tr>
               <tr>
                @foreach ($lahan_garapan as $tp )

                   <td>{{$tp->padi}} Ha</td>
                   <td>{{$tp->jagung}} Ha</td>
                   <td>{{$tp->ubi_kayu}} Ha</td>
                   <td>{{$tp->kacang_panjang}} Ha</td>
                   <td>{{$tp->kangkung}} Ha</td>
                   <td>{{$tp->cabe}} Ha</td>
                   @endforeach
               </tr>
               <tr>
                   <th>Jeruk Nipis</th>
                   <th>Terong</th>
                   <th>Mentimun</th>
                   <th>Talas</th>
                   <th>Tomat</th>
                   <th>Kacang Tanah</th>
               </tr>
               <tr>
                @foreach ($lahan_garapan as $tp )

                   <td>{{$tp->jeruk_nipis}} Ha</td>
                   <td>{{$tp->terong}} Ha</td>
                   <td>{{$tp->mentimun}} Ha</td>
                   <td>{{$tp->talas}} Ha</td>
                   <td>{{$tp->tomat}} Ha</td>
                   <td>{{$tp->kacang_tahan}} Ha</td>
                   @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal12">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Tanah Sawah</th>
                   <th>Tanah Kering</th>
                   <th>Tanah Basah</th>
               </tr>
               <tr>
                @foreach ($penggunaan_tanah as $tp )

                   <td>{{$tp->tanah_sawah}} Ha</td>
                   <td>{{$tp->tanah_kering}} Ha</td>
                   <td>{{$tp->tanah_basah}} Ha</td>
                   @endforeach
               </tr>
               <tr>
                   <th>Tanah Perkebunan</th>
                   <th>Tanah Fasilitas Umum</th>
                   <th>Tanah Hutan</th>
               </tr>
               <tr>
                @foreach ($penggunaan_tanah as $tp )

                <td>{{$tp->tanah_perkebunan}} Ha</td>
                <td>{{$tp->tanah_fasilitas}} Ha</td>
                <td>{{$tp->tanah_hutan}} Ha</td>
                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal13">
       <div class="modal-content">
           <table>
               <tr>

                   <th>Kambing</th>
                   <th>Babi</th>
                   <th>Domba</th>
               </tr>
               <tr>
                @foreach ($ternak_kecil as $tk )


                   <td>{{$tk->kambing}}</td>
                   <td>{{$tk->babi}}</td>
                   <td>{{$tk->domba}}</td>

                   @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal14">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Sapi</th>
                   <th>Kerbau</th>
                   <th>Kuda</th>
               </tr>
               <tr>
                @foreach ($ternak_besar as $tb )


                <td>{{$tb->sapi}}</td>
                <td>{{$tb->kerbau}}</td>
                <td>{{$tb->kuda}}</td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal15">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Ayam Kampung</th>
                   <th>Ayam Ras</th>
                   <th>Bebek</th>
                   <th>Angsa</th>
                   <th>Kelinci</th>
               </tr>
               <tr>
                @foreach ($ternak_unggas as $tu )


                <td>{{$tu->ayam_kampung}}</td>
                <td>{{$tu->ayam_ras}}</td>
                <td>{{$tu->bebek}}</td>
                <td>{{$tu->angsa}}</td>
                <td>{{$tu->kelinci}}</td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal16">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Ternak Besar</th>
                   <th>Ternak Kecil</th>
                   <th>Ternak Unggas</th>
                   <th>Rumah Pemotongan Ayam</th>
                   <th>Pakan Ternak</th>
                   <th>Usaha Bibit</th>
               </tr>
               <tr>
                @foreach ($usaha_peternakan as $up )


                <td>{{$up->peternakan_besar}}</td>
                <td>{{$up->peternakan_kecil}}</td>
                <td>{{$up->ternak_unggas}}</td>
                <td>{{$up->pemotongan_ayam}}</td>
                <td>{{$up->pakan_ternak}}</td>
                <td>{{$up->usaha_bibit}}</td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal17">
       <div class="modal-content">
           <table>
               <tr>
                   <th>JENIS ALAT TANGGAP</th>
               </tr>
               <tr>
                @foreach ($alat_tangkap as $at )


                <td>{{$at->alat_tangkap}}</td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal18">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Perairan</th>
                   <th>Tambak</th>
                   <th>Kolam</th>
                   <th>Mina Padi</th>
               </tr>
               <tr class="divider"></tr>
               <tr>
                @foreach ($perikanan_darat as $pd )


                <td>{{$pd->perairan}} Ha</td>
                <td>{{$pd->tambak}} Ha</td>
                <td>{{$pd->kolam}} Ha</td>
                <td>{{$pd->mina_padi}} Ha</td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal19">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Sampan</th>
                   <th>Motor Tempel</th>
                   <th>Kapal Motor<br>0-5 GT</th>
                   <th>Kapal Motor<br>>5 GT</th>
               </tr>
               <tr>
                   <td>269 Unit</td>
                   <td>180 Unit</td>
                   <td>0 Unit</td>
                   <td>0 Unit</td>
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal20">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Kelapa</th>
                   <th>Karet</th>
                   <th>Kelapa Sawit</th>
                   <th>Coklat</th>
                   <th>Tebu</th>
               </tr>
               <tr>
                @foreach ($tanah_perkebunan as $tp )


                <td>{{$tp->kelapa}} Ha</td>
                <td>{{$tp->karet}} Ha</td>
                <td>{{$tp->kelapa_sawit}} Ha</td>
                <td>{{$tp->coklat}} Ha</td>
                <td>{{$tp->tebu}} Ha</td>

                @endforeach
               </tr>
               <tr>
                   <th>Pinang</th>
                   <th>Sagu</th>
                   <th>Pala</th>
                   <th>Kopi</th>
                   <th>Sahang</th>
               </tr>
               <tr>
                @foreach ($tanah_perkebunan as $tp )


                <td>{{$tp->pinang}} Ha</td>
                <td>{{$tp->sagu}} Ha</td>
                <td>{{$tp->pala}} Ha</td>
                <td>{{$tp->kopi}} Ha</td>
                <td>{{$tp->sahang}} Ha</td>


                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal21">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($hasil_produksi_perkebunan as $tp )
                <th>{{$tp->jenis_perkebunan}}</th>
                @endforeach
               </tr>
               <tr>
                @foreach ($hasil_produksi_perkebunan as $tp )
                <td>{{$tp->jumlah}} Ha</td>

                @endforeach
            </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal22">
       <div class="modal-content">
        <table>
            <tr>
             @foreach ($luas_hutan_menurut_penggunaan as $tp )
             <th>{{$tp->jenis_hutan}}</th>
             @endforeach
            </tr>
            <tr>
             @foreach ($luas_hutan_menurut_penggunaan as $tp )
             <td>{{$tp->status}}</td>

             @endforeach
         </tr>
        </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal23">
       <div class="modal-content">
        <table>
            <tr>
             @foreach ($luas_hutan_menurut_status as $tp )
             <th>{{$tp->jenis_hutan}}</th>
             @endforeach
            </tr>
            <tr>
             @foreach ($luas_hutan_menurut_status as $tp )
             <td>{{$tp->jumlah}} Ha</td>

             @endforeach
         </tr>
        </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal24">
       <div class="modal-content">
        <table>
            <tr>
             @foreach ($tambang_galian as $tp )
             <th>{{$tp->nama}}</th>
             @endforeach
            </tr>
            <tr>
             @foreach ($tambang_galian as $tp )
             <td>{{$tp->status}}</td>

             @endforeach
         </tr>
        </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal25">
       <div class="modal-content">
        <table>
            <tr>
             @foreach ($usaha_tambang_galian as $tp )
             <th>{{$tp->nama}}</th>
             @endforeach
            </tr>
            <tr>
             @foreach ($usaha_tambang_galian as $tp )
             <td>{{$tp->jumlah}}</td>

             @endforeach
         </tr>
        </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal26">
       <div class="modal-content">
        <table>
            <tr>
             @foreach ($pengelolaan_pangan as $tp )
             <th>{{$tp->nama}}</th>
             @endforeach
            </tr>
            <tr>
             @foreach ($pengelolaan_pangan as $tp )
             <td>{{$tp->jumlah}}</td>

             @endforeach
         </tr>
        </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal27">
       <div class="modal-content">
        <table>
            <tr>
             @foreach ($jumlah_indurstri_perabotan as $tp )
             <th>{{$tp->nama}}</th>
             @endforeach
            </tr>
            <tr>
             @foreach ($jumlah_indurstri_perabotan as $tp )
             <td>{{$tp->jumlah}}</td>

             @endforeach
         </tr>
        </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal28">
       <div class="modal-content">
        <table>
            <tr>
             @foreach ($aktivitas_perekonomian as $tp )
             <th>{{$tp->nama}}</th>
             @endforeach
            </tr>
            <tr>
             @foreach ($aktivitas_perekonomian as $tp )
             <td>{{$tp->jumlah}}</td>

             @endforeach
         </tr>
        </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal29">
       <div class="modal-content">
        <table>
            <thead>
                <tr>
                    <th>NAMA OBYEK WISATA</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jumlah_obyek_wisata as $tp )
                <tr>
                    <td>{{$tp->nama_obyek}}</td>
                    <td>{{$tp->jumlah}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal4">
       <div class="modal-content">
           <ul>
               <li><strong>1. Jumlah KM²:</strong> 5,612</li>
               <li><strong>2. Luas Wilayah (KM²):</strong> 929,30</li>
               <li><strong>3. Kepadatan/(KM²):</strong> 76,62</li>
           </ul>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal30">
       <div class="modal-content">
           <table>
               <tr>
                   <th>NAMA SANGGAR BUDAYA</th>
                   <th>Jumlah</th>
               </tr>
               <tr>
                @foreach ($jumlah_sanggar_budaya as $tp )
                <tr>
                    <td>{{$tp->nama}}</td>
                </tr>
                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal31">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($jumlah_fasilitas_kesehatan as $tp )
                <th>{{$tp->nama}}</th>
                @endforeach
               </tr>
               <tr>
                @foreach ($jumlah_fasilitas_kesehatan as $tp )
                <td>{{$tp->jumlah}}</td>

                @endforeach
            </tr>
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal32">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($jumlah_tenaga_kesehatan as $tp )
                <th>{{$tp->nama}}</th>
                @endforeach
               </tr>
               <tr>
                @foreach ($jumlah_tenaga_kesehatan as $tp )
                <td>{{$tp->jumlah}}</td>

                @endforeach
            </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal33">
    <div class="modal-content">
        <table>


            <tr>
                @foreach ($airbersih as $air )
                <th>{{$air->nama}}</th>

                @endforeach
            </tr>
            <tr>
                @foreach ($airbersih as $air )


                <td>{{$air->jumlah}}</td>

                @endforeach
            </tr>
         </table>
        <button class="close-modal">Tutup</button>
    </div>
</div>

   <div class="modal" id="modal34">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($jumlah_sarana_ibadag as $tp )
                <th>{{$tp->sarana_ibadah}}</th>
                @endforeach
               </tr>
               <tr>
                @foreach ($jumlah_sarana_ibadag as $tp )
                <td>{{$tp->jumlah}}</td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal35">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($panjang_jalan as $tp )
                <th>{{$tp->nama}}</th>
                @endforeach
               </tr>
               <tr>
                @foreach ($panjang_jalan as $tp )
                <td>{{$tp->panjang}}</td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal36">
       <div class="modal-content">
           <table>
               <thead>
                   <tr>
                       <th colspan="2">Fasilitas Pendukung</th>
                   </tr>
               </thead>
               @foreach ($jumlah_fasilitas_pendukung as $tp )
             <th>{{$tp->nama}}</th>
             @endforeach
            </tr>
            <tr>
             @foreach ($jumlah_fasilitas_pendukung as $tp )
             <td>{{$tp->jumlah}}</td>

             @endforeach
         </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal37">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($ekonomi_angkatan_kerja as $tp )
                <th>{{$tp->nama}}</th>
                @endforeach
               </tr>
               <tr>
                @foreach ($ekonomi_angkatan_kerja as $tp )
                <td>{{$tp->jumlah}}</td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal38">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($jumlah_angkatan_kerja as $tp )
                <th>{{$tp->nama}}</th>
                @endforeach
               </tr>
               <tr>
                @foreach ($jumlah_angkatan_kerja as $tp )
                <td>{{$tp->jumlah}}</td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal39">
       <div class="modal-content">
           <table>
               <tr>
                   <th rowspan="2">Jumlah Penduduk</th>
                   <th colspan="4">Jumlah Pelanggan Listrik</th>
               </tr>
               <tr>
                   <th>PLN</th>
                   <th>Non PLN</th>
                   <th>Jumlah</th>
                   <th>Rasio</th>
               </tr>
               <tr>
                @foreach ($jumlah_pelanggan_listrik as $tp )

                <td>{{ $tp->jumlah_penduduk}}</td>
                <td>{{$tp->pln}}</td>
                <td>{{$tp->non_pln}}</td>
                <td>{{ $tp->jumlah_pln }}</td> <!-- Total PLN + Non-PLN -->
                <td>{{ number_format($tp->rasio, 2) }}%</td> <!-- Rasio dalam persen -->
                 @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal40">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Jumlah Penduduk (KK)</th>
                   <th>Jumlah Penduduk Miskin (kk)</th>
                   <th>Rasio</th>
               </tr>
               <tr>
                @foreach ($jumlah_penduduk_miskin as $tp )

                <td>{{$tp->jumlah_penduduk}}</td>
                <td>{{$tp->jumlah_penduduk_miskin}}</td>
                <td>{{ number_format($tp->rasio, 2) }}%</td> <!-- Rasio dalam persen -->
                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal41">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($jumlah_fasilitas_pendidikan as $tp )
                <th>{{$tp->nama}}</th>
                @endforeach
               </tr>
               <tr>
                @foreach ($jumlah_fasilitas_pendidikan as $tp )
                <td>{{$tp->jumlah}}</td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal42">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($jumlah_anak_usia_sekolah as $tp)

                <th colspan="5">{{$tp->kategori}}</th>
                @endforeach


               </tr>
               <tr>
                   <td>TK</td>
                   <td>SD</td>
                   <td>SLTP</td>
                   <td>SLTA</td>
                   <td>Perguruan Tinggi</td>
                   <td>TK</td>
                   <td>SD</td>
                   <td>SLTP</td>
                   <td>SLTA</td>
                   <td>Perguruan Tinggi</td>

               </tr>
               <tr>
                @foreach ($jumlah_anak_usia_sekolah as $tp )

                <td>{{$tp->tk}}</td>
                <td>{{$tp->sd}}</td>
                <td>{{$tp->sltp}}</td>
                <td>{{$tp->slta}}</td>
                <td>{{$tp->perguruan_tinggi}}</td>
                   @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal43">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($jumlah_anak_sekolah as $tp)

                <th colspan="6">{{$tp->kategori}}</th>
                @endforeach
               </tr>
               <tr>
                   <td>SD</td>
                   <td>MI</td>
                   <td>SLTP</td>
                   <td>MTS</td>
                   <td>SLTA</td>
                   <td>ALIYAH</td>

                   <td>SD</td>
                   <td>MI</td>
                   <td>SLTP</td>
                   <td>MTS</td>
                   <td>SLTA</td>
                   <td>ALIYAH</td>
               </tr>
               <tr>
                @foreach ($jumlah_anak_sekolah as $tp)

                <td>{{$tp->sd}}</td>
                <td>{{$tp->mi}}</td>
                <td>{{$tp->sltp}}</td>
                <td>{{$tp->mts}}</td>
                <td>{{$tp->slta}}</td>
                <td>{{$tp->aliyah}}</td>

                @endforeach
            </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal44">
       <div class="modal-content">
           <table>
               <tr>
                   <th colspan="3">Tingkat Guru</th>
                   <th colspan="2">Status Guru</th>
               </tr>
               <tr>
                   <td>SD</td>
                   <td>SLTP</td>
                   <td>SLTA</td>
                   <td>Negeri</td>
                   <td>Swasta</td>
               </tr>
               <tr>

                 @foreach ($jumlah_tenaga_guru as $tp)

                <td>{{$tp->sd}}</td>
                <td>{{$tp->sltp}}</td>
                <td>{{$tp->slta}}</td>
                <td>{{$tp->negeri}}</td>
                <td>{{$tp->swasta}}</td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal45">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($jumlah_tenaga_guru_menurut_pendidikan as $tp )


                   <th>{{$tp->nama}}</th>

               </tr>
               <tr>
                   <td> {{$tp->jumlah}} </td>

                   @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal46">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($jumlah_pemilik_kendaraan as $tp )


                <th>{{$tp->nama}}</th>
                @endforeach

            </tr>
            <tr>
                @foreach ($jumlah_pemilik_kendaraan as $tp )

                <td> {{$tp->jumlah}} </td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal47">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($jarak_waktu_tempuh as $tp )


                <th>{{$tp->nama}}</th>
                @endforeach
               </tr>
               <tr>
                @foreach ($jarak_waktu_tempuh as $tp )

                <td> {{$tp->jumlah}} </td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal48">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Jumlah Tower</th>
                   <th>Keterangan</th>
               </tr>
               <tr>
                @foreach ($jarak_waktu_tempuh as $tp )

                <td> {{$tp->jumlah}} </td>
                <td> {{$tp->keterangan}} </td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal49">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($prasarana_pemerintahan_desa as $tp )


                <th>{{$tp->nama}}</th>
                @endforeach
               </tr>
               <tr>
                @foreach ($prasarana_pemerintahan_desa as $tp )

                <td> {{$tp->keterangan}} </td>

                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal50">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Camat</th>
                   <th>Sekcam</th>
                   <th>Staff Kecamatan</th>
                   <th>Jumlah</th>
               </tr>
               <tr>
                @foreach ($pemerintahan_kecamatan as $tp )

                <td> {{$tp->camat}} </td>
                <td> {{$tp->sekcam}} </td>
                <td> {{$tp->staff}} </td>
                <td> {{$tp->jumlah}} </td>
                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal51">
       <div class="modal-content">
           <table>
               <tr>
                @foreach ($tingkat_pendidikan_aparat_kecamatan as $tp )


                <th>{{$tp->nama}}</th>
                   @endforeach
               </tr>
               <tr>
                @foreach ($tingkat_pendidikan_aparat_kecamatan as $tp )

                <td>{{$tp->tingkat_pendidikan}}</td>
                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal52">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Golongan I</th>
                   <th>Golongan II</th>
                   <th>Golongan III</th>
                   <th>Golongan IV</th>
                   <th>Jumlah</th>
               </tr>
               <tr>
                @foreach ($pangkatdan_golongan as $tp )

                <td> {{$tp->i}} </td>
                <td> {{$tp->ii}} </td>
                <td> {{$tp->iii}} </td>
                <td> {{$tp->iv}} </td>
                <td> {{$tp->jumlah}} </td>
                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal53">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Jumlah Staff</th>
               </tr>
               <tr>
                @foreach ($jumlah_staff as $tp )

                <td> {{$tp->jumlah_staff}} </td>
                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal54">
       <div class="modal-content">
           <table>
               <tr>
                   <th rowspan="2">Nama Prasarana</th>
                   <th rowspan="2">Jumlah</th>
                   <th colspan="3">Kondisi</th>
               </tr>
               <tr>
                   <th>Baik</th>
                   <th>Rusak Ringan</th>
                   <th>Rusak Berat</th>
               </tr>
               <tr>
                @foreach ($prasarana_pemerintahan as $tp )

                <td> {{$tp->nama}} </td>
                <td> {{$tp->jumlah}} </td>
                <td> {{$tp->baik}} </td>
                <td> {{$tp->ringan}} </td>
                <td> {{$tp->berat}} </td>
                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal55">
       <div class="modal-content">
           <table>
               <tr>
                   <th>Uraian</th>
                   <th>Keterangan</th>
               </tr>
               <tr>
                @foreach ($pelaksanaan_profil_kecamatan as $tp )

                   <td>{{$tp->uraian}}</td>
                   <td>{{$tp->keterangan}}</td>
                @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>

   <div class="modal" id="modal56">
       <div class="modal-content">
           <table>
               <tr>
                   <th rowspan="2">Uraian</th>
                   <th rowspan="2">Jumlah</th>
                   <th colspan="2" class="keterangan-header">Keterangan</th>
               </tr>
               <tr>
                   <th>Sertifikat</th>
                   <th>SKT</th>
               </tr>
               <tr>
                @foreach ($tanah_pemda_di_kecamatan as $tp )

                   <td>{{$tp->uraian}}</td>
                   <td>{{$tp->jumlah}}</td>
                   <td>{{$tp->sertifikat}}</td>
                   <td>{{$tp->skt}}</td>
                   @endforeach
               </tr>
           </table>
           <button class="close-modal">Tutup</button>
       </div>
   </div>
