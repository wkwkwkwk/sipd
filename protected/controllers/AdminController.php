<?php

	
	class AdminController extends Controller
	{
		public $layout='adminpage1';
		
		public function actionIndex()
		{
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
				$user=Yii::app()->user->username;
				$pilihkec="SELECT * FROM listkecamatan WHERE listkecamatan.namakecamatan='$user'";
				$kecamatan="SELECT * FROM listkecamatan";
				$aktiv="SELECT * FROM admin WHERE admin.rule='kecamatan' ORDER BY terakhir_masuk DESC";
				$connection = Yii::app()->db;
				$command1 = $connection->createCommand($aktiv);
				$command2 = $connection->createCommand($kecamatan);
				$command3 = $connection->createCommand($pilihkec);
				$r = $command1->queryAll();
				$ra = $command2->queryAll();
				$raw = $command3->queryAll();
				$this->render('index',array('dataAktivitas'=>$r,'dataKecamatan'=>$ra,'dataMasuk'=>$raw,));
			}
		}

		public function actionDataUmum()
		{
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
				$sql1 = "SELECT*FROM geo_luas_wil";
				$sql2 = "SELECT*FROM geo_topografi";
				$sql3 = "SELECT*FROM geo_luaslahan";
				$sql4 = "SELECT*FROM geo_iklimavg";
				$sql5 = "SELECT*FROM geo_fisiografi";
				$sql6 = "SELECT*FROM pmr_adminpmr";
				$sql7 = "SELECT*FROM pmr_statusotonomi";
				$sql8 = "SELECT*FROM pmr_perdaijin";
				$sql9 = "SELECT*FROM pmr_sarpras";
				$sql10 = "SELECT*FROM pmr_konsarpras";
				$sql11 = "SELECT*FROM dmg_capil";
				$sql12 = "SELECT*FROM dmg_lahan";
				$sql13 = "SELECT*FROM dmg_famjob";
				$sql14 = "SELECT*FROM dmg_usia";
				$sql15 = "SELECT*FROM dmg_deprat";
				$sql16 = "SELECT*FROM dmg_padatpenduduk";
				$sql17 = "SELECT*FROM dmg_inoutsave";
				$sql18 = "SELECT*FROM dmg_tk";
				$sql19 = "SELECT*FROM dmg_pblmu";
				$sql20 = "SELECT*FROM dmg_tumduk";
				$sql21 = "SELECT*FROM dmg_angkahidup";
				$sql22 = "SELECT*FROM dmg_pendudukdidik";
				$sql23 = "SELECT*FROM dmg_keluarga";
				$sql24 = "SELECT*FROM dmg_rumtang";
				$sql25 = "SELECT*FROM dmg_urumtang";
				$sql26 = "SELECT*FROM dmg_tanilayan";
				$sql27 = "SELECT*FROM dmg_perempuananak";
				$sql28 = "SELECT*FROM dmg_tkunder";
				$sql29 = "SELECT*FROM geo_jmlpulau";
				$sql30 = "SELECT*FROM geo_jmlgunung";
				$sql31 = "SELECT*FROM geo_batasnl";
				$sql32 = "SELECT*FROM dmg_jmlrmhtgl";
				$connection = Yii::app()->db;
				$command1 = $connection->createCommand($sql1);
				$command2 = $connection->createCommand($sql2);
				$command3 = $connection->createCommand($sql3);
				$command4 = $connection->createCommand($sql4);
				$command5 = $connection->createCommand($sql5);
				$command6 = $connection->createCommand($sql6);
				$command7 = $connection->createCommand($sql7);
				$command8 = $connection->createCommand($sql8);
				$command9 = $connection->createCommand($sql9);
				$command10 = $connection->createCommand($sql10);
				$command11 = $connection->createCommand($sql11);
				$command12 = $connection->createCommand($sql12);
				$command13 = $connection->createCommand($sql13);
				$command14 = $connection->createCommand($sql14);
				$command15 = $connection->createCommand($sql15);
				$command16 = $connection->createCommand($sql16);
				$command17 = $connection->createCommand($sql17);
				$command18 = $connection->createCommand($sql18);
				$command19 = $connection->createCommand($sql19);
				$command20 = $connection->createCommand($sql20);
				$command21 = $connection->createCommand($sql21);
				$command22 = $connection->createCommand($sql22);
				$command23 = $connection->createCommand($sql23);
				$command24 = $connection->createCommand($sql24);
				$command25 = $connection->createCommand($sql25);
				$command26 = $connection->createCommand($sql26);
				$command27 = $connection->createCommand($sql27);
				$command28 = $connection->createCommand($sql28);
				$command29= $connection->createCommand($sql29);
				$command30= $connection->createCommand($sql30);
				$command31= $connection->createCommand($sql31);
				$command32= $connection->createCommand($sql32);
				$r1 = $command1->queryAll();
				$r2 = $command2->queryAll();
				$r3 = $command3->queryAll();
				$r4 = $command4->queryAll();
				$r5 = $command5->queryAll();
				$r6 = $command6->queryAll();
				$r7 = $command7->queryAll();
				$r8 = $command8->queryAll();
				$r9 = $command9->queryAll();
				$r10 = $command10->queryAll();
				$r11 = $command11->queryAll();
				$r12 = $command12->queryAll();
				$r13 = $command13->queryAll();
				$r14 = $command14->queryAll();
				$r15 = $command15->queryAll();
				$r16 = $command16->queryAll();
				$r17 = $command17->queryAll();
				$r18 = $command18->queryAll();
				$r19 = $command19->queryAll();
				$r20 = $command20->queryAll();
				$r21 = $command21->queryAll();
				$r22 = $command22->queryAll();
				$r23 = $command23->queryAll();
				$r24 = $command24->queryAll();
				$r25 = $command25->queryAll();
				$r26 = $command26->queryAll();
				$r27 = $command27->queryAll();
				$r28 = $command28->queryAll();
				$r29 = $command29->queryAll();
				$r30 = $command30->queryAll();
				$r31 = $command31->queryAll();
				$r32 = $command32->queryAll();
				$this->render('dataumum', array(
					'dataProvider1' => $r1,
					'dataProvider2' => $r2,
					'dataProvider3' => $r3,
					'dataProvider4' => $r4,
					'dataProvider5' => $r5,
					'dataProvider6' => $r6,
					'dataProvider7' => $r7,
					'dataProvider8' => $r8,
					'dataProvider9' => $r9,
					'dataProvider10' => $r10,
					'dataProvider11' => $r11,
					'dataProvider12' => $r12,
					'dataProvider13' => $r13,
					'dataProvider14' => $r14,
					'dataProvider15' => $r15,
					'dataProvider16' => $r16,
					'dataProvider17' => $r17,
					'dataProvider18' => $r18,
					'dataProvider19' => $r19,
					'dataProvider20' => $r20,
					'dataProvider21' => $r21,
					'dataProvider22' => $r22,
					'dataProvider23' => $r23,
					'dataProvider24' => $r24,
					'dataProvider25' => $r25,
					'dataProvider26' => $r26,
					'dataProvider27' => $r27,
					'dataProvider28' => $r28,
					'dataProvider29' => $r29,
					'dataProvider30' => $r30,
					'dataProvider31' => $r31,
					'dataProvider32' => $r32));
			}
		}

		public function actionSosbud()
		{
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
				$sql1 = "SELECT*FROM kes_sarkes";
				$sql2 = "SELECT*FROM kes_siif";
				$sql3 = "SELECT*FROM kes_kesmas";
				$sql4 = "SELECT*FROM kes_dagkes";
				$sql5 = "SELECT*FROM kes_tenkes";
				$sql6 = "SELECT*FROM kes_kompbidan";
				$sql7 = "SELECT*FROM kes_uci";
				$sql8 = "SELECT*FROM kes_pppp";
				$sql9 = "SELECT*FROM kes_pkrpmm";
				$sql10 = "SELECT*FROM kes_pkdpmm";
				$sql11 = "SELECT*FROM kes_kunbay";
				$sql12 = "SELECT*FROM kes_klb";
				$sql13 = "SELECT*FROM kes_siagaaktif";
				$sql14 = "SELECT*FROM pknpo_didikumum";
				$sql15 = "SELECT*FROM pknpo_senbud";
				$sql16 = "SELECT*FROM pknpo_cabudtari";
				$sql17 = "SELECT*FROM pknpo_pora";
				$sql18 = "SELECT*FROM pknpo_expotaun";
				$sql19 = "SELECT*FROM pknpo_perpus";
				$sql20 = "SELECT*FROM pknpo_kpbps";
				$sql21 = "SELECT*FROM pknpo_lulusanke";
				$sql22 = "SELECT*FROM pknpo_kualifikasiguru";
				$sql23 = "SELECT*FROM pknpo_penuhguru";
				$sql24 = "SELECT*FROM pknpo_miliksekolah";
				$sql25 = "SELECT*FROM pknpo_smkpt";
				$sql26 = "SELECT*FROM pknpo_luluskerja";
				$sql27 = "SELECT*FROM pknpo_cabudda";
				$sql28 = "SELECT*FROM kesos_ipm";
				$sql29 = "SELECT*FROM kesos_jpm";
				$sql30 = "SELECT*FROM kesos_p1";
				$sql31 = "SELECT*FROM kesos_p2";
				$sql32 = "SELECT*FROM kesos_jamkesmasda";
				$sql33 = "SELECT*FROM kesos_kemiskinan";
				$sql34 = "SELECT*FROM kesos_kmtk";
				$sql35 = "SELECT*FROM kesos_jkplsm";
				$sql36 = "SELECT*FROM kesos_psks";
				$sql37 = "SELECT*FROM kesos_pmks";
				$sql38 = "SELECT*FROM kesos_masos";
				$sql39 = "SELECT*FROM kesos_pkk";
				$sql40 = "SELECT*FROM kesos_pktk";
				$sql41 = "SELECT*FROM kesos_indeksgini";
				$sql42 = "SELECT*FROM kesos_ppvbd";
				$sql43 = "SELECT*FROM kesos_williamson";
				$sql44 = "SELECT*FROM ag_jmlpeluk";
				$sql45 = "SELECT*FROM ag_sarib";
				$sql46 = "SELECT*FROM ag_haji";
				$sql47 = "SELECT*FROM ag_kua";
				$sql48 = "SELECT*FROM ag_nyuluh";
				$sql49 = "SELECT*FROM ag_lembagadidik";
				$connection = Yii::app()->db;
				$command1 = $connection->createCommand($sql1);
				$command2 = $connection->createCommand($sql2);
				$command3 = $connection->createCommand($sql3);
				$command4 = $connection->createCommand($sql4);
				$command5 = $connection->createCommand($sql5);
				$command6 = $connection->createCommand($sql6);
				$command7 = $connection->createCommand($sql7);
				$command8 = $connection->createCommand($sql8);
				$command9 = $connection->createCommand($sql9);
				$command10 = $connection->createCommand($sql10);
				$command11 = $connection->createCommand($sql11);
				$command12 = $connection->createCommand($sql12);
				$command13 = $connection->createCommand($sql13);
				$command14 = $connection->createCommand($sql14);
				$command15 = $connection->createCommand($sql15);
				$command16 = $connection->createCommand($sql16);
				$command17 = $connection->createCommand($sql17);
				$command18 = $connection->createCommand($sql18);
				$command19 = $connection->createCommand($sql19);
				$command20 = $connection->createCommand($sql20);
				$command21 = $connection->createCommand($sql21);
				$command22 = $connection->createCommand($sql22);
				$command23 = $connection->createCommand($sql23);
				$command24 = $connection->createCommand($sql24);
				$command25 = $connection->createCommand($sql25);
				$command26 = $connection->createCommand($sql26);
				$command27 = $connection->createCommand($sql27);
				$command28 = $connection->createCommand($sql28);
				$command29 = $connection->createCommand($sql29);
				$command30 = $connection->createCommand($sql30);
				$command31 = $connection->createCommand($sql31);
				$command32 = $connection->createCommand($sql32);
				$command33 = $connection->createCommand($sql33);
				$command34 = $connection->createCommand($sql34);
				$command35 = $connection->createCommand($sql35);
				$command36 = $connection->createCommand($sql36);
				$command37 = $connection->createCommand($sql37);
				$command38 = $connection->createCommand($sql38);
				$command39 = $connection->createCommand($sql39);
				$command40 = $connection->createCommand($sql40);
				$command41 = $connection->createCommand($sql41);
				$command42 = $connection->createCommand($sql42);
				$command43 = $connection->createCommand($sql43);
				$command44 = $connection->createCommand($sql44);
				$command45 = $connection->createCommand($sql45);
				$command46 = $connection->createCommand($sql46);
				$command47 = $connection->createCommand($sql47);
				$command48 = $connection->createCommand($sql48);
				$command49 = $connection->createCommand($sql49);
				$r1 = $command1->queryAll();
				$r2 = $command2->queryAll();
				$r3 = $command3->queryAll();
				$r4 = $command4->queryAll();
				$r5 = $command5->queryAll();
				$r6 = $command6->queryAll();
				$r7 = $command7->queryAll();
				$r8 = $command8->queryAll();
				$r9 = $command9->queryAll();
				$r10 = $command10->queryAll();
				$r11 = $command11->queryAll();
				$r12 = $command12->queryAll();
				$r13 = $command13->queryAll();
				$r14 = $command14->queryAll();
				$r15 = $command15->queryAll();
				$r16 = $command16->queryAll();
				$r17 = $command17->queryAll();
				$r18 = $command18->queryAll();
				$r19 = $command19->queryAll();
				$r20 = $command20->queryAll();
				$r21 = $command21->queryAll();
				$r22 = $command22->queryAll();
				$r23 = $command23->queryAll();
				$r24 = $command24->queryAll();
				$r25 = $command25->queryAll();
				$r26 = $command26->queryAll();
				$r27 = $command27->queryAll();
				$r28 = $command28->queryAll();
				$r29 = $command29->queryAll();
				$r30 = $command30->queryAll();
				$r31 = $command31->queryAll();
				$r32 = $command32->queryAll();
				$r33 = $command33->queryAll();
				$r34 = $command34->queryAll();
				$r35 = $command35->queryAll();
				$r36 = $command36->queryAll();
				$r37 = $command37->queryAll();
				$r38 = $command38->queryAll();
				$r39 = $command39->queryAll();
				$r40 = $command40->queryAll();
				$r41 = $command41->queryAll();
				$r42 = $command42->queryAll();
				$r43 = $command43->queryAll();
				$r44 = $command44->queryAll();
				$r45 = $command45->queryAll();
				$r46 = $command46->queryAll();
				$r47 = $command47->queryAll();
				$r48 = $command48->queryAll();
				$r49 = $command49->queryAll();
				$this->render('sosbud',array(
					'dataProvider1' => $r1,
					'dataProvider2' => $r2,
					'dataProvider3' => $r3,
					'dataProvider4' => $r4,
					'dataProvider5' => $r5,
					'dataProvider6' => $r6,
					'dataProvider7' => $r7,
					'dataProvider8' => $r8,
					'dataProvider9' => $r9,
					'dataProvider10' => $r10,
					'dataProvider11' => $r11,
					'dataProvider12' => $r12,
					'dataProvider13' => $r13,
					'dataProvider14' => $r14,
					'dataProvider15' => $r15,
					'dataProvider16' => $r16,
					'dataProvider17' => $r17,
					'dataProvider18' => $r18,
					'dataProvider19' => $r19,
					'dataProvider20' => $r20,
					'dataProvider21' => $r21,
					'dataProvider22' => $r22,
					'dataProvider23' => $r23,
					'dataProvider24' => $r24,
					'dataProvider25' => $r25,
					'dataProvider26' => $r26,
					'dataProvider27' => $r27,
					'dataProvider28' => $r28,
					'dataProvider29' => $r29,
					'dataProvider30' => $r30,
					'dataProvider31' => $r31,
					'dataProvider32' => $r32,
					'dataProvider33' => $r33,
					'dataProvider34' => $r34,
					'dataProvider35' => $r35,
					'dataProvider36' => $r36,
					'dataProvider37' => $r37,
					'dataProvider38' => $r38,
					'dataProvider39' => $r39,
					'dataProvider40' => $r40,
					'dataProvider41' => $r41,
					'dataProvider42' => $r42,
					'dataProvider43' => $r43,
					'dataProvider44' => $r44,
					'dataProvider45' => $r45,
					'dataProvider46' => $r46,
					'dataProvider47' => $r47,
					'dataProvider48' => $r48,
					'dataProvider49' => $r49));

			}
		}

		public function actionEkonomi()
		{
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
				$sql1 = "SELECT*FROM eko_industri";
		    	$sql2 = "SELECT*FROM eko_perdagangan";
		    	$sql3 = "SELECT*FROM eko_usahanas";
		    	$sql4 = "SELECT*FROM eko_einonmigas";
		    	$sql5 = "SELECT*FROM eko_ioindustri";
		    	$sql6 = "SELECT*FROM eko_perijinan";
		    	$sql7 = "SELECT*FROM eko_indsubsektor";
		    	$sql8 = "SELECT*FROM eko_pma";
		    	$sql9 = "SELECT*FROM eko_pmdn";
		    	$sql10 = "SELECT*FROM eko_bpr";
		    	$sql11 = "SELECT*FROM eko_bankumum";
		    	$sql12 = "SELECT*FROM eko_asrugi";
		    	$sql13 = "SELECT*FROM eko_asjiwa";
		    	$sql14 = "SELECT*FROM eko_invnas";
		    	$sql15 = "SELECT*FROM eko_jasauang";
		    	$sql16 = "SELECT*FROM eko_ukmnon";
		    	$sql17 = "SELECT*FROM eko_perbankan";
		    	$connection = Yii::app()->db;
		    	$command1 = $connection->createCommand($sql1);
		    	$command2 = $connection->createCommand($sql2);
				$command3 = $connection->createCommand($sql3);
				$command4 = $connection->createCommand($sql4);
				$command5 = $connection->createCommand($sql5);
				$command6 = $connection->createCommand($sql6);
				$command7 = $connection->createCommand($sql7);
				$command8 = $connection->createCommand($sql8);
				$command9 = $connection->createCommand($sql9);
				$command10 = $connection->createCommand($sql10);
				$command11 = $connection->createCommand($sql11);
				$command12 = $connection->createCommand($sql12);
				$command13 = $connection->createCommand($sql13);
				$command14 = $connection->createCommand($sql14);
				$command15 = $connection->createCommand($sql15);
				$command16 = $connection->createCommand($sql16);
				$command17 = $connection->createCommand($sql17);
				$r1 = $command1->queryAll();
				$r2 = $command2->queryAll();
				$r3 = $command3->queryAll();
				$r4 = $command4->queryAll();
				$r5 = $command5->queryAll();
				$r6 = $command6->queryAll();
				$r7 = $command7->queryAll();
				$r8 = $command8->queryAll();
				$r9 = $command9->queryAll();
				$r10 = $command10->queryAll();
				$r11 = $command11->queryAll();
				$r12 = $command12->queryAll();
				$r13 = $command13->queryAll();
				$r14 = $command14->queryAll();
				$r15 = $command15->queryAll();
				$r16 = $command16->queryAll();
				$r17 = $command17->queryAll();
				$this->render('ekonomi',array(
					'dataProvider1' => $r1,
					'dataProvider2' => $r2,
					'dataProvider3' => $r3,
					'dataProvider4' => $r4,
					'dataProvider5' => $r5,
					'dataProvider6' => $r6,
					'dataProvider7' => $r7,
					'dataProvider8' => $r8,
					'dataProvider9' => $r9,
					'dataProvider10' => $r10,
					'dataProvider11' => $r11,
					'dataProvider12' => $r12,
					'dataProvider13' => $r13,
					'dataProvider14' => $r14,
					'dataProvider15' => $r15,
					'dataProvider16' => $r16,
					'dataProvider17' => $r17));
			}
		}

		public function actionInfrastruktur()
		{
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
				$sql1 = "SELECT*FROM infra_perumahan";
		    	$sql2 = "SELECT*FROM infra_jmlrmh";
		    	$sql3 = "SELECT*FROM infra_lsrmh";
		    	$sql4 = "SELECT*FROM infra_arealmukim";
		    	$sql5 = "SELECT*FROM infra_jmlbangun";
		    	$sql6 = "SELECT*FROM infra_kumuh";
		    	$sql7 = "SELECT*FROM infra_ilegal";
		    	$sql8 = "SELECT*FROM infra_bantaran";
		    	$sql9 = "SELECT*FROM infra_sutet";
		    	$sql10 = "SELECT*FROM infra_rpublik";
		    	$sql11 = "SELECT*FROM infra_rmhsanitasi";
		    	$sql12 = "SELECT*FROM infra_pjjln";
		    	$sql13 = "SELECT*FROM infra_kondisijln";
		    	$sql14 = "SELECT*FROM infra_pjkondisi";
		    	$sql15 = "SELECT*FROM infra_penghubung";
		    	$sql16 = "SELECT*FROM infra_jembatan";
		    	$sql17 = "SELECT*FROM infra_pjfungsi";
		    	$sql18 = "SELECT*FROM infra_pemakaman";
		    	$sql19 = "SELECT*FROM infra_pengairan";
		    	$sql20 = "SELECT*FROM infra_pjmilik";
		    	$sql21 = "SELECT*FROM infra_sempadan";
		    	$sql22 = "SELECT*FROM infra_drainase";
		    	$sql23 = "SELECT*FROM infra_turap";
		    	$sql24 = "SELECT*FROM infra_sam";
		    	$sql25 = "SELECT*FROM infra_mutuair";
		    	$sql26 = "SELECT*FROM infra_dayamakam";
		    	$sql27 = "SELECT*FROM infra_pariwisata";
		    	$sql28 = "SELECT*FROM infra_telekomunikasi";
		    	$sql29 = "SELECT*FROM infra_srtkabar";
		    	$sql30 = "SELECT*FROM infra_penyiaran";
		    	$sql31 = "SELECT*FROM infra_sip";
		    	$sql32 = "SELECT*FROM infra_perhubungan";
		    	$sql33 = "SELECT*FROM infra_angkum";
		    	$sql34 = "SELECT*FROM infra_transportasi";
		    	$sql35 = "SELECT*FROM infra_bermotor";
		    	$connection = Yii::app()->db;
				$command1 = $connection->createCommand($sql1);
				$command2 = $connection->createCommand($sql2);
				$command3 = $connection->createCommand($sql3);
				$command4 = $connection->createCommand($sql4);
				$command5 = $connection->createCommand($sql5);
				$command6 = $connection->createCommand($sql6);
				$command7 = $connection->createCommand($sql7);
				$command8 = $connection->createCommand($sql8);
				$command9 = $connection->createCommand($sql9);
				$command10 = $connection->createCommand($sql10);
				$command11 = $connection->createCommand($sql11);
				$command12 = $connection->createCommand($sql12);
				$command13 = $connection->createCommand($sql13);
				$command14 = $connection->createCommand($sql14);
				$command15 = $connection->createCommand($sql15);
				$command16 = $connection->createCommand($sql16);
				$command17 = $connection->createCommand($sql17);
				$command18 = $connection->createCommand($sql18);
				$command19 = $connection->createCommand($sql19);
				$command20 = $connection->createCommand($sql20);
				$command21 = $connection->createCommand($sql21);
				$command22 = $connection->createCommand($sql22);
				$command23 = $connection->createCommand($sql23);
				$command24 = $connection->createCommand($sql24);
				$command25 = $connection->createCommand($sql25);
				$command26 = $connection->createCommand($sql26);
				$command27 = $connection->createCommand($sql27);
				$command28 = $connection->createCommand($sql28);
				$command29 = $connection->createCommand($sql29);
				$command30 = $connection->createCommand($sql30);
				$command31 = $connection->createCommand($sql31);
				$command32 = $connection->createCommand($sql32);
				$command33 = $connection->createCommand($sql33);
				$command34 = $connection->createCommand($sql34);
				$command35 = $connection->createCommand($sql35);
				$r1 = $command1->queryAll();
				$r2 = $command2->queryAll();
				$r3 = $command3->queryAll();
				$r4 = $command4->queryAll();
				$r5 = $command5->queryAll();
				$r6 = $command6->queryAll();
				$r7 = $command7->queryAll();
				$r8 = $command8->queryAll();
				$r9 = $command9->queryAll();
				$r10 = $command10->queryAll();
				$r11 = $command11->queryAll();
				$r12 = $command12->queryAll();
				$r13 = $command13->queryAll();
				$r14 = $command14->queryAll();
				$r15 = $command15->queryAll();
				$r16 = $command16->queryAll();
				$r17 = $command17->queryAll();
				$r18 = $command18->queryAll();
				$r19 = $command19->queryAll();
				$r20 = $command20->queryAll();
				$r21 = $command21->queryAll();
				$r22 = $command22->queryAll();
				$r23 = $command23->queryAll();
				$r24 = $command24->queryAll();
				$r25 = $command25->queryAll();
				$r26 = $command26->queryAll();
				$r27 = $command27->queryAll();
				$r28 = $command28->queryAll();
				$r29 = $command29->queryAll();
				$r30 = $command30->queryAll();
				$r31 = $command31->queryAll();
				$r32 = $command32->queryAll();
				$r33 = $command33->queryAll();
				$r34 = $command34->queryAll();
				$r35 = $command35->queryAll();
				$this->render('infrastruktur',array(
					'dataProvider1' => $r1,
					'dataProvider2' => $r2,
					'dataProvider3' => $r3,
					'dataProvider4' => $r4,
					'dataProvider5' => $r5,
					'dataProvider6' => $r6,
					'dataProvider7' => $r7,
					'dataProvider8' => $r8,
					'dataProvider9' => $r9,
					'dataProvider10' => $r10,
					'dataProvider11' => $r11,
					'dataProvider12' => $r12,
					'dataProvider13' => $r13,
					'dataProvider14' => $r14,
					'dataProvider15' => $r15,
					'dataProvider16' => $r16,
					'dataProvider17' => $r17,
					'dataProvider18' => $r18,
					'dataProvider19' => $r19,
					'dataProvider20' => $r20,
					'dataProvider21' => $r21,
					'dataProvider22' => $r22,
					'dataProvider23' => $r23,
					'dataProvider24' => $r24,
					'dataProvider25' => $r25,
					'dataProvider26' => $r26,
					'dataProvider27' => $r27,
					'dataProvider28' => $r28,
					'dataProvider29' => $r29,
					'dataProvider30' => $r30,
					'dataProvider31' => $r31,
					'dataProvider32' => $r32,
					'dataProvider33' => $r33,
					'dataProvider34' => $r34,
					'dataProvider35' => $r35));
			}
		}

		public function actionSda()
		{
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
				$sql1 = "SELECT*FROM sda_pertanian";
		    	$sql2 = "SELECT*FROM sda_hortikultura";
		    	$sql3 = "SELECT*FROM sda_perkebunan";
		    	$sql4 = "SELECT*FROM sda_peternakan";
		    	$sql5 = "SELECT*FROM sda_laut_ikan";
		    	$sql6 = "SELECT*FROM sda_kehutanan";
		    	$sql7 = "SELECT*FROM sda_kel_sos";
		    	$sql8 = "SELECT*FROM sda_pertambangan";
		    	$sql9 = "SELECT*FROM sda_energi";
		    	$sql10 = "SELECT*FROM sda_linkhidup";
		    	$sql11 = "SELECT*FROM sda_rusaklinkhidup";
		    	$sql12 = "SELECT*FROM sda_pelestarianlink";
		    	$sql13 = "SELECT*FROM sda_tataruang";
		    	$sql14 = "SELECT*FROM sda_pertanahan";
		    	$sql15 = "SELECT*FROM sda_kendalilink";
		    	$sql16 = "SELECT*FROM sda_sampah";
		    	$sql17 = "SELECT*FROM sda_air_limbah";
		    	$connection = Yii::app()->db;
		    	$command1 = $connection->createCommand($sql1);
		    	$command2 = $connection->createCommand($sql2);
				$command3 = $connection->createCommand($sql3);
				$command4 = $connection->createCommand($sql4);
				$command5 = $connection->createCommand($sql5);
				$command6 = $connection->createCommand($sql6);
				$command7 = $connection->createCommand($sql7);
				$command8 = $connection->createCommand($sql8);
				$command9 = $connection->createCommand($sql9);
				$command10 = $connection->createCommand($sql10);
				$command11 = $connection->createCommand($sql11);
				$command12 = $connection->createCommand($sql12);
				$command13 = $connection->createCommand($sql13);
				$command14 = $connection->createCommand($sql14);
				$command15 = $connection->createCommand($sql15);
				$command16 = $connection->createCommand($sql16);
				$command17 = $connection->createCommand($sql17);
				$r1 = $command1->queryAll();
				$r2 = $command2->queryAll();
				$r3 = $command3->queryAll();
				$r4 = $command4->queryAll();
				$r5 = $command5->queryAll();
				$r6 = $command6->queryAll();
				$r7 = $command7->queryAll();
				$r8 = $command8->queryAll();
				$r9 = $command9->queryAll();
				$r10 = $command10->queryAll();
				$r11 = $command11->queryAll();
				$r12 = $command12->queryAll();
				$r13 = $command13->queryAll();
				$r14 = $command14->queryAll();
				$r15 = $command15->queryAll();
				$r16 = $command16->queryAll();
				$r17 = $command17->queryAll();
				$this->render('sda',array(
					'dataProvider1' => $r1,
					'dataProvider2' => $r2,
					'dataProvider3' => $r3,
					'dataProvider4' => $r4,
					'dataProvider5' => $r5,
					'dataProvider6' => $r6,
					'dataProvider7' => $r7,
					'dataProvider8' => $r8,
					'dataProvider9' => $r9,
					'dataProvider10' => $r10,
					'dataProvider11' => $r11,
					'dataProvider12' => $r12,
					'dataProvider13' => $r13,
					'dataProvider14' => $r14,
					'dataProvider15' => $r15,
					'dataProvider16' => $r16,
					'dataProvider17' => $r17));
			}
		}

		public function actionPolhukam()
		{
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
					$sql1 = "SELECT*FROM pdnp_jad";
					$sql2 = "SELECT*FROM pdnp_kadbjk";
					$sql3 = "SELECT*FROM pdnp_jfd";
					$sql4 = "SELECT*FROM pdnp_parpol";
					$sql5 = "SELECT*FROM pdnp_kpm";
					$sql6 = "SELECT*FROM pdnp_tpp";
					$sql7 = "SELECT*FROM pdnp_ormas";
					$sql8 = "SELECT*FROM pdnp_jlpm";
					$sql9 = "SELECT*FROM pdnp_jppm";
					$sql10 = "SELECT*FROM pdnp_jsmm";
					$sql11 = "SELECT*FROM pdnp_jppmd";
					$sql12 = "SELECT*FROM pdnp_lswm";
					$sql13 = "SELECT*FROM pdnp_jkppd";
					$sql14 = "SELECT*FROM huk_ph";
					$sql15 = "SELECT*FROM huk_jktd";
					
					$sql17 = "SELECT*FROM huk_jkyt";
					$sql18 = "SELECT*FROM huk_kel";
					$sql19 = "SELECT*FROM huk_jtk";
					$sql20 = "SELECT*FROM huk_jtkd";
					$sql21 = "SELECT*FROM kkm_kkm";
					$connection = Yii::app()->db;
					$command1 = $connection->createCommand($sql1);
					$command2 = $connection->createCommand($sql2);
					$command3 = $connection->createCommand($sql3);
					$command4 = $connection->createCommand($sql4);
					$command5 = $connection->createCommand($sql5);
					$command6 = $connection->createCommand($sql6);
					$command7 = $connection->createCommand($sql7);
					$command8 = $connection->createCommand($sql8);
					$command9 = $connection->createCommand($sql9);
					$command10 = $connection->createCommand($sql10);
					$command11 = $connection->createCommand($sql11);
					$command12 = $connection->createCommand($sql12);
					$command13 = $connection->createCommand($sql13);
					$command14 = $connection->createCommand($sql14);
					$command15 = $connection->createCommand($sql15);
					
					$command17 = $connection->createCommand($sql17);
					$command18 = $connection->createCommand($sql18);
					$command19 = $connection->createCommand($sql19);
					$command20 = $connection->createCommand($sql20);
					$command21 = $connection->createCommand($sql21);
					$r1 = $command1->queryAll();
					$r2 = $command2->queryAll();
					$r3 = $command3->queryAll();
					$r4 = $command4->queryAll();
					$r5 = $command5->queryAll();
					$r6 = $command6->queryAll();
					$r7 = $command7->queryAll();
					$r8 = $command8->queryAll();
					$r9 = $command9->queryAll();
					$r10 = $command10->queryAll();
					$r11 = $command11->queryAll();
					$r12 = $command12->queryAll();
					$r13 = $command13->queryAll();
					$r14 = $command14->queryAll();
					$r15 = $command15->queryAll();
					
					$r17 = $command17->queryAll();
					$r18 = $command18->queryAll();
					$r19 = $command19->queryAll();
					$r20 = $command20->queryAll();
					$r21 = $command21->queryAll();
					$this->render('polhukam',array(
						'dataProvider1' => $r1,
						'dataProvider2' => $r2,
						'dataProvider3' => $r3,
						'dataProvider4' => $r4,
						'dataProvider5' => $r5,
						'dataProvider6' => $r6,
						'dataProvider7' => $r7,
						'dataProvider8' => $r8,
						'dataProvider9' => $r9,
						'dataProvider10' => $r10,
						'dataProvider11' => $r11,
						'dataProvider12' => $r12,
						'dataProvider13' => $r13,
						'dataProvider14' => $r14,
						'dataProvider15' => $r15,
						
						'dataProvider17' => $r17,
						'dataProvider18' => $r18,
						'dataProvider19' => $r19,
						'dataProvider20' => $r20,
						'dataProvider21' => $r21));
			}
		}

		public function actionInsidensial()
		{
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
				$sql1 = "SELECT*FROM ben_jpa";
				$sql2 = "SELECT*FROM ben_jpl";
				$sql3 = "SELECT*FROM ben_jpkl";
				$sql4 = "SELECT*FROM ben_jpd";
				$sql5 = "SELECT*FROM ben_jkba";
				$sql6 = "SELECT*FROM ben_jlb";
				$sql7 = "SELECT*FROM ben_jklb";
				$sql8 = "SELECT*FROM ben_jpkab";
				$sql9 = "SELECT*FROM ben_kb";
				$sql10 = "SELECT*FROM pm_jkw";
				$sql11 = "SELECT*FROM pm_eph";
				$sql12 = "SELECT*FROM pikan_jkpi";
				$sql13 = "SELECT*FROM pikan_jikap";
				$sql14 = "SELECT*FROM pikan_jlpi";
				$sql15 = "SELECT*FROM khut_lah";
				$sql16 = "SELECT*FROM khut_jkj";
				$sql17 = "SELECT*FROM khut_jlkh";
				$sql18 = "SELECT*FROM ppk_vk";
				$sql19 = "SELECT*FROM ppk_jk";
				$sql20 = "SELECT*FROM ppk_jlpp";
				$connection = Yii::app()->db;
				$command1 = $connection->createCommand($sql1);
				$command2 = $connection->createCommand($sql2);
				$command3 = $connection->createCommand($sql3);
				$command4 = $connection->createCommand($sql4);
				$command5 = $connection->createCommand($sql5);
				$command6 = $connection->createCommand($sql6);
				$command7 = $connection->createCommand($sql7);
				$command8 = $connection->createCommand($sql8);
				$command9 = $connection->createCommand($sql9);
				$command10 = $connection->createCommand($sql10);
				$command11 = $connection->createCommand($sql11);
				$command12 = $connection->createCommand($sql12);
				$command13 = $connection->createCommand($sql13);
				$command14 = $connection->createCommand($sql14);
				$command15 = $connection->createCommand($sql15);
				$command16 = $connection->createCommand($sql16);
				$command17 = $connection->createCommand($sql17);
				$command18 = $connection->createCommand($sql18);
				$command19 = $connection->createCommand($sql19);
				$command20 = $connection->createCommand($sql20);
				$r1 = $command1->queryAll();
				$r2 = $command2->queryAll();
				$r3 = $command3->queryAll();
				$r4 = $command4->queryAll();
				$r5 = $command5->queryAll();
				$r6 = $command6->queryAll();
				$r7 = $command7->queryAll();
				$r8 = $command8->queryAll();
				$r9 = $command9->queryAll();
				$r10 = $command10->queryAll();
				$r11 = $command11->queryAll();
				$r12 = $command12->queryAll();
				$r13 = $command13->queryAll();
				$r14 = $command14->queryAll();
				$r15 = $command15->queryAll();
				$r16 = $command16->queryAll();
				$r17 = $command17->queryAll();
				$r18 = $command18->queryAll();
				$r19 = $command19->queryAll();
				$r20 = $command20->queryAll();
				$this->render('insidensial',array(
					'dataProvider1' => $r1,
					'dataProvider2' => $r2,
					'dataProvider3' => $r3,
					'dataProvider4' => $r4,
					'dataProvider5' => $r5,
					'dataProvider6' => $r6,
					'dataProvider7' => $r7,
					'dataProvider8' => $r8,
					'dataProvider9' => $r9,
					'dataProvider10' => $r10,
					'dataProvider11' => $r11,
					'dataProvider12' => $r12,
					'dataProvider13' => $r13,
					'dataProvider14' => $r14,
					'dataProvider15' => $r15,
					'dataProvider16' => $r16,
					'dataProvider17' => $r17,
					'dataProvider18' => $r18,
					'dataProvider19' => $r19,
					'dataProvider20' => $r20));
			}
		}

		public function actionTampilkanData()
		{
			
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
				$model = new Topografi();
			    $this->widget('ext.EExcelView', array(
			        'grid_mode'=>'export',
			        'title' => 'Topografi',
				'dataProvider' => $model->search(),
				'filter' => $model,
				'columns' => array(
					'properti',
					'nama',
					'2010',
					'2011',
					'2012',
					'2013',
					'2014',
					'satuan',
					'ketersediaan',
					'sumber_data',
				),
				));
			}
		}

		public function rules()
		{
			return array(
				array('datar,bergelombang,curam,sgtcuram,tinggidpl','numerical',
					'integerOnly'=>false,),
				);
		}

		public function actionSimpanGeografi()
		{
			if ($_POST) {
				//ambil dat adari masing-masing atribut
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$luaswil=$_POST['ls_wil'];
				$daratan=$_POST['daratan'];
				$laut12mil=$_POST['laut_12mil'];
				$zonalaut=$_POST['zona_laut'];
				$lteritori=$_POST['laut_teritorial'];
				$zee=$_POST['zee'];
				$lkonti=$_POST['laut_kontinen'];
				$pgrpantai=$_POST['pj_grs_pantai'];
				$topo=$_POST['topo'];
				$ldarilereng=$_POST['luasdarilereng'];
				$datar=$_POST['datar'];
				$bergelombang=$_POST['bergelombang'];
				$curam=$_POST['curam'];
				$sgtcuram=$_POST['sgtcuram'];
				$tinggidpl=$_POST['tinggidpl'];
				$lslahan=$_POST['ls_lahan'];
				$luashutan=$_POST['luashutan'];
				$htetap=$_POST['htetap'];
				$hterbatas=$_POST['hterbatas'];
				$hkonversi=$_POST['hkonversi'];
				$hbakau=$_POST['hbakau'];
				$jml_lahansawah=$_POST['jml_lahansawah'];
				$sirigasi=$_POST['sirigasi'];
				$stadahujan=$_POST['stadahujan'];
				$spasangsurut=$_POST['spasangsurut'];
				$slainnya=$_POST['slainnya'];
				$jml_lahankering=$_POST['jml_lahankering'];
				$rawa=$_POST['rawa'];
				$ladang=$_POST['ladang'];
				$perkebunan=$_POST['perkebunan'];
				$ulain=$_POST['ulain'];
				$busaha=$_POST['busaha'];
				$lhntambang=$_POST['lhntambang'];
				$danau=$_POST['danau'];
				$waduk=$_POST['waduk'];
				$kolamtawar=$_POST['kolamtawar'];
				$tbkikan=$_POST['tbkikan'];
				$padangalam=$_POST['padangalam'];
				$tnhrusak=$_POST['tnhrusak'];
				$tnhterlantar=$_POST['tnhterlantar'];
				$luas_lbsawah=$_POST['luas_lbsawah'];
				$koembak=$_POST['koembak'];
				$danlam=$_POST['danlam'];
				$ladlanbunput=$_POST['ladlanbunput'];
				$kcampuran=$_POST['kcampuran'];
				$perkebunan=$_POST['perkebunan'];
				$hutan=$_POST['hutan'];
				$rumahmukim=$_POST['rumahmukim'];
				$industri=$_POST['industri'];
				$blain=$_POST['blain'];
				$nonsawahtakusaha=$_POST['nonsawahtakusaha'];
				$waduk1=$_POST['waduk1'];
				$lainnya=$_POST['lainnya'];
				$luas_ubahlahan=$_POST['luas_ubahlahan'];
				$rubahgunasawah=$_POST['rubahgunasawah'];
				$jtanibukansawah=$_POST['jtanibukansawah'];
				$jrumah=$_POST['jrumah'];
				$jindustri=$_POST['jindustri'];
				$jusahakantor=$_POST['jusahakantor'];
				$jtanibukansawah1=$_POST['jtanibukansawah1'];
				$jlahanlain=$_POST['jlahanlain'];
				$alihfgshutan=$_POST['alihfgshutan'];
				$hjsawah=$_POST['hjsawah'];
				$hjrumah=$_POST['hjrumah'];
				$hjindustri=$_POST['hjindustri'];
				$hjusahakantor=$_POST['hjusahakantor'];
				$hjbukansawah=$_POST['hjbukansawah'];
				$hjlahanlain=$_POST['hjlahanlain'];
				$landuse=$_POST['landuse'];
				$pertanian=$_POST['pertanian'];
				$tambangdangali=$_POST['tambangdangali'];
				$industriolah=$_POST['industriolah'];
				$listrikair=$_POST['listrikair'];
				$bangunan=$_POST['bangunan'];
				$perdagangan=$_POST['perdagangan'];
				$angkutkomunikasi=$_POST['angkutkomunikasi'];
				$keuangan=$_POST['keuangan'];
				$jasa=$_POST['jasa'];
				$jmlpulau=$_POST['jmlpulau'];
				$pulbhuni=$_POST['pulbhuni'];
				$pulbjmlpddk=$_POST['pulbjmlpddk'];
				$pulbjmlkk=$_POST['pulbjmlkk'];
				$ldpb=$_POST['ldpb'];
				$llppb=$_POST['llppb'];
				$llbpb=$_POST['llbpb'];
				$jbmercu=$_POST['jbmercu'];
				$pulbtthuni=$_POST['pulbtthuni'];
				$pulbttjps=$_POST['pulbttjps'];
				$pulbttdl=$_POST['pulbttdl'];
				$lppbtt=$_POST['lppbtt'];
				$llbpbtt=$_POST['llbpbtt'];
				$jbttmercu=$_POST['jbttmercu'];
				$pulthuni=$_POST['pulthuni'];
				$pulthuni=$_POST['pulthuni'];
				$pulbnjmlpddk=$_POST['pulbnjmlpddk'];
				$pulbnjmlkk=$_POST['pulbnjmlkk'];
				$ldpbn=$_POST['ldpbn'];
				$llppbn=$_POST['llppbn'];
				$llbpbn=$_POST['llbpbn'];
				$jbnmercu=$_POST['jbnmercu'];
				$pultnama=$_POST['pultnama'];
				$pulbtnjmlpddk=$_POST['pulbtnjmlpddk'];
				$pulbtnjmlkk=$_POST['pulbtnjmlkk'];
				$ldpbtn=$_POST['ldpbtn'];
				$llppbtn=$_POST['llppbtn'];
				$llbpbtn=$_POST['llbpbtn'];
				$jbtnmercu=$_POST['jbtnmercu'];
				$pulkecil=$_POST['pulkecil'];
				$pulkjmlpddk=$_POST['pulkjmlpddk'];
				$pulkjmlkk=$_POST['pulkjmlkk'];
				$ldpk=$_POST['ldpk'];
				$llpppk=$_POST['llpppk'];
				$llbppk=$_POST['llbppk'];
				$jkmercu=$_POST['jkmercu'];
				$pulluar=$_POST['pulluar'];
				$pulljmlpddk=$_POST['pulljmlpddk'];
				$pulljmlkk=$_POST['pulljmlkk'];
				$ldpl=$_POST['ldpl'];
				$llppl=$_POST['llppl'];
				$llbpl=$_POST['llbpl'];
				$jlmercu=$_POST['jlmercu'];
				$iklimavg=$_POST['iklimavg'];
				$suhu=$_POST['suhu'];
				$suhumin=$_POST['suhumin'];
				$suhumax=$_POST['suhumax'];
				$lembab=$_POST['lembab'];
				$lembabmin=$_POST['lembabmin'];
				$lembabmax=$_POST['lembabmax'];
				$curjan=$_POST['curjan'];
				$curjanmin=$_POST['curjanmin'];
				$curjanmax=$_POST['curjanmax'];
				$angin=$_POST['angin'];
				$anginmin=$_POST['anginmin'];
				$anginmax=$_POST['anginmax'];
				$jmlgunung=$_POST['jmlgunung'];
				$gaktif=$_POST['gaktif'];
				$gnonaktif=$_POST['gnonaktif'];
				$gvulkanik=$_POST['gvulkanik'];
				$batasnl=$_POST['batasnl'];
				$papuanugini=$_POST['papuanugini'];
				$kalimalay=$_POST['kalimalay'];
				$nttimor=$_POST['nttimor'];
				$fisiografi=$_POST['fisiografi'];
				$lgunung=$_POST['lgunung'];
				$lbukit=$_POST['lbukit'];
				$ldataran=$_POST['ldataran'];
				$lpesisir=$_POST['lpesisir'];

				
				$implod1=array($luaswil,$daratan,$laut12mil,$zonalaut,$lteritori,$zee,$lkonti,$pgrpantai,$pgrpantai);
				$implod2=array($topo,$ldarilereng,$datar,$bergelombang,$curam,$sgtcuram,$tinggidpl);
				$implod3=array($lslahan,$luashutan,$htetap,$hterbatas,$hkonversi,$hbakau,$jml_lahansawah,$sirigasi,$stadahujan,$spasangsurut,$slainnya,$jml_lahankering,$rawa,$ladang,$perkebunan,$ulain,$busaha,$lhntambang,$danau,$waduk,$kolamtawar,$tbkikan,$padangalam,$tnhrusak,$tnhterlantar,$luas_lbsawah,$koembak,$danlam,$ladlanbunput,$kcampuran,$perkebunan,$hutan,$rumahmukim,$industri,$blain,$nonsawahtakusaha,$waduk1,$lainnya,$luas_ubahlahan,$rubahgunasawah,$jtanibukansawah,$jrumah,$jindustri,$jusahakantor,$jtanibukansawah1,$jlahanlain,$alihfgshutan,$hjsawah,$hjrumah,$hjindustri,$hjusahakantor,$hjbukansawah,$hjlahanlain,$landuse,$pertanian,$tambangdangali,$industriolah,$listrikair,$bangunan,$perdagangan,$angkutkomunikasi,$keuangan,$jasa);
				$implod4=array($iklimavg,$suhu,$suhumin,$suhumax,$lembab,$lembabmin,$lembabmax,$curjan,$curjanmin,$curjanmax,$angin,$anginmin,$anginmax);
				$implod5=array($jmlpulau,$pulbhuni,$pulbjmlpddk,$pulbjmlkk,$ldpb,$llppb,$llbpb,$jbmercu,$pulbtthuni,$pulbttjps,$pulbttdl,$lppbtt,$llbpbtt,$jbttmercu,$pulthuni,$pulthuni,$pulbnjmlpddk,$pulbnjmlkk,$ldpbn,$llppbn,$llbpbn,$jbnmercu,$pultnama,$pulbtnjmlpddk,$pulbtnjmlkk,$ldpbtn,$llppbtn,$llbpbtn,$jbtnmercu,$pulkecil,$pulkjmlpddk,$pulkjmlkk,$ldpk,$llpppk,$llbppk,$jkmercu,$pulluar,$pulljmlpddk,$pulljmlkk,$ldpl,$llppl,$llbpl,$jlmercu);
				$implod6=array($jmlgunung,$gaktif,$gnonaktif,$gvulkanik);
				$implod7=array($batasnl,$papuanugini,$kalimalay,$nttimor);
				$implod8=array($fisiografi,$lgunung,$lbukit,$ldataran,$lpesisir);

				$masukisi1=implode("#", $implod1);
				$masukisi2=implode("#", $implod2);
				$masukisi3=implode("#", $implod3);
				$masukisi4=implode("#", $implod4);
				$masukisi5=implode("#", $implod5);
				$masukisi6=implode("#", $implod6);
				$masukisi7=implode("#", $implod7);
				$masukisi8=implode("#", $implod8);

				/*$i=0;
				for ($i=0; $i < 5; $i++) { 
					$n=$i+1;
					$sql2_="UPDATE geo_topografi SET '2015'=$implod2[$i] WHERE id=$n";
				}*/
				
				$sql1="INSERT INTO log VALUES('','geo_luas_wil','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','geo_topografi','$user','$tahunini','$masukisi2','$waktuisi')";
				$sql3="INSERT INTO log VALUES('','geo_luaslahan','$user','$tahunini','$masukisi3','$waktuisi')";
				$sql4="INSERT INTO log VALUES('','geo_iklimavg','$user','$tahunini','$masukisi4','$waktuisi')";
				$sql5="INSERT INTO log VALUES('','geo_jmlpulau','$user','$tahunini','$masukisi5','$waktuisi')";
				$sql6="INSERT INTO log VALUES('','geo_jmlgunung','$user','$tahunini','$masukisi6','$waktuisi')";
				$sql7="INSERT INTO log VALUES('','geo_batasnl','$user','$tahunini','$masukisi7','$waktuisi')";
				$sql8="INSERT INTO log VALUES('','geo_fisiografi','$user','$tahunini','$masukisi8','$waktuisi')";

				//query simpan data
				/*$sql2="INSERT INTO geo_topografi(datar,bergelombang,curam,sgtcuram,tinggidpl)
				VALUES('$datar','$bergelombang','$curam','$sgtcuram','$tinggidpl')";*/
				$conn=Yii::app()->db;

				//eksekusi query simpan data
				$command1=$conn->createCommand($sql1);
				$command2=$conn->createCommand($sql2);
				$command3=$conn->createCommand($sql3);
				$command4=$conn->createCommand($sql4);
				$command5=$conn->createCommand($sql5);
				$command6=$conn->createCommand($sql6);
				$command7=$conn->createCommand($sql7);
				$command8=$conn->createCommand($sql8);

				//binding param untuk menangani karakter injection
				/*$command->bindParam(":datar",$datar,PDO::PARAM_STR);
				$command->bindParam(":bergelombang",$bergelombang,PDO::PARAM_STR);*/

				//eksekusi query atau non-query
				$command1->execute();$command2->execute();$command3->execute();$command4->execute();$command5->execute();$command6->execute();$command7->execute();$command8->execute();
				$this->redirect(array(
					'dataumum'));
			}
		}

		public function actionSimpanPemerintahan()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$adminpmr=$_POST['adminpmr'];
				$jmlkec=$_POST['jmlkec'];
				$jmlkel=$_POST['jmlkel'];
				$jmldes=$_POST['jmldes'];
				$klasdesa=$_POST['klasdesa'];
				$dswad=$_POST['dswad'];
				$dswak=$_POST['dswak'];
				$dswas=$_POST['dswas'];
				$dpes=$_POST['dpes'];
				$dhut=$_POST['dhut'];
				$indjas=$_POST['indjas'];
				$dkeb=$_POST['dkeb'];
				$dlad=$_POST['dlad'];
				$dsaw=$_POST['dsaw'];
				$dpertambang=$_POST['dpertambang'];
				$dpet=$_POST['dpet'];
				$dwis=$_POST['dwis'];
				$jmlrw=$_POST['jmlrw'];
				$jmlrt=$_POST['jmlrt'];
				$jmldusun=$_POST['jmldusun'];
				$statusotonomi=$_POST['statusotonomi'];
				$otobaru=$_POST['otobaru'];
				$dinduk=$_POST['dinduk'];
				$dmekar=$_POST['dmekar'];
				$dnonmekar=$_POST['dnonmekar'];
				$perdaijin=$_POST['perdaijin'];
				$perdaterbit=$_POST['perdaterbit'];
				$revisisjkterbit=$_POST['revisisjkterbit'];
				$perdaout=$_POST['perdaout'];
				$perdartrw=$_POST['perdartrw'];
				$imb=$_POST['imb'];
				$ijinprinsip=$_POST['ijinprinsip'];
				$ijinusaha=$_POST['ijinusaha'];
				$ijinusahakebun=$_POST['ijinusahakebun'];
				$ijinusahahutan=$_POST['ijinusahahutan'];
				$ijinusahatambang=$_POST['ijinusahatambang'];
				$ijininvesPMA=$_POST['ijininvesPMA'];
				$ijininvesPMDN=$_POST['ijininvesPMDN'];
				$RPJPDperda=$_POST['RPJPDperda'];
				$RPJMDperda=$_POST['RPJMDperda'];
				$perdaijin=$_POST['perdaijin'];
				$RKPDtahunini=$_POST['RKPDtahunini'];
				$RPJMDtahunini=$_POST['RPJMDtahunini'];
				$ijinlokasi=$_POST['ijinlokasi'];
				$singmohonlokasi=$_POST['singmohonlokasi'];
				$perdaiklimusaha=$_POST['perdaiklimusaha'];
				$langgarperda=$_POST['langgarperda'];
				$tegakperda=$_POST['tegakperda'];
				$jmlperdaijin=$_POST['jmlperdaijin'];
				$perdalalin=$_POST['perdalalin'];
				$perdataker=$_POST['perdataker'];
				$konsarpras=$_POST['konsarpras'];
				$kdinrah=$_POST['kdinrah'];
				$ringan=$_POST['ringan'];
				$sedang=$_POST['sedang'];
				$berat=$_POST['berat'];
				$kltek=$_POST['kltek'];
				$ringan1=$_POST['ringan1'];
				$sedang1=$_POST['sedang1'];
				$berat1=$_POST['berat1'];
				$kdes=$_POST['kdes'];
				$ringan2=$_POST['ringan2'];
				$sedang2=$_POST['sedang2'];
				$berat2=$_POST['berat2'];
				$kdin=$_POST['kdin'];
				$dewek=$_POST['dewek'];
				$sewa=$_POST['sewa'];
				$pinjam=$_POST['pinjam'];
				$gabung=$_POST['gabung'];
				$kltek1=$_POST['kltek1'];
				$dewek1=$_POST['dewek1'];
				$sewa1=$_POST['sewa1'];
				$pinjam1=$_POST['pinjam1'];
				$gabung1=$_POST['gabung1'];
				$sarpras=$_POST['sarpras'];
				$kbup=$_POST['kbup'];
				$ksetda=$_POST['ksetda'];
				$jmlstaffdidik=$_POST['jmlstaffdidik'];
				$prasd=$_POST['prasd'];
				$tsd=$_POST['tsd'];
				$tsmp=$_POST['tsmp'];
				$tsma=$_POST['tsma'];
				$takad=$_POST['takad'];
				$ts1=$_POST['ts1'];
				$jmlPNSgol=$_POST['jmlPNSgol'];
				$gol1=$_POST['gol1'];
				$gol2=$_POST['gol2'];
				$gol3=$_POST['gol3'];
				$gol4=$_POST['gol4'];
				$jmlpjbtstrukt=$_POST['jmlpjbtstrukt'];
				$ese1=$_POST['ese1'];
				$ese2=$_POST['ese2'];
				$ese3=$_POST['ese3'];
				$ese4=$_POST['ese4'];
				$jmlpjbtfung=$_POST['jmlpjbtfung'];
				$jmlexPNS=$_POST['jmlexPNS'];
				$exese1=$_POST['exese1'];
				$exese2=$_POST['exese2'];
				$exese3=$_POST['exese3'];
				$exese4=$_POST['exese4'];
				$kdprd=$_POST['kdprd'];
				$kinsp=$_POST['kinsp'];
				$jmlstaffdidik1=$_POST['jmlstaffdidik1'];
				$prasd1=$_POST['prasd1'];
				$tsd1=$_POST['tsd1'];
				$tsmp1=$_POST['tsmp1'];
				$tsma1=$_POST['tsma1'];
				$takad1=$_POST['takad1'];
				$ts11=$_POST['ts11'];
				$jmlPNSgol1=$_POST['jmlPNSgol1'];
				$gol11=$_POST['gol11'];
				$gol21=$_POST['gol21'];
				$gol31=$_POST['gol31'];
				$gol41=$_POST['gol41'];
				$jmlpjbtstrukt1=$_POST['jmlpjbtstrukt1'];
				$ese11=$_POST['ese11'];
				$ese21=$_POST['ese21'];
				$ese31=$_POST['ese31'];
				$ese41=$_POST['ese41'];
				$jmlpjbtfung1=$_POST['jmlpjbtfung1'];
				$jmlexPNS1=$_POST['jmlexPNS1'];
				$exese11=$_POST['exese11'];
				$exese21=$_POST['exese21'];
				$exese31=$_POST['exese31'];
				$exese41=$_POST['exese41'];
				$kbap=$_POST['kbap'];
				$jmlstaffdidik2=$_POST['jmlstaffdidik2'];
				$prasd2=$_POST['prasd2'];
				$tsd2=$_POST['tsd2'];
				$tsmp2=$_POST['tsmp2'];
				$tsma2=$_POST['tsma2'];
				$takad2=$_POST['takad2'];
				$ts12=$_POST['ts12'];
				$jmlPNSgol2=$_POST['jmlPNSgol2'];
				$gol12=$_POST['gol12'];
				$gol22=$_POST['gol22'];
				$gol32=$_POST['gol32'];
				$gol42=$_POST['gol42'];
				$jmlpjbtstrukt2=$_POST['jmlpjbtstrukt2'];
				$ese12=$_POST['ese12'];
				$ese22=$_POST['ese22'];
				$ese32=$_POST['ese32'];
				$ese42=$_POST['ese42'];
				$jmlpjbtfung2=$_POST['jmlpjbtfung2'];
				$jmlexPNS2=$_POST['jmlexPNS2'];
				$exese12=$_POST['exese12'];
				$exese22=$_POST['exese22'];
				$exese32=$_POST['exese32'];
				$exese42=$_POST['exese42'];
				$kdin=$_POST['kdin'];
				$jmlstaffdidik3=$_POST['jmlstaffdidik3'];
				$prasd3=$_POST['prasd3'];
				$tsd3=$_POST['tsd3'];
				$tsmp3=$_POST['tsmp3'];
				$tsma3=$_POST['tsma3'];
				$takad3=$_POST['takad3'];
				$ts13=$_POST['ts13'];
				$jmlPNSgol3=$_POST['jmlPNSgol3'];
				$gol13=$_POST['gol13'];
				$gol23=$_POST['gol23'];
				$gol33=$_POST['gol33'];
				$gol43=$_POST['gol43'];
				$jmlpjbtstrukt3=$_POST['jmlpjbtstrukt3'];
				$ese13=$_POST['ese13'];
				$ese23=$_POST['ese23'];
				$ese33=$_POST['ese33'];
				$ese43=$_POST['ese43'];
				$jmlpjbtfung3=$_POST['jmlpjbtfung3'];
				$jmlexPNS3=$_POST['jmlexPNS3'];
				$exese13=$_POST['exese13'];
				$exese23=$_POST['exese23'];
				$exese33=$_POST['exese33'];
				$exese43=$_POST['exese43'];
				$kltek=$_POST['kltek'];
				$jmlstaffdidik4=$_POST['jmlstaffdidik4'];
				$prasd4=$_POST['prasd4'];
				$tsd4=$_POST['tsd4'];
				$tsmp4=$_POST['tsmp4'];
				$tsma4=$_POST['tsma4'];
				$takad4=$_POST['takad4'];
				$ts14=$_POST['ts14'];
				$jmlPNSgol4=$_POST['jmlPNSgol4'];
				$gol14=$_POST['gol14'];
				$gol24=$_POST['gol24'];
				$gol34=$_POST['gol34'];
				$gol44=$_POST['gol44'];
				$jmlpjbtstrukt4=$_POST['jmlpjbtstrukt4'];
				$ese14=$_POST['ese14'];
				$ese24=$_POST['ese24'];
				$ese34=$_POST['ese34'];
				$ese44=$_POST['ese44'];
				$jmlpjbtfung4=$_POST['jmlpjbtfung4'];
				$jmlexPNS4=$_POST['jmlexPNS4'];
				$exese14=$_POST['exese14'];
				$exese24=$_POST['exese24'];
				$exese34=$_POST['exese34'];
				$exese44=$_POST['exese44'];
				$kpdes=$_POST['kpdes'];
				$jmlstaffdidik5=$_POST['jmlstaffdidik5'];
				$prasd5=$_POST['prasd5'];
				$tsd5=$_POST['tsd5'];
				$tsmp5=$_POST['tsmp5'];
				$tsma5=$_POST['tsma5'];
				$takad5=$_POST['takad5'];
				$ts15=$_POST['ts15'];
				$kcam=$_POST['kcam'];
				$jmlstaffdidik6=$_POST['prasd6'];
				$tsd6=$_POST['tsd6'];
				$tsmp6=$_POST['tsmp6'];
				$tsma6=$_POST['tsma6'];
				$takad6=$_POST['takad6'];
				$ts16=$_POST['ts16'];
				$klur=$_POST['klur'];
				$jmlstaffdidik7=$_POST['jmlstaffdidik7'];
				$prasd7=$_POST['prasd7'];
				$tsd7=$_POST['tsd7'];
				$tsmp7=$_POST['tsmp7'];
				$tsma7=$_POST['tsma7'];
				$takad7=$_POST['takad7'];
				$ts17=$_POST['ts17'];


				
				$implod1=array($adminpmr,$jmlkec,$jmlkel,$jmldes,$klasdesa,$dswad,$dswak,$dswas,$dpes,$dhut,$indjas,$dkeb,$dlad,$dsaw,$dpertambang,$dpet,$dwis,$jmlrw,$jmlrt,$jmldusun);
				$implod2=array($statusotonomi,$otobaru,$dinduk,$dmekar,$dnonmekar);
				$implod3=array($perdaijin,$perdaterbit,$revisisjkterbit,$perdaout,$perdartrw,$imb,$ijinprinsip,$ijinusaha,$ijinusahakebun,$ijinusahahutan,$ijinusahatambang,$ijininvesPMA,$ijininvesPMDN,$RPJPDperda,$RPJMDperda,$perdaijin,$RKPDtahunini,$RPJMDtahunini,$ijinlokasi,$singmohonlokasi,$perdaiklimusaha,$langgarperda,$tegakperda,$jmlperdaijin,$perdalalin,$perdataker);
				$implod4=array($sarpras,$kbup,$ksetda,$jmlstaffdidik,$prasd,$tsd,$tsmp,$tsma,$takad,$ts1,$jmlPNSgol,$gol1,$gol2,$gol3,$gol4,$jmlpjbtstrukt,$ese1,$ese2,$ese3,$ese4,$jmlpjbtfung,$jmlexPNS,$exese1,$exese2,$exese3,$exese4,$kdprd,$kinsp,$jmlstaffdidik1,$prasd1,$tsd1,$tsmp1,$tsma1,$takad1,$ts11,$jmlPNSgol1,$gol11,$gol21,$gol31,$gol41,$jmlpjbtstrukt1,$ese11,$ese21,$ese31,$ese41,$jmlpjbtfung1,$jmlexPNS1,$exese11,$exese21,$exese31,$exese41,$kbap,$jmlstaffdidik2,$prasd2,$tsd2,$tsmp2,$tsma2,$takad2,$ts12,$jmlPNSgol2,$gol12,$gol22,$gol32,$gol42,$jmlpjbtstrukt2,$ese12,$ese22,$ese32,$ese42,$jmlpjbtfung2,$jmlexPNS2,$exese12,$exese22,$exese32,$exese42,$kdin,$jmlstaffdidik3,$prasd3,$tsd3,$tsmp3,$tsma3,$takad3,$ts13,$jmlPNSgol3,$gol13,$gol23,$gol33,$gol43,$jmlpjbtstrukt3,$ese13,$ese23,$ese33,$ese43,$jmlpjbtfung3,$jmlexPNS3,$exese13,$exese23,$exese33,$exese43,$kltek,$jmlstaffdidik4,$prasd4,$tsd4,$tsmp4,$tsma4,$takad4,$ts14,$jmlPNSgol4,$gol14,$gol24,$gol34,$gol44,$jmlpjbtstrukt4,$ese14,$ese24,$ese34,$ese44,$jmlpjbtfung4,$jmlexPNS4,$exese14,$exese24,$exese34,$exese44,$kpdes,$jmlstaffdidik5,$prasd5,$tsd5,$tsmp5,$tsma5,$takad5,$ts15,$kcam,$jmlstaffdidik6,$tsd6,$tsmp6,$tsma6,$takad6,$ts16,$klur,$jmlstaffdidik7,$prasd7,$tsd7,$tsmp7,$tsma7,$takad7,$ts17);
				$implod5=array($konsarpras,$kdinrah,$ringan,$sedang,$berat,$kltek,$ringan1,$sedang1,$berat1,$kdes,$ringan2,$sedang2,$berat2,$kdin,$dewek,$sewa,$pinjam,$gabung,$kltek1,$dewek1,$sewa1,$pinjam1,$gabung1);

				$masukisi1=implode("#", $implod1);
				$masukisi2=implode("#", $implod2);
				$masukisi3=implode("#", $implod3);
				$masukisi4=implode("#", $implod4);
				$masukisi5=implode("#", $implod5);


				$sql1="INSERT INTO log VALUES('','pmr_adminpmr','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','pmr_statusotonomi','$user','$tahunini','$masukisi2','$waktuisi')";
				$sql3="INSERT INTO log VALUES('','pmr_perdaijin','$user','$tahunini','$masukisi3','$waktuisi')";
				$sql4="INSERT INTO log VALUES('','pmr_sarpras','$user','$tahunini','$masukisi4','$waktuisi')";
				$sql5="INSERT INTO log VALUES('','pmr_konsarpras','$user','$tahunini','$masukisi5','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);
				$command2=$conn->createCommand($sql2);
				$command3=$conn->createCommand($sql3);
				$command4=$conn->createCommand($sql4);
				$command5=$conn->createCommand($sql5);
				$command1->execute();$command2->execute();$command3->execute();$command4->execute();$command5->execute();
				$this->redirect(array(
					'dataumum'));
			}
		}

		public function actionSimpanDemografi()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;				
				$capil=$_POST['capil'];
				$jmlktp=$_POST['jmlktp'];
				$jmlktpsex=$_POST['jmlktpsex'];
				$l=$_POST['l'];
				$w=$_POST['w'];
				$jmlktpsex17=$_POST['jmlktpsex17'];
				$l1=$_POST['l1'];
				$nikah17=$_POST['17nikah'];
				$jmlorgsex=$_POST['jmlorgsex'];
				$l2=$_POST['l2'];
				$p2=$_POST['p2'];
				$nikahakta=$_POST['nikahakta'];
				$nikahtot=$_POST['nikahtot'];
				$orgKK=$_POST['orgKK'];
				$orgakta=$_POST['orgakta'];
				$orgpnylahan=$_POST['orgpnylahan'];
				$lahantani=$_POST['lahantani'];
				$lahannontani=$_POST['lahannontani'];
				$fampnyjob=$_POST['fampnyjob'];
				$famjobtani=$_POST['famjobtani'];
				$famjobnontani=$_POST['famjobnontani'];
				$orgpnyusia=$_POST['orgpnyusia'];
				$nolempat=$_POST['04'];
				$patnam=$_POST['46'];
				$juwalas=$_POST['712'];
				$galasmalas=$_POST['1315'];
				$namlaspanlas=$_POST['1618'];
				$ngalaspatkur=$_POST['1924'];
				$lawengakur=$_POST['2529'];
				$lunglupat=$_POST['3034'];
				$lumalunga=$_POST['3539'];
				$tangpatpat=$_POST['4044'];
				$pamapanga=$_POST['4549'];
				$ketketpat=$_POST['5054'];
				$ketmaketnga=$_POST['5559'];
				$dakdakpat=$_POST['6064'];
				$dakma=$_POST['65'];
				$deprat=$_POST['deprat'];
				$padatpenduduk=$_POST['padatpenduduk'];
				$kota=$_POST['kota'];
				$desa=$_POST['desa'];
				$inoutsave=$_POST['inoutsave'];
				$inkap=$_POST['inkap'];
				$hargakons=$_POST['hargakons'];
				$dayabeli=$_POST['dayabeli'];
				$dayabeliavg=$_POST['dayabeliavg'];
				$totout=$_POST['totout'];
				$totoutfam=$_POST['totoutfam'];
				$tk=$_POST['tk'];
				$org15=$_POST['org15'];
				$jkeg=$_POST['jkeg'];
				$lpekut=$_POST['lpekut'];
				$statpekut=$_POST['statpekut'];
				$angker=$_POST['angker'];
				$ker=$_POST['ker'];
				$pker=$_POST['pker'];
				$lker=$_POST['lker'];
				$cker=$_POST['cker'];
				$pcker=$_POST['pcker'];
				$lcker=$_POST['lcker'];
				$probker=$_POST['probker'];
				$ckerdaf=$_POST['ckerdaf'];
				$ckertem=$_POST['ckertem'];
				$anggur=$_POST['anggur'];
				$anggurs=$_POST['anggurs'];
				$sanggur=$_POST['sanggur'];
				$anggurt=$_POST['anggurt'];
				$tkdn=$_POST['tkdn'];
				$tkdnp=$_POST['tkdnp'];
				$tkdnl=$_POST['tkdnl'];
				$tkdnPMA=$_POST['tkdnPMA'];
				$tkdnPMDN=$_POST['tkdnPMDN'];
				$tki=$_POST['tki'];
				$tkiw=$_POST['tkiw'];
				$tkip=$_POST['tkip'];
				$phk=$_POST['phk'];
				$kphk=$_POST['kphk'];
				$ophk=$_POST['ophk'];
				$umr=$_POST['umr'];
				$totcker=$_POST['totcker'];
				$kerumr=$_POST['kerumr'];
				$kerumravg=$_POST['kerumravg'];
				$jamkeravg=$_POST['jamkeravg'];
				$pekastek=$_POST['pekastek'];
				$perastek=$_POST['perastek'];
				$parjamsos=$_POST['parjamsos'];
				$perjamsos=$_POST['perjamsos'];
				$pblmu=$_POST['pblmu'];
				$tahubukan=$_POST['tahubukan'];
				$tambanggali=$_POST['tambanggali'];
				$inolah=$_POST['inolah'];
				$lga=$_POST['lga'];
				$bangun=$_POST['bangun'];
				$dagang=$_POST['dagang'];
				$tandamu=$_POST['tandamu'];
				$kesisataja=$_POST['kesisataja'];
				$jamas=$_POST['jamas'];
				$tumduk=$_POST['tumduk'];
				$tummi=$_POST['tummi'];
				$bayimati=$_POST['bayimati'];
				$imr=$_POST['imr'];
				$mmr=$_POST['mmr'];
				$mig=$_POST['mig'];
				$migin=$_POST['migin'];
				$migout=$_POST['migout'];
				$lahirhidup=$_POST['lahirhidup'];
				$lahirhidupavg=$_POST['lahirhidupavg'];
				$hidupavg=$_POST['hidupavg'];
				$hopehidup=$_POST['hopehidup'];
				$hopel=$_POST['hopel'];
				$hopep=$_POST['hopep'];
				$pendudukdidik=$_POST['pendudukdidik'];
				$dprasd=$_POST['dprasd'];
				$dsd=$_POST['dsd'];
				$dsmp=$_POST['dsmp'];
				$dsma=$_POST['dsma'];
				$ddip=$_POST['ddip'];
				$ds1=$_POST['ds1'];
				$ds2=$_POST['ds2'];
				$ds3=$_POST['ds3'];
				$keluarga=$_POST['keluarga'];
				$jmlkeluarga=$_POST['jmlkeluarga'];
				$jmlanak=$_POST['jmlanak'];
				$jmlrumtang=$_POST['jmlrumtang'];
				$urumtang=$_POST['urumtang'];
				$jmlrmhtgl=$_POST['jmlrmhtgl'];
				$tanilayan=$_POST['tanilayan'];
				$jmltangtani=$_POST['jmltangtani'];
				$rttani=$_POST['rttani'];
				$rtbtani=$_POST['rtbtani'];
				$jmlrtlayan=$_POST['jmlrtlayan'];
				$layanp=$_POST['layanp'];
				$layansu=$_POST['layansu'];
				$layanst=$_POST['layanst'];
				$jmltransm=$_POST['jmltransm'];
				$transmnew=$_POST['transmnew'];
				$transmsw=$_POST['transmsw'];
				$perempuananak=$_POST['perempuananak'];
				$jmlkerp=$_POST['jmlkerp'];
				$lempem=$_POST['lempem'];
				$pese2=$_POST['pese2'];
				$pese3=$_POST['pese3'];
				$pese4=$_POST['pese4'];
				$lemswas=$_POST['lemswas'];
				$tkunder=$_POST['tkunder'];
				$patbelas=$_POST['14'];
				$mangtaun=$_POST['5'];
				
				$implod1=array($capil,$jmlktp,$jmlktpsex,$l,$w,$jmlktpsex17,$l1,$nikah17,$jmlorgsex,$l2,$p2,$nikahakta,$nikahtot,$orgKK,$orgakta);
				$implod2=array($orgpnylahan,$lahantani,$lahannontani);
				$implod3=array($fampnyjob,$famjobtani,$famjobnontani);
				$implod4=array($orgpnyusia,$nolempat,$patnam,$juwalas,$galasmalas,$namlaspanlas,$ngalaspatkur,$lawengakur,$lunglupat,$lumalunga,$tangpatpat,$pamapanga,$ketketpat,$ketmaketnga,$dakdakpat,$dakma);
				$implod5=array($deprat);
				$implod6=array($padatpenduduk,$kota,$desa);
				$implod7=array($inoutsave,$inkap,$hargakons,$dayabeli,$dayabeliavg,$totout,$totoutfam);
				$implod8=array($tk,$org15,$jkeg,$lpekut,$statpekut,$angker,$ker,$pker,$lker,$cker,$pcker,$lcker,$probker,$ckerdaf,$ckertem,$anggur,$anggurs,$sanggur,$anggurt,$tkdn,$tkdnp,$tkdnl,$tkdnPMA,$tkdnPMDN,$tki,$tkiw,$tkip,$phk,$kphk,$ophk,$umr,$totcker,$kerumr,$kerumravg,$jamkeravg,$pekastek,$perastek,$parjamsos,$perjamsos);
				$implod9=array($pblmu,$tahubukan,$tambanggali,$inolah,$lga,$bangun,$dagang,$tandamu,$kesisataja,$jamas);
				$implod10=array($tumduk,$tummi,$bayimati,$imr,$mmr,$mig,$migin,$migout,$lahirhidup,$lahirhidupavg,$hidupavg);
				$implod11=array($hopehidup,$hopel,$hopep);
				$implod12=array($pendudukdidik,$dprasd,$dsd,$dsmp,$dsma,$ddip,$ds1,$ds2,$ds3);
				$implod13=array($keluarga,$jmlkeluarga,$jmlanak);
				$implod14=array($jmlrumtang);
				$implod15=array($urumtang);
				$implod16=array($jmlrmhtgl);
				$implod17=array($tanilayan,$jmltangtani,$rttani,$rtbtani,$jmlrtlayan,$layanp,$layansu,$layanst,$jmltransm,$transmnew,$transmsw);
				$implod18=array($perempuananak,$jmlkerp,$lempem,$pese2,$pese3,$pese4,$lemswas);
				$implod19=array($tkunder,$patbelas,$mangtaun);

				$masukisi1=implode("#", $implod1);
				$masukisi2=implode("#", $implod2);
				$masukisi3=implode("#", $implod3);
				$masukisi4=implode("#", $implod4);
				$masukisi5=implode("#", $implod5);
				$masukisi6=implode("#", $implod6);
				$masukisi7=implode("#", $implod7);
				$masukisi8=implode("#", $implod8);
				$masukisi9=implode("#", $implod9);
				$masukisi10=implode("#", $implod10);
				$masukisi11=implode("#", $implod11);
				$masukisi12=implode("#", $implod12);
				$masukisi13=implode("#", $implod13);
				$masukisi14=implode("#", $implod14);
				$masukisi15=implode("#", $implod15);
				$masukisi16=implode("#", $implod16);
				$masukisi17=implode("#", $implod17);
				$masukisi18=implode("#", $implod18);
				$masukisi19=implode("#", $implod19);

				$sql1="INSERT INTO log VALUES('','dmg_capil','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','dmg_lahan','$user','$tahunini','$masukisi2','$waktuisi')";
				$sql3="INSERT INTO log VALUES('','dmg_famjob','$user','$tahunini','$masukisi3','$waktuisi')";
				$sql4="INSERT INTO log VALUES('','dmg_usia','$user','$tahunini','$masukisi4','$waktuisi')";
				$sql5="INSERT INTO log VALUES('','dmg_deprat','$user','$tahunini','$masukisi5','$waktuisi')";
				$sql6="INSERT INTO log VALUES('','dmg_padatpenduduk','$user','$tahunini','$masukisi6','$waktuisi')";
				$sql7="INSERT INTO log VALUES('','dmg_inoutsave','$user','$tahunini','$masukisi7','$waktuisi')";
				$sql8="INSERT INTO log VALUES('','dmg_tk','$user','$tahunini','$masukisi8','$waktuisi')";
				$sql9="INSERT INTO log VALUES('','dmg_pblmu','$user','$tahunini','$masukisi9','$waktuisi')";
				$sql10="INSERT INTO log VALUES('','dmg_tumduk','$user','$tahunini','$masukisi10','$waktuisi')";
				$sql11="INSERT INTO log VALUES('','dmg_angkahidup','$user','$tahunini','$masukisi11','$waktuisi')";
				$sql12="INSERT INTO log VALUES('','dmg_pendudukdidik','$user','$tahunini','$masukisi12','$waktuisi')";
				$sql13="INSERT INTO log VALUES('','dmg_keluarga','$user','$tahunini','$masukisi13','$waktuisi')";
				$sql14="INSERT INTO log VALUES('','dmg_rumtang','$user','$tahunini','$masukisi14','$waktuisi')";
				$sql15="INSERT INTO log VALUES('','dmg_urumtang','$user','$tahunini','$masukisi15','$waktuisi')";
				$sql16="INSERT INTO log VALUES('','dmg_jmlrmhtgl','$user','$tahunini','$masukisi16','$waktuisi')";
				$sql17="INSERT INTO log VALUES('','dmg_tanilayan','$user','$tahunini','$masukisi17','$waktuisi')";
				$sql18="INSERT INTO log VALUES('','dmg_perempuananak','$user','$tahunini','$masukisi18','$waktuisi')";
				$sql19="INSERT INTO log VALUES('','dmg_tkunder','$user','$tahunini','$masukisi19','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);
				$command2=$conn->createCommand($sql2);
				$command3=$conn->createCommand($sql3);
				$command4=$conn->createCommand($sql4);
				$command5=$conn->createCommand($sql5);
				$command6=$conn->createCommand($sql6);
				$command7=$conn->createCommand($sql7);
				$command8=$conn->createCommand($sql8);
				$command9=$conn->createCommand($sql9);
				$command10=$conn->createCommand($sql10);
				$command11=$conn->createCommand($sql11);
				$command12=$conn->createCommand($sql12);
				$command13=$conn->createCommand($sql13);
				$command14=$conn->createCommand($sql14);
				$command15=$conn->createCommand($sql15);
				$command16=$conn->createCommand($sql16);
				$command17=$conn->createCommand($sql17);
				$command18=$conn->createCommand($sql18);
				$command19=$conn->createCommand($sql19);
				$command1->execute();$command2->execute();$command3->execute();$command4->execute();$command5->execute();$command6->execute();$command7->execute();$command8->execute();$command9->execute();$command10->execute();$command11->execute();$command12->execute();$command13->execute();$command14->execute();$command15->execute();$command16->execute();$command17->execute();$command18->execute();$command19->execute();
				$this->redirect(array(
					'dataumum'));
			}
		}

		public function actionSimpanKesehatan()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$sarkes=$_POST['sarkes'];
				$posyandu=$_POST['posyandu'];
				$pbersama=$_POST['pbersama'];
				$ptidakaktif=$_POST['ptidakaktif'];
				$poskesdes=$_POST['poskesdes'];
				$sarkespuskes=$_POST['sarkespuskes'];
				$pusinduk=$_POST['pusinduk'];
				$pusbantu=$_POST['pusbantu'];
				$pusliling=$_POST['pusliling'];
				$pusklinik=$_POST['pusklinik'];
				$rsud=$_POST['rsud'];
				$rsuda=$_POST['rsuda'];
				$rsudb=$_POST['rsudb'];
				$rsudc=$_POST['rsudc'];
				$rsudd=$_POST['rsudd'];
				$rsus=$_POST['rsus'];
				$rsusa=$_POST['rsusa'];
				$rsusb=$_POST['rsusb'];
				$rsusc=$_POST['rsusc'];
				$rsusd=$_POST['rsusd'];
				$rsk=$_POST['rsk'];
				$rsksalin=$_POST['rsksalin'];
				$rskjiwa=$_POST['rskjiwa'];
				$rskobat=$_POST['rskobat'];
				$rskkusta=$_POST['rskkusta'];
				$rskmata=$_POST['rskmata'];
				$rskbedah=$_POST['rskbedah'];
				$rskjantung=$_POST['rskjantung'];
				$rskparu=$_POST['rskparu'];
				$klidok=$_POST['klidok'];
				$rsup=$_POST['rsup'];
				$rst=$_POST['rst'];
				$rstad=$_POST['rstad'];
				$rstau=$_POST['rstau'];
				$rstal=$_POST['rstal'];
				$rstpolri=$_POST['rstpolri'];
				$labersih=$_POST['labersih'];
				$jmlrtlab=$_POST['jmlrtlab'];
				$ledeng=$_POST['ledeng'];
				$sumdung=$_POST['sumdung'];
				$sumtakdung=$_POST['sumtakdung'];
				$madung=$_POST['madung'];
				$matakdung=$_POST['matakdung'];
				$rtlabsungai=$_POST['rtlabsungai'];
				$rtlabwaduk=$_POST['rtlabwaduk'];
				$rtlabrain=$_POST['rtlabrain'];
				$rtlabkemasan=$_POST['rtlabkemasan'];
				$jmlrtaam=$_POST['jmlrtaam'];
				$balkesmas=$_POST['balkesmas'];
				$baltekkesling=$_POST['baltekkesling'];
				$siif=$_POST['siif'];
				$infarnar=$_POST['infarnar'];
				$infarpot=$_POST['infarpot'];
				$gudfar=$_POST['gudfar'];
				$pedbesfar=$_POST['pedbesfar'];
				$prodalkes=$_POST['prodalkes'];
				$lurobkes=$_POST['lurobkes'];
				$capak=$_POST['capak'];
				$kesmas=$_POST['kesmas'];
				$gila=$_POST['gila'];
				$nark=$_POST['nark'];
				$jmlbalita=$_POST['jmlbalita'];
				$bkgizi=$_POST['bkgizi'];
				$noltiga=$_POST['03'];
				$kurgiz=$_POST['kurgiz'];
				$jmlgizbuk=$_POST['jmlgizbuk'];
				$gizbuk=$_POST['gizbuk'];
				$sakitavg=$_POST['sakitavg'];
				$matiwabahtot=$_POST['matiwabahtot'];
				$muntaber=$_POST['muntaber'];
				$mdbd=$_POST['mdbd'];
				$ispa=$_POST['ispa'];
				$campak=$_POST['campak'];
				$malaria=$_POST['malaria'];
				$wlainnya=$_POST['wlainnya'];
				$hamilgizbuk=$_POST['hamilgizbuk'];
				$kbaktif=$_POST['kbaktif'];
				$kbaktifl=$_POST['kbaktifl'];
				$kbaktifp=$_POST['kbaktifp'];
				$kbaksep=$_POST['kbaksep'];
				$kbaksepl=$_POST['kbaksepl'];
				$kbaksepp=$_POST['kbaksepp'];
				$pasbur=$_POST['pasbur'];
				$pasburkb=$_POST['pasburkb'];
				$jmlhamilk4=$_POST['jmlhamilk4'];
				$cakhamilk4=$_POST['cakhamilk4'];
				$layanbalita=$_POST['layanbalita'];
				$asi624=$_POST['asi624'];
				$nifas=$_POST['nifas'];
				$neonatus=$_POST['neonatus'];
				$jaringsd=$_POST['jaringsd'];
				$gdlvl1=$_POST['gdlvl1'];
				$dagkes=$_POST['dagkes'];
				$apotek=$_POST['apotek'];
				$tobat=$_POST['tobat'];
				$tenkes=$_POST['tenkes'];
				$dokum=$_POST['dokum'];
				$dokspes=$_POST['dokspes'];
				$dokgi=$_POST['dokgi'];
				$nurse=$_POST['nurse'];
				$tkbidan=$_POST['tkbidan'];
				$apl=$_POST['apl'];
				$sarfar=$_POST['sarfar'];
				$ahzi=$_POST['ahzi'];
				$anlab=$_POST['anlab'];
				$ahron=$_POST['ahron'];
				$bides=$_POST['bides'];
				$asap=$_POST['asap'];
				$pralk=$_POST['pralk'];
				$bides1=$_POST['bides1'];
				$epikes=$_POST['epikes'];
				$entokes=$_POST['entokes'];
				$sanit=$_POST['sanit'];
				$adkes=$_POST['adkes'];
				$pekemas=$_POST['pekemas'];
				$pergi=$_POST['pergi'];
				$nutri=$_POST['nutri'];
				$rgraf=$_POST['rgraf'];
				$kamdis=$_POST['kamdis'];
				$tekek=$_POST['tekek'];
				$kompbidan=$_POST['kompbidan'];
				$jmlbidtang=$_POST['jmlbidtang'];
				$bidtang=$_POST['bidtang'];
				$ibukompbid=$_POST['ibukompbid'];
				$salinbid=$_POST['salinbid'];
				$ibugatan=$_POST['ibugatan'];
				$totibusalin=$_POST['totibusalin'];
				$uci=$_POST['uci'];
				$pppp=$_POST['pppp'];
				$tbcbta=$_POST['tbcbta'];
				$tbctemuobat=$_POST['tbctemuobat'];
				$tbckira=$_POST['tbckira'];
				$dbd=$_POST['dbd'];
				$dbdsop=$_POST['dbdsop'];
				$dbdtemu=$_POST['dbdtemu'];
				$afp=$_POST['afp'];
				$afptemuobat=$_POST['afptemuobat'];
				$afpkira=$_POST['afpkira'];
				$plain=$_POST['plain'];
				$plaintemuobat=$_POST['plaintemuobat'];
				$plainkira=$_POST['plainkira'];
				$pkrpmm=$_POST['pkrpmm'];
				$jmlpmsks=$_POST['jmlpmsks'];
				$pkdpmm=$_POST['pkdpmm'];
				$kunbay=$_POST['kunbay'];
				$bstan=$_POST['bstan'];
				$bsama=$_POST['bsama'];
				$klb=$_POST['klb'];
				$siagaaktif=$_POST['siagaaktif'];

				$implod1=array($sarkes,$posyandu,$pbersama,$ptidakaktif,$poskesdes,$sarkespuskes,$pusinduk,$pusbantu,$pusliling,$pusklinik,$rsud,$rsuda,$rsudb,$rsudc,$rsudd,$rsus,$rsusa,$rsusb,$rsusc,$rsusd,$rsk,$rsksalin,$rskjiwa,$rskobat,$rskkusta,$rskmata,$rskbedah,$rskjantung,$rskparu,$klidok,$rsup,$rst,$rstad,$rstau,$rstal,$rstpolri,$labersih,$jmlrtlab,$ledeng,$sumdung,$sumtakdung,$madung,$matakdung,$rtlabsungai,$rtlabwaduk,$rtlabrain,$rtlabkemasan,$jmlrtaam,$balkesmas,$baltekkesling);
				$implod2=array($siif,$infarnar,$infarpot,$gudfar,$pedbesfar,$prodalkes,$lurobkes,$capak);
				$implod3=array($kesmas,$gila,$nark,$jmlbalita,$bkgizi,$noltiga,$kurgiz,$jmlgizbuk,$gizbuk,$sakitavg,$matiwabahtot,$muntaber,$mdbd,$ispa,$campak,$malaria,$wlainnya,$hamilgizbuk,$kbaktif,$kbaktifl,$kbaktifp,$kbaksep,$kbaksepl,$kbaksepp,$pasbur,$pasburkb,$jmlhamilk4,$cakhamilk4,$layanbalita,$asi624,$nifas,$neonatus,$jaringsd,$gdlvl1);
				$implod4=array($dagkes,$apotek,$tobat);
				$implod5=array($tenkes,$dokum,$dokspes,$dokgi,$nurse,$tkbidan,$apl,$sarfar,$ahzi,$anlab,$ahron,$bides,$asap,$pralk,$bides1,$epikes,$entokes,$sanit,$adkes,$pekemas,$pergi,$nutri,$rgraf,$kamdis,$tekek);
				$implod6=array($kompbidan,$jmlbidtang,$bidtang,$ibukompbid,$salinbid,$ibugatan,$totibusalin);
				$implod7=array($uci);
				$implod8=array($pppp,$tbcbta,$tbctemuobat,$tbckira,$dbd,$dbdsop,$dbdtemu,$afp,$afptemuobat,$afpkira,$plain,$plaintemuobat,$plainkira);
				$implod9=array($pkrpmm,$jmlpmsks);
				$implod10=array($pkdpmm);
				$implod11=array($kunbay,$bstan,$bsama);
				$implod12=array($klb);
				$implod13=array($siagaaktif);

				$masukisi1=implode("#", $implod1);
				$masukisi2=implode("#", $implod2);
				$masukisi3=implode("#", $implod3);
				$masukisi4=implode("#", $implod4);
				$masukisi5=implode("#", $implod5);
				$masukisi6=implode("#", $implod6);
				$masukisi7=implode("#", $implod7);
				$masukisi8=implode("#", $implod8);
				$masukisi9=implode("#", $implod9);
				$masukisi10=implode("#", $implod10);
				$masukisi11=implode("#", $implod11);
				$masukisi12=implode("#", $implod12);
				$masukisi13=implode("#", $implod13);

				$sql1="INSERT INTO log VALUES('','kes_sarkes','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','kes_siif','$user','$tahunini','$masukisi2','$waktuisi')";
				$sql3="INSERT INTO log VALUES('','kes_kesmas','$user','$tahunini','$masukisi3','$waktuisi')";
				$sql4="INSERT INTO log VALUES('','kes_dagkes','$user','$tahunini','$masukisi4','$waktuisi')";
				$sql5="INSERT INTO log VALUES('','kes_tenkes','$user','$tahunini','$masukisi5','$waktuisi')";
				$sql6="INSERT INTO log VALUES('','kes_kompbidan','$user','$tahunini','$masukisi6','$waktuisi')";
				$sql7="INSERT INTO log VALUES('','kes_uci','$user','$tahunini','$masukisi7','$waktuisi')";
				$sql8="INSERT INTO log VALUES('','kes_pppp','$user','$tahunini','$masukisi8','$waktuisi')";
				$sql9="INSERT INTO log VALUES('','kes_pkrpmm','$user','$tahunini','$masukisi9','$waktuisi')";
				$sql10="INSERT INTO log VALUES('','kes_pkdpmm','$user','$tahunini','$masukisi10','$waktuisi')";
				$sql11="INSERT INTO log VALUES('','kes_kunbay','$user','$tahunini','$masukisi11','$waktuisi')";
				$sql12="INSERT INTO log VALUES('','kes_klb','$user','$tahunini','$masukisi12','$waktuisi')";
				$sql13="INSERT INTO log VALUES('','kes_siagaaktif','$user','$tahunini','$masukisi13','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);
				$command2=$conn->createCommand($sql2);
				$command3=$conn->createCommand($sql3);
				$command4=$conn->createCommand($sql4);
				$command5=$conn->createCommand($sql5);
				$command6=$conn->createCommand($sql6);
				$command7=$conn->createCommand($sql7);
				$command8=$conn->createCommand($sql8);
				$command9=$conn->createCommand($sql9);
				$command10=$conn->createCommand($sql10);
				$command11=$conn->createCommand($sql11);
				$command12=$conn->createCommand($sql12);
				$command13=$conn->createCommand($sql13);
				$command1->execute();$command2->execute();$command3->execute();$command4->execute();$command5->execute();$command6->execute();$command7->execute();$command8->execute();$command9->execute();$command10->execute();$command11->execute();$command12->execute();$command13->execute();
				$this->redirect(array(
					'sosbud'));
			}
		}

		public function actionSimpanPendidikan()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$didikumum=$_POST['didikumum'];
				$jmlskul=$_POST['jmlskul'];
				$skultk=$_POST['skultk'];
				$tknegeri=$_POST['tknegeri'];
				$tknbaik=$_POST['tknbaik'];
				$tkntbaik=$_POST['tkntbaik'];
				$tkswas=$_POST['tkswas'];
				$tksbaik=$_POST['tksbaik'];
				$tkstbaik=$_POST['tkstbaik'];
				$skullb=$_POST['skullb'];
				$slbnegeri=$_POST['slbnegeri'];
				$slbnbaik=$_POST['slbnbaik'];
				$slbntbaik=$_POST['slbntbaik'];
				$slbswas=$_POST['slbswas'];
				$slbsbaik=$_POST['slbsbaik'];
				$slbstbaik=$_POST['slbstbaik'];
				$skuld=$_POST['skuld'];
				$sdnegeri=$_POST['sdnegeri'];
				$sdnbaik=$_POST['sdnbaik'];
				$sdntbaik=$_POST['sdntbaik'];
				$sdswas=$_POST['sdswas'];
				$sdsbaik=$_POST['sdsbaik'];
				$sdstbaik=$_POST['sdstbaik'];
				$skulmp=$_POST['skulmp'];
				$smpnegeri=$_POST['smpnegeri'];
				$smpnbaik=$_POST['smpnbaik'];
				$smpntbaik=$_POST['smpntbaik'];
				$smpswas=$_POST['smpswas'];
				$smpsbaik=$_POST['smpsbaik'];
				$smpstbaik=$_POST['smpstbaik'];
				$skulma=$_POST['skulma'];
				$smanegeri=$_POST['smanegeri'];
				$smanbaik=$_POST['smanbaik'];
				$smantbaik=$_POST['smantbaik'];
				$smaswas=$_POST['smaswas'];
				$smasbaik=$_POST['smasbaik'];
				$smastbaik=$_POST['smastbaik'];
				$skulmk=$_POST['skulmk'];
				$smknegeri=$_POST['smknegeri'];
				$smknbaik=$_POST['smknbaik'];
				$smkntbaik=$_POST['smkntbaik'];
				$smkswas=$_POST['smkswas'];
				$smksbaik=$_POST['smksbaik'];
				$smkstbaik=$_POST['smkstbaik'];
				$pting=$_POST['pting'];
				$ptingnegeri=$_POST['ptingnegeri'];
				$ptingnbaik=$_POST['ptingnbaik'];
				$ptingntbaik=$_POST['ptingntbaik'];
				$ptingswas=$_POST['ptingswas'];
				$ptingsbaik=$_POST['ptingsbaik'];
				$ptingstbaik=$_POST['ptingstbaik'];
				$lpket=$_POST['lpket'];
				$sekmenjur=$_POST['sekmenjur'];
				$akadiplo=$_POST['akadiplo'];
				$jmlskulag=$_POST['jmlskulag'];
				$madib=$_POST['madib'];
				$madibnegeri=$_POST['madibnegeri'];
				$madibnbaik=$_POST['madibnbaik'];
				$madibntbaik=$_POST['madibntbaik'];
				$madibswas=$_POST['madibswas'];
				$madibsbaik=$_POST['madibsbaik'];
				$madibstbaik=$_POST['madibstbaik'];
				$madts=$_POST['madts'];
				$madtsnegeri=$_POST['madtsnegeri'];
				$madtsnbaik=$_POST['madtsnbaik'];
				$madtsntbaik=$_POST['madtsntbaik'];
				$madtsswas=$_POST['madtsswas'];
				$madtssbaik=$_POST['madtssbaik'];
				$madtsstbaik=$_POST['madtsstbaik'];
				$madal=$_POST['madal'];
				$madalnegeri=$_POST['madalnegeri'];
				$madalnbaik=$_POST['madalnbaik'];
				$madalntbaik=$_POST['madalntbaik'];
				$madalswas=$_POST['madalswas'];
				$madalsbaik=$_POST['madalsbaik'];
				$madalstbaik=$_POST['madalstbaik'];
				$ptai=$_POST['ptai'];
				$ptainegeri=$_POST['ptainegeri'];
				$ptainbaik=$_POST['ptainbaik'];
				$ptaintbaik=$_POST['ptaintbaik'];
				$ptaiswas=$_POST['ptaiswas'];
				$ptaisbaik=$_POST['ptaisbaik'];
				$ptaistbaik=$_POST['ptaistbaik'];
				$ptaki=$_POST['ptaki'];
				$ptakinegeri=$_POST['ptakinegeri'];
				$ptakinbaik=$_POST['ptakinbaik'];
				$ptakintbaik=$_POST['ptakintbaik'];
				$ptakiswas=$_POST['ptakiswas'];
				$ptakisbaik=$_POST['ptakisbaik'];
				$ptakistbaik=$_POST['ptakistbaik'];
				$ptako=$_POST['ptako'];
				$ptakonegeri=$_POST['ptakonegeri'];
				$ptakonbaik=$_POST['ptakonbaik'];
				$ptakontbaik=$_POST['ptakontbaik'];
				$ptakoswas=$_POST['ptakoswas'];
				$ptakosbaik=$_POST['ptakosbaik'];
				$ptakostbaik=$_POST['ptakostbaik'];
				$ptahin=$_POST['ptahin'];
				$ptahinnegeri=$_POST['ptahinnegeri'];
				$ptahinnbaik=$_POST['ptahinnbaik'];
				$ptahinntbaik=$_POST['ptahinntbaik'];
				$ptahinswas=$_POST['ptahinswas'];
				$ptahinsbaik=$_POST['ptahinsbaik'];
				$ptahinstbaik=$_POST['ptahinstbaik'];
				$jmlkelas=$_POST['jmlkelas'];
				$jmltksej=$_POST['jmltksej'];
				$jmlsdsej=$_POST['jmlsdsej'];
				$jmlsmpsej=$_POST['jmlsmpsej'];
				$jmlsmasej=$_POST['jmlsmasej'];
				$jmlptsej=$_POST['jmlptsej'];
				$jmllepeksej=$_POST['jmllepeksej'];
				$jmlsmksej=$_POST['jmlsmksej'];
				$jmlsismasiswa=$_POST['jmlsismasiswa'];
				$tksis=$_POST['tksis'];
				$tknsis=$_POST['tknsis'];
				$tkssis=$_POST['tkssis'];
				$tpasis=$_POST['tpasis'];
				$tpansis=$_POST['tpansis'];
				$tpassis=$_POST['tpassis'];
				$slbsis=$_POST['slbsis'];
				$slbnsis=$_POST['slbnsis'];
				$slbssis=$_POST['slbssis'];
				$sdsis=$_POST['sdsis'];
				$sdnsis=$_POST['sdnsis'];
				$sdssis=$_POST['sdssis'];
				$smpsis=$_POST['smpsis'];
				$smpnsis=$_POST['smpnsis'];
				$smpssis=$_POST['smpssis'];
				$smksis=$_POST['smksis'];
				$smknsis=$_POST['smknsis'];
				$smkssis=$_POST['smkssis'];
				$smasis=$_POST['smasis'];
				$smansis=$_POST['smansis'];
				$smassis=$_POST['smassis'];
				$ptingsis=$_POST['ptingsis'];
				$ptingnsis=$_POST['ptingnsis'];
				$ptingssis=$_POST['ptingssis'];
				$lempeksis=$_POST['lempeksis'];
				$jmlgurus1d4=$_POST['jmlgurus1d4'];
				$gurus1d4sd=$_POST['gurus1d4sd'];
				$gurus1d4smp=$_POST['gurus1d4smp'];
				$gurus1d4sma=$_POST['gurus1d4sma'];
				$jmlgurudosen=$_POST['jmlgurudosen'];
				$tkgurdos=$_POST['tkgurdos'];
				$tkngurdos=$_POST['tkngurdos'];
				$tksgurdos=$_POST['tksgurdos'];
				$slbgurdos=$_POST['slbgurdos'];
				$slbngurdos=$_POST['slbngurdos'];
				$slbsgurdos=$_POST['slbsgurdos'];
				$sdgurdos=$_POST['sdgurdos'];
				$sdngurdos=$_POST['sdngurdos'];
				$sdsgurdos=$_POST['sdsgurdos'];
				$smpgurdos=$_POST['smpgurdos'];
				$smpngurdos=$_POST['smpngurdos'];
				$smpsgurdos=$_POST['smpsgurdos'];
				$smagurdos=$_POST['smagurdos'];
				$smangurdos=$_POST['smangurdos'];
				$smasgurdos=$_POST['smasgurdos'];
				$smkgurdos=$_POST['smkgurdos'];
				$smkngurdos=$_POST['smkngurdos'];
				$smksgurdos=$_POST['smksgurdos'];
				$ptinggurdos=$_POST['ptinggurdos'];
				$ptingngurdos=$_POST['ptingngurdos'];
				$ptingsgurdos=$_POST['ptingsgurdos'];
				$lempekgurdos=$_POST['lempekgurdos'];
				$gurupkl=$_POST['gurupkl'];
				$tkgupkl=$_POST['tkgupkl'];
				$tkngupkl=$_POST['tkngupkl'];
				$tksgupkl=$_POST['tksgupkl'];
				$slbgupkl=$_POST['slbgupkl'];
				$slbngupkl=$_POST['slbngupkl'];
				$slbsgupkl=$_POST['slbsgupkl'];
				$sdgupkl=$_POST['sdgupkl'];
				$sdngupkl=$_POST['sdngupkl'];
				$sdsgupkl=$_POST['sdsgupkl'];
				$smpgupkl=$_POST['smpgupkl'];
				$smpngupkl=$_POST['smpngupkl'];
				$smpsgupkl=$_POST['smpsgupkl'];
				$smagupkl=$_POST['smagupkl'];
				$smangupkl=$_POST['smangupkl'];
				$smasgupkl=$_POST['smasgupkl'];
				$smkgupkl=$_POST['smkgupkl'];
				$smkngupkl=$_POST['smkngupkl'];
				$smksgupkl=$_POST['smksgupkl'];
				$madibgupkl=$_POST['madibgupkl'];
				$madibngupkl=$_POST['madibngupkl'];
				$madibsgupkl=$_POST['madibsgupkl'];
				$madtsgupkl=$_POST['madtsgupkl'];
				$madtsngupkl=$_POST['madtsngupkl'];
				$madtssgupkl=$_POST['madtssgupkl'];
				$madalgupkl=$_POST['madalgupkl'];
				$madalngupkl=$_POST['madalngupkl'];
				$madalsgupkl=$_POST['madalsgupkl'];
				$jmlsisag=$_POST['jmlsisag'];
				$rasisag=$_POST['rasisag'];
				$ransisag=$_POST['ransisag'];
				$rassisag=$_POST['rassisag'];
				$madibsisag=$_POST['madibsisag'];
				$madibnsisag=$_POST['madibnsisag'];
				$madibssisag=$_POST['madibssisag'];
				$madtssisag=$_POST['madtssisag'];
				$madtsnsisag=$_POST['madtsnsisag'];
				$madtsssisag=$_POST['madtsssisag'];
				$madalsisag=$_POST['madalsisag'];
				$madalnsisag=$_POST['madalnsisag'];
				$madalssisag=$_POST['madalssisag'];
				$ptaisisag=$_POST['ptaisisag'];
				$ptainsisag=$_POST['ptainsisag'];
				$ptaissisag=$_POST['ptaissisag'];
				$ptakisisag=$_POST['ptakisisag'];
				$ptakinsisag=$_POST['ptakinsisag'];
				$ptakissisag=$_POST['ptakissisag'];
				$ptakosisag=$_POST['ptakosisag'];
				$ptakonsisag=$_POST['ptakonsisag'];
				$ptakossisag=$_POST['ptakossisag'];
				$ptahinsisag=$_POST['ptahinsisag'];
				$ptahinnsisag=$_POST['ptahinnsisag'];
				$ptahinssisag=$_POST['ptahinssisag'];
				$jmlgusisag=$_POST['jmlgusisag'];
				$madibgusisag=$_POST['madibgusisag'];
				$madibngusisag=$_POST['madibngusisag'];
				$madibsgusisag=$_POST['madibsgusisag'];
				$madtsgusisag=$_POST['madtsgusisag'];
				$madtsngusisag=$_POST['madtsngusisag'];
				$madtsgussisag=$_POST['madtsgussisag'];
				$madalgusisag=$_POST['madalgusisag'];
				$madalngusisag=$_POST['madalngusisag'];
				$madalsgusisag=$_POST['madalsgusisag'];
				$ptaigusisag=$_POST['ptaigusisag'];
				$ptaingusisag=$_POST['ptaingusisag'];
				$ptaisgusisag=$_POST['ptaisgusisag'];
				$ptakigusisag=$_POST['ptakigusisag'];
				$ptakingusisag=$_POST['ptakingusisag'];
				$ptakisgusisag=$_POST['ptakisgusisag'];
				$ptakogusisag=$_POST['ptakogusisag'];
				$ptakongusisag=$_POST['ptakongusisag'];
				$ptakosgusisag=$_POST['ptakosgusisag'];
				$ptabudgusisag=$_POST['ptabudgusisag'];
				$ptabudngusisag=$_POST['ptabudngusisag'];
				$ptabudsgusisag=$_POST['ptabudsgusisag'];
				$ptahingusisag=$_POST['ptahingusisag'];
				$ptahinngusisag=$_POST['ptahinngusisag'];
				$ptahinsgusisag=$_POST['ptahinsgusisag'];
				$parsekol=$_POST['parsekol'];
				$piturolas=$_POST['712th'];
				$lulasmalas=$_POST['1315th'];
				$nemlaslulas=$_POST['1618th'];
				$parsekol7=$_POST['parsekol7'];
				$jenprasek=$_POST['jenprasek'];
				$jensdmised=$_POST['jensdmised'];
				$parkasar=$_POST['parkasar'];
				$parkasarsd=$_POST['parkasarsd'];
				$parkasarsmp=$_POST['parkasarsmp'];
				$parmur=$_POST['parmur'];
				$parmura=$_POST['parmura'];
				$parmurb=$_POST['parmurb'];
				$parmurc=$_POST['parmurc'];
				$parmurpt=$_POST['parmurpt'];
				$lamasekolavg=$_POST['lamasekolavg'];
				$pusekol=$_POST['pusekol'];
				$pusekolsd=$_POST['pusekolsd'];
				$pusekolsdcapai=$_POST['pusekolsdcapai'];
				$pusekolsdtot=$_POST['pusekolsdtot'];
				$pusekolsmp=$_POST['pusekolsmp'];
				$pusekolsmpcapai=$_POST['pusekolsmpcapai'];
				$pusekolsmptot=$_POST['pusekolsmptot'];
				$pusekolsma=$_POST['pusekolsma'];
				$pusekolsmacapai=$_POST['pusekolsmacapai'];
				$pusekolsmatot=$_POST['pusekolsmatot'];
				$angkalulus=$_POST['angkalulus'];
				$jmllulussd=$_POST['jmllulussd'];
				$jmllulussmp=$_POST['jmllulussmp'];
				$jmllulussma=$_POST['jmllulussma'];
				$angkabh=$_POST['angkabh'];
				$angkamh=$_POST['angkamh'];
				$malasbacatulis=$_POST['15bacatulis'];
				$capai15bacatulis=$_POST['capai15bacatulis'];
				$prop15=$_POST['prop15'];
				$prop15tk=$_POST['prop15tk'];
				$prop15sd=$_POST['prop15sd'];
				$prop15smp=$_POST['prop15smp'];
				$prop15sma=$_POST['prop15sma'];
				$prop15pt=$_POST['prop15pt'];
				$proptasekol=$_POST['proptasekol'];
				$tasekol6=$_POST['tasekol6'];
				$tasekol7=$_POST['tasekol7'];
				$tasekol10=$_POST['tasekol10'];
				$tasekol15=$_POST['tasekol15'];
				$tasekol24=$_POST['tasekol24'];
				$tasekol25=$_POST['tasekol25'];
				$tasekol45=$_POST['tasekol45'];
				$angkanglanjut=$_POST['angkanglanjut'];
				$sisbarsmp=$_POST['sisbarsmp'];
				$sisbarsma=$_POST['sisbarsma'];
				$sisbarpt=$_POST['sisbarpt'];
				$jmlsiskin=$_POST['jmlsiskin'];
				$jmlsiskinsd=$_POST['jmlsiskinsd'];
				$jmlsiskinsmp=$_POST['jmlsiskinsmp'];
				$jmlsiskinsma=$_POST['jmlsiskinsma'];
				$jmlsiskinpt=$_POST['jmlsiskinpt'];
				$jmlskltik=$_POST['jmlskltik'];
				$jmlsklinet=$_POST['jmlsklinet'];
				$jmlorgviausia=$_POST['jmlorgviausia'];
				$usiapaud=$_POST['usiapaud'];
				$usiasd=$_POST['usiasd'];
				$usiasmp=$_POST['usiasmp'];
				$usiasma=$_POST['usiasma'];
				$senbud=$_POST['senbud'];
				$jmlgrupseni=$_POST['jmlgrupseni'];
				$jmlgdseni=$_POST['jmlgdseni'];
				$jmlmuseumseni=$_POST['jmlmuseumseni'];
				$senipusbud=$_POST['senipusbud'];
				$fessenbud=$_POST['fessenbud'];
				$sarfessenbud=$_POST['sarfessenbud'];
				$cabudtari=$_POST['cabudtari'];
				$bencabud=$_POST['bencabud'];
				$bangcabud=$_POST['bangcabud'];
				$sitcabud=$_POST['sitcabud'];
				$kawcabud=$_POST['kawcabud'];
				$pora=$_POST['pora'];
				$jmlklubora=$_POST['jmlklubora'];
				$jmlgdora=$_POST['jmlgdora'];
				$ormuda=$_POST['ormuda'];
				$kegmuda=$_POST['kegmuda'];
				$orgraga=$_POST['orgraga'];
				$kegraga=$_POST['kegraga'];
				$expotaun=$_POST['expotaun'];
				$perpus=$_POST['perpus'];
				$jmlperpus=$_POST['jmlperpus'];
				$kunperpus1th=$_POST['kunperpus1th'];
				$jmlorgpop=$_POST['jmlorgpop'];
				$koljubukda=$_POST['koljubukda'];
				$koljubukpus=$_POST['koljubukpus'];
				$kpbps=$_POST['kpbps'];
				$kpbpssd=$_POST['kpbpssd'];
				$kpbpssmp=$_POST['kpbpssmp'];
				$kpbpssma=$_POST['kpbpssma'];
				$kpbpssmk=$_POST['kpbpssmk'];
				$lulusanke=$_POST['lulusanke'];
				$lulusankesmp=$_POST['lulusankesmp'];
				$lulusankesma=$_POST['lulusankesma'];
				$lulusankesmk=$_POST['lulusankesmk'];
				$kualifikasiguru=$_POST['kualifikasiguru'];
				$kualifikasigurusd=$_POST['kualifikasigurusd'];
				$kualifikasigurusmp=$_POST['kualifikasigurusmp'];
				$kualifikasigurusma=$_POST['kualifikasigurusma'];
				$kualifikasigurusmk=$_POST['kualifikasigurusmk'];
				$penuhguru=$_POST['penuhguru'];
				$penuhgurusd=$_POST['penuhgurusd'];
				$penuhgurusmp=$_POST['penuhgurusmp'];
				$penuhgurusma=$_POST['penuhgurusma'];
				$penuhgurusmk=$_POST['penuhgurusmk'];
				$miliksekolah=$_POST['miliksekolah'];
				$miliksekolahsd=$_POST['miliksekolahsd'];
				$miliksekolahsmp=$_POST['miliksekolahsmp'];
				$miliksekolahsma=$_POST['miliksekolahsma'];
				$miliksekolahsmk=$_POST['miliksekolahsmk'];
				$smkpt=$_POST['smkpt'];
				$luluskerja=$_POST['luluskerja'];
				$cabudda=$_POST['cabudda'];
				$bencabudda=$_POST['bencabudda'];
				$bangcabudda=$_POST['bangcabudda'];
				$sitcabudda=$_POST['sitcabudda'];
				$kawcabudda=$_POST['kawcabudda'];

				$implod1=array($didikumum,$jmlskul,$skultk,$tknegeri,$tknbaik,$tkntbaik,$tkswas,$tksbaik,$tkstbaik,$skullb,$slbnegeri,$slbnbaik,$slbntbaik,$slbswas,$slbsbaik,$slbstbaik,$skuld,$sdnegeri,$sdnbaik,$sdntbaik,$sdswas,$sdsbaik,$sdstbaik,$skulmp,$smpnegeri,$smpnbaik,$smpntbaik,$smpswas,$smpsbaik,$smpstbaik,$skulma,$smanegeri,$smanbaik,$smantbaik,$smaswas,$smasbaik,$smastbaik,$skulmk,$smknegeri,$smknbaik,$smkntbaik,$smkswas,$smksbaik,$smkstbaik,$pting,$ptingnegeri,$ptingnbaik,$ptingntbaik,$ptingswas,$ptingsbaik,$ptingstbaik,$lpket,$sekmenjur,$akadiplo,$jmlskulag,$madib,$madibnegeri,$madibnbaik,$madibntbaik,$madibswas,$madibsbaik,$madibstbaik,$madts,$madtsnegeri,$madtsnbaik,$madtsntbaik,$madtsswas,$madtssbaik,$madtsstbaik,$madal,$madalnegeri,$madalnbaik,$madalntbaik,$madalswas,$madalsbaik,$madalstbaik,$ptai,$ptainegeri,$ptainbaik,$ptaintbaik,$ptaiswas,$ptaisbaik,$ptaistbaik,$ptaki,$ptakinegeri,$ptakinbaik,$ptakintbaik,$ptakiswas,$ptakisbaik,$ptakistbaik,$ptako,$ptakonegeri,$ptakonbaik,$ptakontbaik,$ptakoswas,$ptakosbaik,$ptakostbaik,$ptahin,$ptahinnegeri,$ptahinnbaik,$ptahinntbaik,$ptahinswas,$ptahinsbaik,$ptahinstbaik,$jmlkelas,$jmltksej,$jmlsdsej,$jmlsmpsej,$jmlsmasej,$jmlptsej,$jmllepeksej,$jmlsmksej,$jmlsismasiswa,$tksis,$tknsis,$tkssis,$tpasis,$tpansis,$tpassis,$slbsis,$slbnsis,$slbssis,$sdsis,$sdnsis,$sdssis,$smpsis,$smpnsis,$smpssis,$smksis,$smknsis,$smkssis,$smasis,$smansis,$smassis,$ptingsis,$ptingnsis,$ptingssis,$lempeksis,$jmlgurus1d4,$gurus1d4sd,$gurus1d4smp,$gurus1d4sma,$jmlgurudosen,$tkgurdos,$tkngurdos,$tksgurdos,$slbgurdos,$slbngurdos,$slbsgurdos,$sdgurdos,$sdngurdos,$sdsgurdos,$smpgurdos,$smpngurdos,$smpsgurdos,$smagurdos,$smangurdos,$smasgurdos,$smkgurdos,$smkngurdos,$smksgurdos,$ptinggurdos,$ptingngurdos,$ptingsgurdos,$lempekgurdos,$gurupkl,$tkgupkl,$tkngupkl,$tksgupkl,$slbgupkl,$slbngupkl,$slbsgupkl,$sdgupkl,$sdngupkl,$sdsgupkl,$smpgupkl,$smpngupkl,$smpsgupkl,$smagupkl,$smangupkl,$smasgupkl,$smkgupkl,$smkngupkl,$smksgupkl,$madibgupkl,$madibngupkl,$madibsgupkl,$madtsgupkl,$madtsngupkl,$madtssgupkl,$madalgupkl,$madalngupkl,$madalsgupkl,$jmlsisag,$rasisag,$ransisag,$rassisag,$madibsisag,$madibnsisag,$madibssisag,$madtssisag,$madtsnsisag,$madtsssisag,$madalsisag,$madalnsisag,$madalssisag,$ptaisisag,$ptainsisag,$ptaissisag,$ptakisisag,$ptakinsisag,$ptakissisag,$ptakosisag,$ptakonsisag,$ptakossisag,$ptahinsisag,$ptahinnsisag,$ptahinssisag,$jmlgusisag,$madibgusisag,$madibngusisag,$madibsgusisag,$madtsgusisag,$madtsngusisag,$madtsgussisag,$madalgusisag,$madalngusisag,$madalsgusisag,$ptaigusisag,$ptaingusisag,$ptaisgusisag,$ptakigusisag,$ptakingusisag,$ptakisgusisag,$ptakogusisag,$ptakongusisag,$ptakosgusisag,$ptabudgusisag,$ptabudngusisag,$ptabudsgusisag,$ptahingusisag,$ptahinngusisag,$ptahinsgusisag,$parsekol,$piturolas,$lulasmalas,$nemlaslulas,$parsekol7,$jenprasek,$jensdmised,$parkasar,$parkasarsd,$parkasarsmp,$parmur,$parmura,$parmurb,$parmurc,$parmurpt,$lamasekolavg,$pusekol,$pusekolsd,$pusekolsdcapai,$pusekolsdtot,$pusekolsmp,$pusekolsmpcapai,$pusekolsmptot,$pusekolsma,$pusekolsmacapai,$pusekolsmatot,$angkalulus,$jmllulussd,$jmllulussmp,$jmllulussma,$angkabh,$angkamh,$malasbacatulis,$capai15bacatulis,$prop15,$prop15tk,$prop15sd,$prop15smp,$prop15sma,$prop15pt,$proptasekol,$tasekol6,$tasekol7,$tasekol10,$tasekol15,$tasekol24,$tasekol25,$tasekol45,$angkanglanjut,$sisbarsmp,$sisbarsma,$sisbarpt,$jmlsiskin,$jmlsiskinsd,$jmlsiskinsmp,$jmlsiskinsma,$jmlsiskinpt,$jmlskltik,$jmlsklinet,$jmlorgviausia,$usiapaud,$usiasd,$usiasmp,$usiasma);
				$implod2=array($senbud,$jmlgrupseni,$jmlgdseni,$jmlmuseumseni,$senipusbud,$fessenbud,$sarfessenbud);
				$implod3=array($cabudtari,$bencabud,$bangcabud,$sitcabud,$kawcabud);
				$implod4=array($pora,$jmlklubora,$jmlgdora,$ormuda,$kegmuda,$orgraga,$kegraga);
				$implod5=array($expotaun);
				$implod6=array($perpus,$jmlperpus,$kunperpus1th,$jmlorgpop,$koljubukda,$koljubukpus);
				$implod7=array($kpbps,$kpbpssd,$kpbpssmp,$kpbpssma,$kpbpssmk);
				$implod8=array($lulusanke,$lulusankesmp,$lulusankesma,$lulusankesmk);
				$implod9=array($kualifikasiguru,$kualifikasigurusd,$kualifikasigurusmp,$kualifikasigurusma,$kualifikasigurusmk);
				$implod10=array($penuhguru,$penuhgurusd,$penuhgurusmp,$penuhgurusma,$penuhgurusmk);
				$implod11=array($miliksekolah,$miliksekolahsd,$miliksekolahsmp,$miliksekolahsma,$miliksekolahsmk);
				$implod12=array($smkpt);$implod13=array($luluskerja);
				$implod14=array($cabudda,$bencabudda,$bangcabudda,$sitcabudda,$kawcabudda);

				$masukisi1=implode("#", $implod1);
				$masukisi2=implode("#", $implod2);
				$masukisi3=implode("#", $implod3);
				$masukisi4=implode("#", $implod4);
				$masukisi5=implode("#", $implod5);
				$masukisi6=implode("#", $implod6);
				$masukisi7=implode("#", $implod7);
				$masukisi8=implode("#", $implod8);
				$masukisi9=implode("#", $implod9);
				$masukisi10=implode("#", $implod10);
				$masukisi11=implode("#", $implod11);
				$masukisi12=implode("#", $implod12);
				$masukisi13=implode("#", $implod13);
				$masukisi14=implode("#", $implod14);

				$sql1="INSERT INTO log VALUES('','pknpo_didikumum','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','pknpo_senbud','$user','$tahunini','$masukisi2','$waktuisi')";
				$sql3="INSERT INTO log VALUES('','pknpo_cabudtari','$user','$tahunini','$masukisi3','$waktuisi')";
				$sql4="INSERT INTO log VALUES('','pknpo_pora','$user','$tahunini','$masukisi4','$waktuisi')";
				$sql5="INSERT INTO log VALUES('','pknpo_expotaun','$user','$tahunini','$masukisi5','$waktuisi')";
				$sql6="INSERT INTO log VALUES('','pknpo_perpus','$user','$tahunini','$masukisi6','$waktuisi')";
				$sql7="INSERT INTO log VALUES('','pknpo_kpbps','$user','$tahunini','$masukisi7','$waktuisi')";
				$sql8="INSERT INTO log VALUES('','pknpo_lulusanke','$user','$tahunini','$masukisi8','$waktuisi')";
				$sql9="INSERT INTO log VALUES('','pknpo_kualifikasiguru','$user','$tahunini','$masukisi9','$waktuisi')";
				$sql10="INSERT INTO log VALUES('','pknpo_penuhguru','$user','$tahunini','$masukisi10','$waktuisi')";
				$sql11="INSERT INTO log VALUES('','pknpo_miliksekolah','$user','$tahunini','$masukisi11','$waktuisi')";
				$sql12="INSERT INTO log VALUES('','pknpo_smkpt','$user','$tahunini','$masukisi12','$waktuisi')";
				$sql13="INSERT INTO log VALUES('','pknpo_luluskerja','$user','$tahunini','$masukisi13','$waktuisi')";
				$sql14="INSERT INTO log VALUES('','pknpo_cabudda','$user','$tahunini','$masukisi14','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);
				$command2=$conn->createCommand($sql2);
				$command3=$conn->createCommand($sql3);
				$command4=$conn->createCommand($sql4);
				$command5=$conn->createCommand($sql5);
				$command6=$conn->createCommand($sql6);
				$command7=$conn->createCommand($sql7);
				$command8=$conn->createCommand($sql8);
				$command9=$conn->createCommand($sql9);
				$command10=$conn->createCommand($sql10);
				$command11=$conn->createCommand($sql11);
				$command12=$conn->createCommand($sql12);
				$command13=$conn->createCommand($sql13);
				$command14=$conn->createCommand($sql14);
				$command1->execute();$command2->execute();$command3->execute();$command4->execute();$command5->execute();$command6->execute();$command7->execute();$command8->execute();$command9->execute();$command10->execute();$command11->execute();$command12->execute();$command13->execute();$command14->execute();
				$this->redirect(array(
					'sosbud'));
			}
		}

		public function actionSimpanKesos()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$ipm=$_POST['ipm'];
				$jpm=$_POST['jpm'];
				$jpmdesa=$_POST['jpmdesa'];
				$jpmkota=$_POST['jpmkota'];
				$p1=$_POST['p1'];
				$p1desa=$_POST['p1desa'];
				$p1kota=$_POST['p1kota'];
				$p2=$_POST['p2'];
				$p2desa=$_POST['p2desa'];
				$p2kota=$_POST['p2kota'];
				$jamkesmasda=$_POST['jamkesmasda'];
				$jmljamkesmasda=$_POST['jmljamkesmasda'];
				$jmlskm=$_POST['jmlskm'];
				$kemiskinan=$_POST['kemiskinan'];
				$garismiskin=$_POST['garismiskin'];
				$garismiskindesa=$_POST['garismiskindesa'];
				$garismiskinkota=$_POST['garismiskinkota'];
				$bwhgarismiskin=$_POST['bwhgarismiskin'];
				$raskin=$_POST['raskin'];
				$KKraskin=$_POST['KKraskin'];
				$rtraskin=$_POST['rtraskin'];
				$realraskin=$_POST['realraskin'];
				$rpraskin=$_POST['rpraskin'];
				$kmtk=$_POST['kmtk'];
				$kprasj=$_POST['kprasj'];
				$ksjt1=$_POST['ksjt1'];
				$ktjt2=$_POST['ktjt2'];
				$ksjt3=$_POST['ksjt3'];
				$ksjt3p=$_POST['ksjt3p'];
				$jkplsm=$_POST['jkplsm'];
				$kplsm=$_POST['kplsm'];
				$kpormas=$_POST['kpormas'];
				$kpokp=$_POST['kpokp'];
				$psks=$_POST['psks'];
				$kartar=$_POST['kartar'];
				$tksm=$_POST['tksm'];
				$orgsos=$_POST['orgsos'];
				$lswamas=$_POST['lswamas'];
				$pmks=$_POST['pmks'];
				$pmkstangan=$_POST['pmkstangan'];
				$pmkskudune=$_POST['pmkskudune'];
				$pmksberi=$_POST['pmksberi'];
				$masos=$_POST['masos'];
				$rawsossar=$_POST['rawsossar'];
				$anjal=$_POST['anjal'];
				$psjiwa=$_POST['psjiwa'];
				$gepdanpeng=$_POST['gepdanpeng'];
				$jmlhivaids=$_POST['jmlhivaids'];
				$jmlcandunar=$_POST['jmlcandunar'];
				$sarrehab=$_POST['sarrehab'];
				$fakirmiskin=$_POST['fakirmiskin'];
				$bayilantar=$_POST['bayilantar'];
				$anaklantar=$_POST['anaklantar'];
				$lansialantar=$_POST['lansialantar'];
				$komacil=$_POST['komacil'];
				$ptunanetra=$_POST['ptunanetra'];
				$ptunarungu=$_POST['ptunarungu'];
				$ptunawicara=$_POST['ptunawicara'];
				$ptunawicararungu=$_POST['ptunawicararungu'];
				$ptunadaksa=$_POST['ptunadaksa'];
				$ptunagrahita=$_POST['ptunagrahita'];
				$pcacatjiwa=$_POST['pcacatjiwa'];
				$pcacatganda=$_POST['pcacatganda'];
				$tunasusila=$_POST['tunasusila'];
				$exnapi=$_POST['exnapi'];
				$idaphivaids=$_POST['idaphivaids'];
				$knapza=$_POST['knapza'];
				$jmlpansos=$_POST['jmlpansos'];
				$pansosanak=$_POST['pansosanak'];
				$pansosanaktirah=$_POST['pansosanaktirah'];
				$pansosbija=$_POST['pansosbija'];
				$pansostwir=$_POST['pansostwir'];
				$pansosbnetra=$_POST['pansosbnetra'];
				$pansosbdaksa=$_POST['pansosbdaksa'];
				$pansosbgrahita=$_POST['pansosbgrahita'];
				$pansosblaras=$_POST['pansosblaras'];
				$pansosbruwi=$_POST['pansosbruwi'];
				$pansosbplnis=$_POST['pansosbplnis'];
				$pansosmput=$_POST['pansosmput'];
				$pansospput=$_POST['pansospput'];
				$pansoskw=$_POST['pansoskw'];
				$pansosbk=$_POST['pansosbk'];
				$pansosrehab=$_POST['pansosrehab'];
				$prehabpusat=$_POST['prehabpusat'];
				$rumahsinggah=$_POST['rumahsinggah'];
				$pkk=$_POST['pkk'];
				$jmlpkk=$_POST['jmlpkk'];
				$jmlpkkaktif=$_POST['jmlpkkaktif'];
				$pktk=$_POST['pktk'];
				$balaker=$_POST['balaker'];
				$ijintaker=$_POST['ijintaker'];
				$pusinfotaker=$_POST['pusinfotaker'];
				$indeksgini=$_POST['indeksgini'];
				$ppvbd=$_POST['ppvbd'];
				$williamson=$_POST['williamson'];

				$implod1=array($ipm);
				$implod2=array($jpm,$jpmdesa,$jpmkota);
				$implod3=array($p1,$p1desa,$p1kota);$implod4=array($p2,$p2desa,$p2kota);
				$implod5=array($jamkesmasda,$jmljamkesmasda,$jmlskm);
				$implod6=array($kemiskinan,$garismiskin,$garismiskindesa,$garismiskinkota,$bwhgarismiskin,$raskin,$KKraskin,$rtraskin,$realraskin,$rpraskin);
				$implod7=array($kmtk,$kprasj,$ksjt1,$ktjt2,$ksjt3,$ksjt3p);
				$implod8=array($jkplsm,$kplsm,$kpormas,$kpokp);
				$implod9=array($psks,$kartar,$tksm,$orgsos,$lswamas);
				$implod10=array($pmks,$pmkstangan,$pmkskudune,$pmksberi);
				$implod11=array($masos,$rawsossar,$anjal,$psjiwa,$gepdanpeng,$jmlhivaids,$jmlcandunar,$sarrehab,$fakirmiskin,$bayilantar,$anaklantar,$lansialantar,$komacil,$ptunanetra,$ptunarungu,$ptunawicara,$ptunawicararungu,$ptunadaksa,$ptunagrahita,$pcacatjiwa,$pcacatganda,$tunasusila,$exnapi,$idaphivaids,$knapza,$jmlpansos,$pansosanak,$pansosanaktirah,$pansosbija,$pansostwir,$pansosbnetra,$pansosbdaksa,$pansosbgrahita,$pansosblaras,$pansosbruwi,$pansosbplnis,$pansosmput,$pansospput,$pansoskw,$pansosbk,$pansosrehab,$prehabpusat,$rumahsinggah);
				$implod12=array($pkk,$jmlpkk,$jmlpkkaktif);
				$implod13=array($pktk,$balaker,$ijintaker,$pusinfotaker);
				$implod14=array($indeksgini);$implod15=array($ppvbd);$implod16=array($williamson);

				$masukisi1=implode("#", $implod1);$masukisi2=implode("#", $implod2);
				$masukisi3=implode("#", $implod3);$masukisi4=implode("#", $implod4);
				$masukisi5=implode("#", $implod5);$masukisi6=implode("#", $implod6);
				$masukisi7=implode("#", $implod7);$masukisi8=implode("#", $implod8);
				$masukisi9=implode("#", $implod9);$masukisi10=implode("#", $implod10);
				$masukisi11=implode("#", $implod11);$masukisi12=implode("#", $implod12);
				$masukisi13=implode("#", $implod13);$masukisi14=implode("#", $implod14);
				$masukisi15=implode("#", $implod15);$masukisi16=implode("#", $implod16);

				$sql1="INSERT INTO log VALUES('','kesos_ipm','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','kesos_jpm','$user','$tahunini','$masukisi2','$waktuisi')";
				$sql3="INSERT INTO log VALUES('','kesos_p1','$user','$tahunini','$masukisi3','$waktuisi')";
				$sql4="INSERT INTO log VALUES('','kesos_p2','$user','$tahunini','$masukisi4','$waktuisi')";
				$sql5="INSERT INTO log VALUES('','kesos_jamkesmasda','$user','$tahunini','$masukisi5','$waktuisi')";
				$sql6="INSERT INTO log VALUES('','kesos_kemiskinan','$user','$tahunini','$masukisi6','$waktuisi')";
				$sql7="INSERT INTO log VALUES('','kesos_kmtk','$user','$tahunini','$masukisi7','$waktuisi')";
				$sql8="INSERT INTO log VALUES('','kesos_jkplsm','$user','$tahunini','$masukisi8','$waktuisi')";
				$sql9="INSERT INTO log VALUES('','kesos_psks','$user','$tahunini','$masukisi9','$waktuisi')";
				$sql10="INSERT INTO log VALUES('','kesos_pmks','$user','$tahunini','$masukisi10','$waktuisi')";
				$sql11="INSERT INTO log VALUES('','kesos_masos','$user','$tahunini','$masukisi11','$waktuisi')";
				$sql12="INSERT INTO log VALUES('','kesos_pkk','$user','$tahunini','$masukisi12','$waktuisi')";
				$sql13="INSERT INTO log VALUES('','kesos_pktk','$user','$tahunini','$masukisi13','$waktuisi')";
				$sql14="INSERT INTO log VALUES('','kesos_indeksgini','$user','$tahunini','$masukisi14','$waktuisi')";
				$sql15="INSERT INTO log VALUES('','kesos_ppvbd','$user','$tahunini','$masukisi15','$waktuisi')";
				$sql16="INSERT INTO log VALUES('','kesos_williamson','$user','$tahunini','$masukisi16','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);$command2=$conn->createCommand($sql2);
				$command3=$conn->createCommand($sql3);$command4=$conn->createCommand($sql4);
				$command5=$conn->createCommand($sql5);$command6=$conn->createCommand($sql6);
				$command7=$conn->createCommand($sql7);$command8=$conn->createCommand($sql8);
				$command9=$conn->createCommand($sql9);$command10=$conn->createCommand($sql10);
				$command11=$conn->createCommand($sql11);$command12=$conn->createCommand($sql12);
				$command13=$conn->createCommand($sql13);$command14=$conn->createCommand($sql14);
				$command15=$conn->createCommand($sql15);$command16=$conn->createCommand($sql16);
				$command1->execute();$command2->execute();$command3->execute();$command4->execute();$command5->execute();$command6->execute();$command7->execute();$command8->execute();$command9->execute();$command10->execute();$command11->execute();$command12->execute();$command13->execute();$command14->execute();$command15->execute();$command16->execute();
				$this->redirect(array(
					'sosbud'));
			}
		}

		public function actionSimpanAgama()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$jmlpeluk=$_POST['jmlpeluk'];
				$agislam=$_POST['agislam'];
				$agkristen=$_POST['agkristen'];
				$agkatholik=$_POST['agkatholik'];
				$aghindu=$_POST['aghindu'];
				$agbuddha=$_POST['agbuddha'];
				$agkonghuchu=$_POST['agkonghuchu'];
				$aglain=$_POST['aglain'];
				$sarib=$_POST['sarib'];
				$saribmas=$_POST['saribmas'];
				$saribmus=$_POST['saribmus'];
				$saribgk=$_POST['saribgk'];
				$saribgkk=$_POST['saribgkk'];
				$saribpura=$_POST['saribpura'];
				$saribcet=$_POST['saribcet'];
				$jmlhaji=$_POST['jmlhaji'];
				$hajikuota=$_POST['hajikuota'];
				$hajimangkat=$_POST['hajimangkat'];
				$jmlkua=$_POST['jmlkua'];
				$kuabaik=$_POST['kuabaik'];
				$kuaberat=$_POST['kuaberat'];
				$kuaringan=$_POST['kuaringan'];
				$jmlnyuluh=$_POST['jmlnyuluh'];
				$nyuluhhonorer=$_POST['nyuluhhonorer'];
				$nyuluhpns=$_POST['nyuluhpns'];
				$jmllembagadidik=$_POST['jmllembagadidik'];
				$tpalquran=$_POST['tpalquran'];
				$seming=$_POST['seming'];
				$ponpes=$_POST['ponpes'];
				$jmlponpes=$_POST['jmlponpes'];
				$jmlsantri=$_POST['jmlsantri'];

				$implod1=array($jmlpeluk,$agislam,$agkristen,$agkatholik,$aghindu,$agbuddha,$agkonghuchu,$aglain);
				$implod2=array($sarib,$saribmas,$saribmus,$saribgk,$saribgk,$saribpura,$saribcet);
				$implod3=array($jmlhaji,$hajikuota,$hajimangkat);
				$implod4=array($kuabaik,$kuaberat,$kuaringan);
				$implod5=array($jmlnyuluh,$nyuluhhonorer,$nyuluhpns);
				$implod6=array($jmllembagadidik,$tpalquran,$seming,$ponpes,$jmlponpes,$jmlsantri);

				$masukisi1=implode("#", $implod1);$masukisi2=implode("#", $implod2);
				$masukisi3=implode("#", $implod3);$masukisi4=implode("#", $implod4);
				$masukisi5=implode("#", $implod5);$masukisi6=implode("#", $implod6);

				$sql1="INSERT INTO log VALUES('','ag_jmlpeluk','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','ag_sarib','$user','$tahunini','$masukisi2','$waktuisi')";
				$sql3="INSERT INTO log VALUES('','ag_haji','$user','$tahunini','$masukisi3','$waktuisi')";
				$sql4="INSERT INTO log VALUES('','ag_kua','$user','$tahunini','$masukisi4','$waktuisi')";
				$sql5="INSERT INTO log VALUES('','ag_nyuluh','$user','$tahunini','$masukisi5','$waktuisi')";
				$sql6="INSERT INTO log VALUES('','ag_lembagadidik','$user','$tahunini','$masukisi6','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);$command2=$conn->createCommand($sql2);
				$command3=$conn->createCommand($sql3);$command4=$conn->createCommand($sql4);
				$command5=$conn->createCommand($sql5);$command6=$conn->createCommand($sql6);
				$command1->execute();$command2->execute();$command3->execute();$command4->execute();$command5->execute();$command6->execute();
				$this->redirect(array(
					'sosbud'));
			}
		}

		public function actionSimpanPolitik()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$jumangdpr=$_POST['jumangdpr'];
				$kadbjk=$_POST['kadbjk'];
				$mens21=$_POST['mens21'];
				$womens21=$_POST['womens21'];
				$parpolt=$_POST['parpolt'];
				$jparpolda=$_POST['jparpolda'];
				$jparpolpp=$_POST['jparpolpp'];
				$karpolmas=$_POST['karpolmas'];
				$jumpelpp=$_POST['jumpelpp'];
				$tppem=$_POST['tppem'];
				$jumpeltpp=$_POST['jumpeltpp'];
				$ormas=$_POST['ormas'];
				$jorbp=$_POST['jorbp'];
				$jorbag=$_POST['jorbag'];
				$jplmas=$_POST['jplmas'];
				$kblpm=$_POST['kblpm'];
				$jlpmb=$_POST['jlpmb'];
				$jppmas=$_POST['jppmas'];
				$jsmmppm=$_POST['jsmmppm'];
				$jppmd=$_POST['jppmd'];
				$lswam=$_POST['lswam'];
				$jlsml=$_POST['jlsml'];
				$lsmlt=$_POST['lsmlt'];
				$lsmlta=$_POST['lsmlta'];
				$jlsmn=$_POST['jlsmn'];
				$lsmnt=$_POST['lsmnt'];
				$lsmnta=$_POST['lsmnta'];
				$jlsmai=$_POST['jlsmai'];
				$lsmait=$_POST['lsmait'];
				$lsmaita=$_POST['lsmaita'];
				$jkppd=$_POST['jkppd'];

				$implod1=array($jumangdpr);$implod2=array($kadbjk,$mens21,$womens21);
				$implod3=array($parpolt,$jparpolda,$jparpolpp);$implod4=array($karpolmas,$jumpelpp);
				$implod5=array($tppem,$jumpeltpp);$implod6=array($ormas,$jorbp,$jorbag);
				$implod7=array($jplmas,$kblpm,$jlpmb);$implod8=array($jppmas);$implod9=array($jsmmppm);
				$implod10=array($jppmd);
				$implod11=array($lswam,$jlsml,$lsmlt,$lsmlta,$jlsmn,$lsmnt,$lsmnta,$jlsmai,$lsmait,$lsmaita);
				$implod12=array($jkppd);

				$masukisi1=implode("#", $implod1);$masukisi2=implode("#", $implod2);
				$masukisi3=implode("#", $implod3);$masukisi4=implode("#", $implod4);
				$masukisi5=implode("#", $implod5);$masukisi6=implode("#", $implod6);
				$masukisi7=implode("#", $implod7);$masukisi8=implode("#", $implod8);
				$masukisi9=implode("#", $implod9);$masukisi10=implode("#", $implod10);
				$masukisi11=implode("#", $implod11);$masukisi12=implode("#", $implod12);

				$sql1="INSERT INTO log VALUES('','pdnp_jad','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','pdnp_kadbjk','$user','$tahunini','$masukisi2','$waktuisi')";
				$sql3="INSERT INTO log VALUES('','pdnp_parpol','$user','$tahunini','$masukisi3','$waktuisi')";
				$sql4="INSERT INTO log VALUES('','pdnp_kpm','$user','$tahunini','$masukisi4','$waktuisi')";
				$sql5="INSERT INTO log VALUES('','pdnp_tpp','$user','$tahunini','$masukisi5','$waktuisi')";
				$sql6="INSERT INTO log VALUES('','pdnp_ormas','$user','$tahunini','$masukisi6','$waktuisi')";
				$sql7="INSERT INTO log VALUES('','pdnp_jlpm','$user','$tahunini','$masukisi7','$waktuisi')";
				$sql8="INSERT INTO log VALUES('','pdnp_jppm','$user','$tahunini','$masukisi8','$waktuisi')";
				$sql9="INSERT INTO log VALUES('','pdnp_jsmm','$user','$tahunini','$masukisi9','$waktuisi')";
				$sql10="INSERT INTO log VALUES('','pdnp_jppmd','$user','$tahunini','$masukisi10','$waktuisi')";
				$sql11="INSERT INTO log VALUES('','pdnp_lswm','$user','$tahunini','$masukisi11','$waktuisi')";
				$sql12="INSERT INTO log VALUES('','pdnp_jkppd','$user','$tahunini','$masukisi12','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);$command2=$conn->createCommand($sql2);
				$command3=$conn->createCommand($sql3);$command4=$conn->createCommand($sql4);
				$command5=$conn->createCommand($sql5);$command6=$conn->createCommand($sql6);
				$command7=$conn->createCommand($sql7);$command8=$conn->createCommand($sql8);
				$command9=$conn->createCommand($sql9);$command10=$conn->createCommand($sql10);
				$command11=$conn->createCommand($sql11);$command12=$conn->createCommand($sql12);
				$command1->execute();$command2->execute();$command3->execute();$command4->execute();$command5->execute();$command6->execute();$command7->execute();$command8->execute();$command9->execute();$command10->execute();$command11->execute();$command12->execute();
				$this->redirect(array(
					'polhukam'));
			}
		}

		public function actionSimpanHukum()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$perhuk=$_POST['perhuk'];
				$jpdil=$_POST['jpdil'];
				$pdna=$_POST['pdna'];
				$perdat=$_POST['perdat'];
				$poldham=$_POST['poldham'];
				$lalin=$_POST['lalin'];
				$jpter=$_POST['jpter'];
				$pdnat=$_POST['pdnat'];
				$perdatt=$_POST['perdatt'];
				$poldhamt=$_POST['poldhamt'];
				$lalint=$_POST['lalint'];
				$perperdan=$_POST['perperdan'];
				$jptter=$_POST['jptter'];
				$pdnatt=$_POST['pdnatt'];
				$perdattt=$_POST['perdattt'];
				$poldhamtt=$_POST['poldhamtt'];
				$lalintt=$_POST['lalintt'];
				$perperdant=$_POST['perperdant'];
				$jktdyd=$_POST['jktdyd'];
				$jkytd=$_POST['jkytd'];
				$kelembag=$_POST['kelembag'];
				$jpengagam=$_POST['jpengagam'];
				$jpengneg=$_POST['jpengneg'];
				$jpengtun=$_POST['jpengtun'];
				$lpemas=$_POST['lpemas'];
				$kejakneg=$_POST['kejakneg'];
				$jtkrim=$_POST['jtkrim'];
				$jknar=$_POST['jknar'];
				$jkpem=$_POST['jkpem'];
				$jkseks=$_POST['jkseks'];
				$jkaniaya=$_POST['jkaniaya'];
				$jkcuri=$_POST['jkcuri'];
				$jktipu=$_POST['jktipu'];
				$jkpalsu=$_POST['jkpalsu'];
				$jtkrimdit=$_POST['jtkrimdit'];
				$jknard=$_POST['jknard'];
				$jkpemd=$_POST['jkpemd'];
				$jkseksd=$_POST['jkseksd'];
				$jkaniayad=$_POST['jkaniayad'];
				$jkcurid=$_POST['jkcurid'];
				$jktipud=$_POST['jktipud'];
				$jkpalsud=$_POST['jkpalsud'];


				$implod1=array($perhuk,$jpdil,$pdna,$perdat,$poldham,$lalin,$jpter,$pdnat,$perdatt,$poldhamt,$lalint,$perperdan,$jptter,$pdnatt,$perdattt,$poldhamtt,$lalintt,$perperdant);
				$implod2=array($jkytd);
				$implod3=array($jkytd);$implod4=array($kelembag,$jpengagam,$jpengneg,$jpengtun,$lpemas,$kejakneg);
				$implod5=array($jtkrim,$jknar,$jkpem,$jkseks,$jkaniaya,$jkcuri,$jktipu,$jkpalsu);
				$implod6=array($jtkrimdit,$jknard,$jkpemd,$jkseksd,$jkaniayad,$jkcurid,$jktipud,$jkpalsud);

				$masukisi1=implode("#", $implod1);$masukisi2=implode("#", $implod2);
				$masukisi3=implode("#", $implod3);$masukisi4=implode("#", $implod4);
				$masukisi5=implode("#", $implod5);$masukisi6=implode("#", $implod6);

				$sql1="INSERT INTO log VALUES('','huk_ph','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','huk_jktd','$user','$tahunini','$masukisi2','$waktuisi')";
				$sql3="INSERT INTO log VALUES('','huk_jkyt','$user','$tahunini','$masukisi3','$waktuisi')";
				$sql4="INSERT INTO log VALUES('','huk_kel','$user','$tahunini','$masukisi4','$waktuisi')";
				$sql5="INSERT INTO log VALUES('','huk_jtk','$user','$tahunini','$masukisi5','$waktuisi')";
				$sql6="INSERT INTO log VALUES('','huk_jtkd','$user','$tahunini','$masukisi6','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);$command2=$conn->createCommand($sql2);
				$command3=$conn->createCommand($sql3);$command4=$conn->createCommand($sql4);
				$command5=$conn->createCommand($sql5);$command6=$conn->createCommand($sql6);
				$command1->execute();$command2->execute();$command3->execute();$command4->execute();$command5->execute();$command6->execute();
				$this->redirect(array(
					'polhukam'));
			}
		}

		public function actionSimpanAman()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$kekemas=$_POST['kekemas'];
				$jkrimkkm=$_POST['jkrimkkm'];
				$kasperanwar=$_POST['kasperanwar'];
				$anetkkm=$_POST['anetkkm'];
				$anwildeskkm=$_POST['anwildeskkm'];
				$anagmkkm=$_POST['anagmkkm'];
				$ansimparkkm=$_POST['ansimparkkm'];
				$anpelkkm=$_POST['anpelkkm'];
				$unraskkm=$_POST['unraskkm'];
				$bidpolkkm=$_POST['bidpolkkm'];
				$bidekkkm=$_POST['bidekkkm'];
				$bidalkkm=$_POST['bidalkkm'];
				$jspdpkkm=$_POST['jspdpkkm'];
				$jpbdptkpd=$_POST['jpbdptkpd'];
				$jppbdpdkpkkm=$_POST['jppbdpdkpkkm'];
				$kpkkkm=$_POST['kpkkkm'];
				$kpawurkkm=$_POST['kpawurkkm'];
				$kormenkkm=$_POST['kormenkkm'];
				$korluk2kkm=$_POST['korluk2kkm'];
				$jpapawurkkm=$_POST['jpapawurkkm'];
				$kmapawurkkm=$_POST['kmapawurkkm'];
				$adskkkm=$_POST['adskkkm'];
				$jakpkkm=$_POST['jakpkkm'];
				$jappkkm=$_POST['jappkkm'];
				$jalinkkm=$_POST['jalinkkm'];
				$jpkpkkm=$_POST['jpkpkkm'];
				$jphkkm=$_POST['jphkkm'];
				$jmpkkm3=$_POST['jmpkkm3'];
				$jppkkkm=$_POST['jppkkkm'];
				$jppskkm=$_POST['jppskkm'];
				$jppsppppp=$_POST['jppsppppp'];
				$jppmkkm=$_POST['jppmkkm'];
				$jpk3=$_POST['jpk3'];
				$jppk3=$_POST['jppk3'];
				$jkejkebkkm=$_POST['jkejkebkkm'];
				$jkwtpkkm=$_POST['jkwtpkkm'];
				$anorkkm=$_POST['anorkkm'];

				$implod1=array($kekemas,$jkrimkkm,$kasperanwar,$anetkkm,$anwildeskkm,$anagmkkm,$ansimparkkm,$anpelkkm,$unraskkm,$bidpolkkm,$bidekkkm,$bidalkkm,$jspdpkkm,$jpbdptkpd,$jppbdpdkpkkm,$kpkkkm,$kpawurkkm,$kormenkkm,$korluk2kkm,$jpapawurkkm,$kmapawurkkm,$adskkkm,$jakpkkm,$jappkkm,$jalinkkm,$jpkpkkm,$jphkkm,$jmpkkm3,$jppkkkm,$jppskkm,$jppsppppp,$jppmkkm,$jpk3,$jppk3,$jkejkebkkm,$jkwtpkkm,$anorkkm);

				$masukisi1=implode("#", $implod1);
				$sql1="INSERT INTO log VALUES('','kkm_kkm','$user','$tahunini','$masukisi1','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);
				$command1->execute();
				$this->redirect(array(
					'polhukam'));
			}
		}

		public function actionSimpanBencana()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$jpa=$_POST['jpa'];
				$banjir=$_POST['banjir'];
				$gunmel=$_POST['gunmel'];
				$lsr=$_POST['lsr'];
				$gemp=$_POST['gemp'];
				$tsnami=$_POST['tsnami'];
				$burn=$_POST['burn'];
				$other=$_POST['other'];
				$jlp=$_POST['jlp'];
				$jpkl=$_POST['jpkl'];
				$jpd=$_POST['jpd'];
				$jkba=$_POST['jkba'];
				$jlb=$_POST['jlb'];
				$jklb=$_POST['jklb'];
				$jpkab=$_POST['jpkab'];
				$keban=$_POST['keban'];
				$dana=$_POST['dana'];
				$rice=$_POST['rice'];
				$indomie=$_POST['indomie'];
				$friedoil=$_POST['friedoil'];
				$medicine2=$_POST['medicine2'];
				$wear=$_POST['wear'];
				$buildmat=$_POST['buildmat'];
				$ptdben=$_POST['ptdben'];
				$aqua=$_POST['aqua'];
				$laiinn=$_POST['laiinn'];

				$implod1=array($jpa,$banjir,$gunmel,$lsr,$gemp,$tsnami,$burn,$other);$implod2=array($jlp);
				$implod3=array($jpkl);$implod4=array($jpd);$implod5=array($jkba);$implod6=array($jlb);
				$implod7=array($jklb);$implod8=array($jpkab);
				$implod9=array($keban,$dana,$rice,$indomie,$friedoil,$medicine2,$wear,$buildmat,$ptdben,$aqua,$laiinn);

				$masukisi1=implode("#", $implod1);$masukisi2=implode("#", $implod2);$masukisi3=implode("#", $implod3);
				$masukisi4=implode("#", $implod4);$masukisi5=implode("#", $implod5);$masukisi6=implode("#", $implod6);
				$masukisi7=implode("#", $implod7);$masukisi8=implode("#", $implod8);$masukisi9=implode("#", $implod9);				

				$sql1="INSERT INTO log VALUES('','ben_jpa','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','ben_jpl','$user','$tahunini','$masukisi2','$waktuisi')";
				$sql3="INSERT INTO log VALUES('','ben_jpkl','$user','$tahunini','$masukisi3','$waktuisi')";
				$sql4="INSERT INTO log VALUES('','ben_jpd','$user','$tahunini','$masukisi4','$waktuisi')";
				$sql5="INSERT INTO log VALUES('','ben_jkba','$user','$tahunini','$masukisi5','$waktuisi')";
				$sql6="INSERT INTO log VALUES('','ben_jlb','$user','$tahunini','$masukisi6','$waktuisi')";
				$sql7="INSERT INTO log VALUES('','ben_jklb','$user','$tahunini','$masukisi7','$waktuisi')";
				$sql8="INSERT INTO log VALUES('','ben_jpkab','$user','$tahunini','$masukisi8','$waktuisi')";
				$sql9="INSERT INTO log VALUES('','ben_kb','$user','$tahunini','$masukisi9','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);$command2=$conn->createCommand($sql2);
				$command3=$conn->createCommand($sql3);$command4=$conn->createCommand($sql4);
				$command5=$conn->createCommand($sql5);$command6=$conn->createCommand($sql6);
				$command7=$conn->createCommand($sql7);$command8=$conn->createCommand($sql8);
				$command9=$conn->createCommand($sql9);
				$command1->execute();$command2->execute();$command3->execute();$command4->execute();$command5->execute();$command6->execute();$command7->execute();$command8->execute();$command9->execute();
				$this->redirect(array(
					'insidensial'));
			}
		}

		public function actionSimpanPenyakit()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$jkw=$_POST['jkw'];
				$crazcow=$_POST['crazcow'];
				$birdinflz=$_POST['birdinflz'];
				$chikgy=$_POST['chikgy'];
				$dember=$_POST['dember'];
				$hepatss=$_POST['hepatss'];
				$koler=$_POST['koler'];
				$malwar=$_POST['malwar'];
				$meningts=$_POST['meningts'];
				$tbc=$_POST['tbc'];
				$aidss=$_POST['aidss'];
				$hivi=$_POST['hivi'];
				$dktri=$_POST['dktri'];
				$rbies=$_POST['rbies'];
				$eph=$_POST['eph'];
				$crazcow1=$_POST['crazcow1'];
				$birdinflz1=$_POST['birdinflz1'];
				$piginflz=$_POST['piginflz'];
				$dogcraz=$_POST['dogcraz'];

				$implod1=array($jkw,$crazcow,$birdinflz,$chikgy,$dember,$hepatss,$koler,$malwar,$meningts,$tbc,$aidss,$hivi,$dktri,$rbies);
				$implod2=array($eph,$crazcow1,$birdinflz1,$piginflz,$dogcraz);

				$masukisi1=implode("#", $implod1);$masukisi2=implode("#", $implod2);

				$sql1="INSERT INTO log VALUES('','pm_jkw','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','pm_eph','$user','$tahunini','$masukisi2','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);$command2=$conn->createCommand($sql2);
				$command1->execute();$command2->execute();
				$this->redirect(array(
					'insidensial'));
			}
		}

		public function actionSimpanIkan()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$jkpi=$_POST['jkpi'];
				$jikap=$_POST['jikap'];
				$jlpi=$_POST['jlpi'];

				$implod1=array($jkpi);$implod2=array($jikap);$implod3=array($jlpi);

				$masukisi1=implode("#", $implod1);$masukisi2=implode("#", $implod2);$masukisi3=implode("#", $implod3);

				$sql1="INSERT INTO log VALUES('','pikan_jkpi','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','pikan_jikap','$user','$tahunini','$masukisi2','$waktuisi')";
				$sql3="INSERT INTO log VALUES('','pikan_jlpi','$user','$tahunini','$masukisi3','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);$command2=$conn->createCommand($sql2);$command3=$conn->createCommand($sql3);
				$command1->execute();$command2->execute();$command3->execute();
				$this->redirect(array(
					'insidensial'));
			}
		}

		public function actionSimpanHutan()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$lahyter=$_POST['lahyter'];
				$jkjiw=$_POST['jkjiw'];
				$jlkhut=$_POST['jlkhut'];

				$implod1=array($lahyter);$implod2=array($jkjiw);$implod3=array($jlkhut);

				$masukisi1=implode("#", $implod1);$masukisi2=implode("#", $implod2);$masukisi3=implode("#", $implod3);

				$sql1="INSERT INTO log VALUES('','khut_lah','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','khut_jkj','$user','$tahunini','$masukisi2','$waktuisi')";
				$sql3="INSERT INTO log VALUES('','khut_jlkh','$user','$tahunini','$masukisi3','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);$command2=$conn->createCommand($sql2);$command3=$conn->createCommand($sql3);
				$command1->execute();$command2->execute();$command3->execute();
				$this->redirect(array(
					'insidensial'));
			}
		}

		public function actionSimpanKayu()
		{
			if ($_POST) {
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				$user=Yii::app()->user->username;
				$Volkaycur=$_POST['Volkaycur'];
				$jumkaskay=$_POST['jumkaskay'];
				$jlppkay=$_POST['jlppkay'];

				$implod1=array($Volkaycur);$implod2=array($jumkaskay);$implod3=array($jlppkay);

				$masukisi1=implode("#", $implod1);$masukisi2=implode("#", $implod2);$masukisi3=implode("#", $implod3);

				$sql1="INSERT INTO log VALUES('','ppk_vk','$user','$tahunini','$masukisi1','$waktuisi')";
				$sql2="INSERT INTO log VALUES('','ppk_jk','$user','$tahunini','$masukisi2','$waktuisi')";
				$sql3="INSERT INTO log VALUES('','ppk_jlpp','$user','$tahunini','$masukisi3','$waktuisi')";
				$conn=Yii::app()->db;
				$command1=$conn->createCommand($sql1);$command2=$conn->createCommand($sql2);$command3=$conn->createCommand($sql3);
				$command1->execute();$command2->execute();$command3->execute();
				$this->redirect(array(
					'insidensial'));
			}
		}

		//logout dan di redirect ke halaman awal
		public function actionLogout()
		{
			Yii::app()->user->logout();
			$this->redirect(array('/'));
		}
	}
?>