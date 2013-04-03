<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Laba Rugi Project <b> <?php if ($projectname['Project']['name'] != ''):
                                                        echo $projectname['Project']['name'];
                                                        else:
                                                            echo '';
                                                        endif;
                                                        ?>

                                                        <b></h3>
        <?php echo $this->Form->create('Jurnal', array('class' => 'form_validation_ttip'));?>
        <div class="row-fluid">
            <div class="span12">
                <div style="display: inline-block">
                    <?php echo $this->Form->input('project_id', array('label' => 'Nama Project','type' => 'select', 'class' => 'chzn_master_project ')); ?>
                </div>
                <input type="submit" value="Cari" class="btn">   </input>
             </div>
        </div>
        <br/>
        <?php 
        if ($neraca_kas != 0): ?>
        <label> <b> Neraca Kas Bersih : <u> <?php echo $this->Number->currency(($neraca_kas),'RP');  ?> </u></b> </label> 
        <br/>
        <table class="table table-bordered table-striped table_vam" id="">
             <thead>
                <tr>
                    <th>REF</th>
                    <th>Deskripsi Pemasukan</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($penjualan as $total): ?>
                    <tr>
                        <td>101</td>
                        <td>Total Penjualan Unit</td>
                        <td><?php echo $this->Number->currency(($total[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                    <tr>
                        <td colspan="2"><b>Total Pemasukan</b></td>
                        <td><?php echo $this->Number->currency(($total_pemasukan[0][0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
             <thead>
                <tr>
                    <th>REF</th>
                    <th>Deskripsi Pengeluaran</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
                <?php
                    foreach ($pembebasan_tanah as $x): ?>
                    <tr>
                        <td>201</td>
                        <td>Pembebasan Tanah</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($pbb as $x): ?>
                    <tr>
                        <td>202</td>
                        <td>Penyelesaian PBB & Pajak Waris</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($diskon as $x): ?>
                    <tr>
                        <td>203</td>
                        <td>Discount</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($irk as $x): ?>
                    <tr>
                        <td>204</td>
                        <td>IRK</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($ippt as $x): ?>
                    <tr>
                        <td>205</td>
                        <td>IPPT</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($imb as $x): ?>
                    <tr>
                        <td>206</td>
                        <td>IMB</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($biaya_tt as $x): ?>
                    <tr>
                        <td>207</td>
                        <td>Biaya Tak Terduga</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($cut_fill as $x): ?>
                    <tr>
                        <td>208</td>
                        <td>Cut & Fill</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                 <?php
                    foreach ($kirmir as $x): ?>
                    <tr>
                        <td>209</td>
                        <td>Kirmir & Selokan</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($penetrasi as $x): ?>
                    <tr>
                        <td>210</td>
                        <td>Basecourse Jalan / Penetrasi</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                 <?php
                    foreach ($hotmix as $x): ?>
                    <tr>
                        <td>211</td>
                        <td>Hotmix Jalan Kompleks</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($hotmix_akses_masuk as $x): ?>
                    <tr>
                        <td>212</td>
                        <td>Hotmix Akses Masuk</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                 <?php
                    foreach ($batas_kavling as $x): ?>
                    <tr>
                        <td>213</td>
                        <td>Batas Kavling</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($saluran_jalan as $x): ?>
                    <tr>
                        <td>214</td>
                        <td>Saluran Jalan</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($brandgank as $x): ?>
                    <tr>
                        <td>215</td>
                        <td>Brandgank</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($canstein as $x): ?>
                    <tr>
                        <td>216</td>
                        <td>Canstein</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($instalasi_air as $x): ?>
                    <tr>
                        <td>217</td>
                        <td>Instalasi Air</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($pdam as $x): ?>
                    <tr>
                        <td>218</td>
                        <td>PDAM Rumah</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($listrik as $x): ?>
                    <tr>
                        <td>219</td>
                        <td>Instalasi Jaringan Listrik</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                  <?php
                    foreach ($pln as $x): ?>
                    <tr>
                        <td>220</td>
                        <td>PLN Rumah</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($penerangan as $x): ?>
                    <tr>
                        <td>221</td>
                        <td>Penerangan Lingkungan</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($penghijauan as $x): ?>
                    <tr>
                        <td>222</td>
                        <td>Penghijauan / Taman Muka Kompleks</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                  <?php
                    foreach ($benteng as $x): ?>
                    <tr>
                        <td>223</td>
                        <td>Benteng Lokasi</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                 <?php
                    foreach ($gapura as $x): ?>
                    <tr>
                        <td>224</td>
                        <td>Pek Gapura+Gerbang</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($pek_penghijauan as $x): ?>
                    <tr>
                        <td>225</td>
                        <td>Pek Penghijauan</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($pek_fasos as $x): ?>
                    <tr>
                        <td>226</td>
                        <td>Pekerjaan Fasilitas Sosial</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($taman_canstein as $x): ?>
                    <tr>
                        <td>227</td>
                        <td>Pekerjaan Taman Canstein</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                 <?php
                    foreach ($taman_fasum as $x): ?>
                    <tr>
                        <td>228</td>
                        <td>Perkerjaan Taman Fasum</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($bayar_bangunan as $x): ?>
                    <tr>
                        <td>229</td>
                        <td>Bayar Bangunan</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($biaya_personalia as $x): ?>
                    <tr>
                        <td>232</td>
                        <td>Biaya Personalia</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($bunga_bank as $x): ?>
                    <tr>
                        <td>233</td>
                        <td>Bunga Bank</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($overhead as $x): ?>
                    <tr>
                        <td>234</td>
                        <td>Overhead Cost</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($biaya_promosi as $x): ?>
                    <tr>
                        <td>235</td>
                        <td>Biaya Promosi</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($biaya_agen as $x): ?>
                    <tr>
                        <td>236</td>
                        <td>Biaya Agen Marketing (1/2)</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($mobilisasi as $x): ?>
                    <tr>
                        <td>237</td>
                        <td>Mobilisasi/Angkutan</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($konsultasi as $x): ?>
                    <tr>
                        <td>238</td>
                        <td>Biaya Konsultasi</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($pph as $x): ?>
                    <tr>
                        <td>239</td>
                        <td>BPPH Real</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                <?php
                    foreach ($zakat as $x): ?>
                    <tr>
                        <td>240</td>
                        <td>Zakat</td>
                        <td><?php echo $this->Number->currency(($x[0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                   <thead> 
                    <tr>
                        <td colspan="2"><b>Total Pengeluaran</b></td>
                        <td><?php echo $this->Number->currency(($total_pengeluaran[0][0]['SUM(amount)']),'RP');  ?>&nbsp;</td>
                    </tr> 
            </tbody>

            
        </table>  
         <?php else: ?>
            <label><i>Data belum tersedia, silahkan pilih Project dan lakukan pencarian.</i></label>     
     <?php endif; ?>
         
    </div>
</div>  
