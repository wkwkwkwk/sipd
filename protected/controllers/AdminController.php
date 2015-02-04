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
				$perkebunan1=$_POST['perkebunan1'];
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
				$implod3=array($lslahan,$luashutan,$htetap,$hterbatas,$hkonversi,$hbakau,$jml_lahansawah,$sirigasi,$stadahujan,$spasangsurut,$slainnya,$jml_lahankering,$rawa,$ladang,$perkebunan,$ulain,$busaha,$lhntambang,$danau,$waduk,$kolamtawar,$tbkikan,$padangalam,$tnhrusak,$tnhterlantar,$luas_lbsawah,$koembak,$danlam,$ladlanbunput,$kcampuran,$perkebunan1,$hutan,$rumahmukim,$industri,$blain,$nonsawahtakusaha,$waduk1,$lainnya,$luas_ubahlahan,$rubahgunasawah,$jtanibukansawah,$jrumah,$jindustri,$jusahakantor,$jtanibukansawah1,$jlahanlain,$alihfgshutan,$hjsawah,$hjrumah,$hjindustri,$hjusahakantor,$hjbukansawah,$hjlahanlain,$landuse,$pertanian,$tambangdangali,$industriolah,$listrikair,$bangunan,$perdagangan,$angkutkomunikasi,$keuangan,$jasa);
				$implod4=array($iklimavg,$suhu,$suhumin,$suhumax,$lembab,$lembabmin,$lembabmax,$curjan,$curjanmin,$curjanmax,$angin,$anginmin,$anginmax);
				$implod5=array($jmlpulau,$pulbhuni,$pulbjmlpddk,$pulbjmlkk,$ldpb,$llppb,$llbpb,$jbmercu,$pulbtthuni,$pulbttjps,$pulbttdl,$lppbtt,$llbpbtt,$jbttmercu,$pulthuni,$pulbnjmlpddk,$pulbnjmlkk,$ldpbn,$llppbn,$llbpbn,$jbnmercu,$pultnama,$pulbtnjmlpddk,$pulbtnjmlkk,$ldpbtn,$llppbtn,$llbpbtn,$jbtnmercu,$pulkecil,$pulkjmlpddk,$pulkjmlkk,$ldpk,$llpppk,$llbppk,$jkmercu,$pulluar,$pulljmlpddk,$pulljmlkk,$ldpl,$llppl,$llbpl,$jlmercu);
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
				$RKPDtetap=$_POST['RKPDtetap'];
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
				$kdin1=$_POST['kdin1'];
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
				$kltek2=$_POST['kltek2'];
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
				$implod3=array($perdaijin,$perdaterbit,$revisisjkterbit,$perdaout,$perdartrw,$imb,$ijinprinsip,$ijinusaha,$ijinusahakebun,$ijinusahahutan,$ijinusahatambang,$ijininvesPMA,$ijininvesPMDN,$RPJPDperda,$RPJMDperda,$RKPDtetap,$RKPDtahunini,$RPJMDtahunini,$ijinlokasi,$singmohonlokasi,$perdaiklimusaha,$langgarperda,$tegakperda,$jmlperdaijin,$perdalalin,$perdataker);
				$implod4=array($sarpras,$kbup,$ksetda,$jmlstaffdidik,$prasd,$tsd,$tsmp,$tsma,$takad,$ts1,$jmlPNSgol,$gol1,$gol2,$gol3,$gol4,$jmlpjbtstrukt,$ese1,$ese2,$ese3,$ese4,$jmlpjbtfung,$jmlexPNS,$exese1,$exese2,$exese3,$exese4,$kdprd,$kinsp,$jmlstaffdidik1,$prasd1,$tsd1,$tsmp1,$tsma1,$takad1,$ts11,$jmlPNSgol1,$gol11,$gol21,$gol31,$gol41,$jmlpjbtstrukt1,$ese11,$ese21,$ese31,$ese41,$jmlpjbtfung1,$jmlexPNS1,$exese11,$exese21,$exese31,$exese41,$kbap,$jmlstaffdidik2,$prasd2,$tsd2,$tsmp2,$tsma2,$takad2,$ts12,$jmlPNSgol2,$gol12,$gol22,$gol32,$gol42,$jmlpjbtstrukt2,$ese12,$ese22,$ese32,$ese42,$jmlpjbtfung2,$jmlexPNS2,$exese12,$exese22,$exese32,$exese42,$kdin1,$jmlstaffdidik3,$prasd3,$tsd3,$tsmp3,$tsma3,$takad3,$ts13,$jmlPNSgol3,$gol13,$gol23,$gol33,$gol43,$jmlpjbtstrukt3,$ese13,$ese23,$ese33,$ese43,$jmlpjbtfung3,$jmlexPNS3,$exese13,$exese23,$exese33,$exese43,$kltek2,$jmlstaffdidik4,$prasd4,$tsd4,$tsmp4,$tsma4,$takad4,$ts14,$jmlPNSgol4,$gol14,$gol24,$gol34,$gol44,$jmlpjbtstrukt4,$ese14,$ese24,$ese34,$ese44,$jmlpjbtfung4,$jmlexPNS4,$exese14,$exese24,$exese34,$exese44,$kpdes,$jmlstaffdidik5,$prasd5,$tsd5,$tsmp5,$tsma5,$takad5,$ts15,$kcam,$jmlstaffdidik6,$tsd6,$tsmp6,$tsma6,$takad6,$ts16,$klur,$jmlstaffdidik7,$prasd7,$tsd7,$tsmp7,$tsma7,$takad7,$ts17);
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
				$desauci=$_POST['desauci'];
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
				$implod7=array($uci,$desauci);
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

		public function actionSimpanTani(){
			if($_POST){
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				/*Pertanian*/
				$pertanian=$_POST['pertanian'];
				$padi_sawah=$_POST['padi_sawah'];
				$tanam_sawah=$_POST['tanam_sawah'];
				$panen_sawah=$_POST['panen_sawah'];
				$gabah_sawah=$_POST['gabah_sawah'];
				$beras_sawah=$_POST['beras_sawah'];
				$prod_sawah=$_POST['prod_sawah'];
				$kons_sawah=$_POST['kons_sawah'];
				$padi_ladang=$_POST['padi_ladang'];
				$tanam_ladang=$_POST['tanam_ladang'];
				$panen_ladang=$_POST['panen_ladang'];
				$gabah_ladang=$_POST['gabah_ladang'];
				$beras_ladang=$_POST['beras_ladang'];
				$prod_ladang=$_POST['prod_ladang'];
				$kons_ladang=$_POST['kons_ladang'];
				$jagung=$_POST['jagung'];
				$tanam_jagung=$_POST['tanam_jagung'];
				$panen_jagung=$_POST['panen_jagung'];
				$produksi_jagung=$_POST['produksi_jagung'];
				$prod_jagung=$_POST['prod_jagung'];
				$kons_jagung=$_POST['kons_jagung'];
				$kedelai=$_POST['kedelai'];
				$tanam_kedelai=$_POST['tanam_kedelai'];
				$panen_kedelai=$_POST['panen_kedelai'];
				$produksi_kedelai=$_POST['produksi_kedelai'];
				$prod_kedelai=$_POST['prod_kedelai'];
				$kons_kedelai=$_POST['kons_kedelai'];
				$hijau=$_POST['hijau'];
				$tanam_hijau=$_POST['tanam_hijau'];
				$panen_hijau=$_POST['panen_hijau'];
				$produksi_hijau=$_POST['produksi_hijau'];
				$prod_hijau=$_POST['prod_hijau'];
				$kons_hijau=$_POST['kons_hijau'];
				$tanah=$_POST['tanah'];
				$tanam_tanah=$_POST['tanam_tanah'];
				$panen_tanah=$_POST['panen_tanah'];
				$produksi_tanah=$_POST['produksi_tanah'];
				$prod_tanah=$_POST['prod_tanah'];
				$kons_tanah=$_POST['kons_tanah'];
				$boled=$_POST['boled'];
				$tanam_boled=$_POST['tanam_boled'];
				$panen_boled=$_POST['panen_boled'];
				$produksi_boled=$_POST['produksi_boled'];
				$prod_boled=$_POST['prod_boled'];
				$kons_boled=$_POST['kons_boled'];
				$muntul=$_POST['muntul'];
				$tanam_muntul=$_POST['tanam_muntul'];
				$panen_muntul=$_POST['panen_muntul'];
				$produksi_muntul=$_POST['produksi_muntul'];
				$prod_muntul=$_POST['prod_muntul'];
				$kons_muntul=$_POST['kons_muntul'];
				$ls_pertanian=$_POST['ls_pertanian'];
				$lahan_basah=$_POST['lahan_basah'];
				$lahan_kering=$_POST['lahan_kering'];
				$lahan_tinggi=$_POST['lahan_tinggi'];
				$jns_irisawah=$_POST['jns_irisawah'];
				$irigasi_teknis=$_POST['irigasi_teknis'];
				$separo_teknis=$_POST['separo_teknis'];
				$irigasi_sederhana=$_POST['irigasi_sederhana'];
				$irigasi_airdesa=$_POST['irigasi_airdesa'];
				$tadah_hujan=$_POST['tadah_hujan'];
				$irigasi_polder=$_POST['irigasi_polder'];
				$ind_tani=$_POST['ind_tani'];
				$jml_perusahaan=$_POST['jml_perusahaan'];
				$omset_tani=$_POST['omset_tani'];
				/*Hortikultura*/
				$hortikultura=$_POST['hortikultura'];
				$horti_mangga=$_POST['horti_mangga'];
				$ls_mangga=$_POST['ls_mangga'];
				$jml_mangga=$_POST['jml_mangga'];
				$kons_mangga=$_POST['kons_mangga'];
				$prod_mangga=$_POST['prod_mangga'];
				$horti_jeruk=$_POST['horti_jeruk'];
				$ls_jeruk=$_POST['ls_jeruk'];
				$jml_jeruk=$_POST['jml_jeruk'];
				$kons_jeruk=$_POST['kons_jeruk'];
				$prod_jeruk=$_POST['prod_jeruk'];
				$horti_pepaya=$_POST['horti_pepaya'];
				$ls_pepaya=$_POST['ls_pepaya'];
				$jml_pepaya=$_POST['jml_pepaya'];
				$kons_pepaya=$_POST['kons_pepaya'];
				$prod_pepaya=$_POST['prod_pepaya'];
				$horti_pisang=$_POST['horti_pisang'];
				$ls_pisang=$_POST['ls_pisang'];
				$jml_pisang=$_POST['jml_pisang'];
				$kons_pisang=$_POST['kons_pisang'];
				$prod_pisang=$_POST['prod_pisang'];
				$horti_nanas=$_POST['horti_nanas'];
				$ls_nanas=$_POST['ls_nanas'];
				$jml_nanas=$_POST['jml_nanas'];
				$kons_nanas=$_POST['kons_nanas'];
				$prod_nanas=$_POST['prod_nanas'];
				$horti_durian=$_POST['horti_durian'];
				$ls_durian=$_POST['ls_durian'];
				$jml_durian=$_POST['jml_durian'];
				$kons_durian=$_POST['kons_durian'];
				$prod_durian=$_POST['prod_durian'];
				$horti_manggis=$_POST['horti_manggis'];
				$ls_manggis=$_POST['ls_manggis'];
				$jml_manggis=$_POST['jml_manggis'];
				$kons_manggis=$_POST['kons_manggis'];
				$prod_manggis=$_POST['prod_manggis'];
				$horti_melon=$_POST['horti_melon'];
				$ls_melon=$_POST['ls_melon'];
				$jml_melon=$_POST['jml_melon'];
				$kons_melon=$_POST['kons_melon'];
				$prod_melon=$_POST['prod_melon'];
				$horti_alpukat=$_POST['horti_alpukat'];
				$ls_alpukat=$_POST['ls_alpukat'];
				$jml_alpukat=$_POST['jml_alpukat'];
				$kons_alpukat=$_POST['kons_alpukat'];
				$prod_alpukat=$_POST['prod_alpukat'];
				$horti_naga=$_POST['horti_naga'];
				$ls_naga=$_POST['ls_naga'];
				$jml_naga=$_POST['jml_naga'];
				$kons_naga=$_POST['kons_naga'];
				$prod_naga=$_POST['prod_naga'];
				$horti_belimbing=$_POST['horti_belimbing'];
				$ls_belimbing=$_POST['ls_belimbing'];
				$jml_belimbing=$_POST['jml_belimbing'];
				$kons_belimbing=$_POST['kons_belimbing'];
				$prod_belimbing=$_POST['prod_belimbing'];
				$horti_dukuh=$_POST['horti_dukuh'];
				$ls_dukuh=$_POST['ls_dukuh'];
				$jml_dukuh=$_POST['jml_dukuh'];
				$kons_dukuh=$_POST['kons_dukuh'];
				$prod_dukuh=$_POST['prod_dukuh'];
				$horti_jbiji=$_POST['horti_jbiji'];
				$ls_jbiji=$_POST['ls_jbiji'];
				$jml_jbiji=$_POST['jml_jbiji'];
				$kons_jbiji=$_POST['kons_jbiji'];
				$prod_jbiji=$_POST['prod_jbiji'];
				$horti_jair=$_POST['horti_jair'];
				$ls_jair=$_POST['ls_jair'];
				$jml_jair=$_POST['jml_jair'];
				$kons_jair=$_POST['kons_jair'];
				$prod_jair=$_POST['prod_jair'];
				$horti_nangka=$_POST['horti_nangka'];
				$ls_nangka=$_POST['ls_nangka'];
				$jml_nangka=$_POST['jml_nangka'];
				$kons_nangka=$_POST['kons_nangka'];
				$prod_nangka=$_POST['prod_nangka'];
				$horti_salak=$_POST['horti_salak'];
				$ls_salak=$_POST['ls_salak'];
				$jml_salak=$_POST['jml_salak'];
				$kons_salak=$_POST['kons_salak'];
				$prod_salak=$_POST['prod_salak'];
				$horti_rambutan=$_POST['horti_rambutan'];
				$ls_rambutan=$_POST['ls_rambutan'];
				$jml_rambutan=$_POST['jml_rambutan'];
				$kons_rambutan=$_POST['kons_rambutan'];
				$prod_rambutan=$_POST['prod_rambutan'];
				$horti_sawo=$_POST['horti_sawo'];
				$ls_sawo=$_POST['ls_sawo'];
				$jml_sawo=$_POST['jml_sawo'];
				$kons_sawo=$_POST['kons_sawo'];
				$prod_sawo=$_POST['prod_sawo'];
				$horti_sirsak=$_POST['horti_sirsak'];
				$ls_sirsak=$_POST['ls_sirsak'];
				$jml_sirsak=$_POST['jml_sirsak'];
				$kons_sirsak=$_POST['kons_sirsak'];
				$prod_sirsak=$_POST['prod_sirsak'];
				$horti_markisa=$_POST['horti_markisa'];
				$ls_markisa=$_POST['ls_markisa'];
				$jml_markisa=$_POST['jml_markisa'];
				$kons_markisa=$_POST['kons_markisa'];
				$prod_markisa=$_POST['prod_markisa'];
				$horti_sukun=$_POST['horti_sukun'];
				$ls_sukun=$_POST['ls_sukun'];
				$jml_sukun=$_POST['jml_sukun'];
				$kons_sukun=$_POST['kons_sukun'];
				$prod_sukun=$_POST['prod_sukun'];
				$horti_melinjo=$_POST['horti_melinjo'];
				$ls_melinjo=$_POST['ls_melinjo'];
				$jml_melinjo=$_POST['jml_melinjo'];
				$kons_melinjo=$_POST['kons_melinjo'];
				$prod_melinjo=$_POST['prod_melinjo'];
				$horti_bmerah=$_POST['horti_bmerah'];
				$ls_bmerah=$_POST['ls_bmerah'];
				$jml_bmerah=$_POST['jml_bmerah'];
				$kons_bmerah=$_POST['kons_bmerah'];
				$horti_kentang=$_POST['horti_kentang'];
				$ls_kentang=$_POST['ls_kentang'];
				$jml_kentang=$_POST['jml_kentang'];
				$kons_kentang=$_POST['kons_kentang'];
				$horti_kubis=$_POST['horti_kubis'];
				$ls_kubis=$_POST['ls_kubis'];
				$jml_kubis=$_POST['jml_kubis'];
				$kons_kubis=$_POST['kons_kubis'];
				$horti_cabai=$_POST['horti_cabai'];
				$ls_cabai=$_POST['ls_cabai'];
				$jml_cabai=$_POST['jml_cabai'];
				$kons_cabai=$_POST['kons_cabai'];
				$horti_sawi=$_POST['horti_sawi'];
				$ls_sawi=$_POST['ls_sawi'];
				$jml_sawi=$_POST['jml_sawi'];
				$kons_sawi=$_POST['kons_sawi'];
				$horti_wortel=$_POST['horti_wortel'];
				$ls_wortel=$_POST['ls_wortel'];
				$jml_wortel=$_POST['jml_wortel'];
				$kons_wortel=$_POST['kons_wortel'];
				$horti_bputih=$_POST['horti_bputih'];
				$ls_bputih=$_POST['ls_bputih'];
				$jml_bputih=$_POST['jml_bputih'];
				$kons_bputih=$_POST['kons_bputih'];
				$horti_sledri=$_POST['horti_sledri'];
				$ls_sledri=$_POST['ls_sledri'];
				$jml_sledri=$_POST['jml_sledri'];
				$kons_sledri=$_POST['kons_sledri'];
				$horti_kolk=$_POST['horti_kolk'];
				$ls_kolk=$_POST['ls_kolk'];
				$jml_kolk=$_POST['jml_kolk'];
				$kons_kolk=$_POST['kons_kolk'];
				$horti_lobak=$_POST['horti_lobak'];
				$ls_lobak=$_POST['ls_lobak'];
				$jml_lobak=$_POST['jml_lobak'];
				$kons_lobak=$_POST['kons_lobak'];
				$horti_kmerah=$_POST['horti_kmerah'];
				$ls_kmerah=$_POST['ls_kmerah'];
				$jml_kmerah=$_POST['jml_kmerah'];
				$kons_kmerah=$_POST['kons_kmerah'];
				$horti_kpanjang=$_POST['horti_kpanjang'];
				$ls_kpanjang=$_POST['ls_kpanjang'];
				$jml_kpanjang=$_POST['jml_kpanjang'];
				$kons_kpanjang=$_POST['kons_kpanjang'];
				$horti_semangka=$_POST['horti_semangka'];
				$ls_semangka=$_POST['ls_semangka'];
				$jml_semangka=$_POST['jml_semangka'];
				$kons_semangka=$_POST['kons_semangka'];
				$horti_tomat=$_POST['horti_tomat'];
				$ls_tomat=$_POST['ls_tomat'];
				$jml_tomat=$_POST['jml_tomat'];
				$kons_tomat=$_POST['kons_tomat'];
				$horti_terung=$_POST['horti_terung'];
				$ls_terung=$_POST['ls_terung'];
				$jml_terung=$_POST['jml_terung'];
				$kons_terung=$_POST['kons_terung'];
				$horti_buncis=$_POST['horti_buncis'];
				$ls_buncis=$_POST['ls_buncis'];
				$jml_buncis=$_POST['jml_buncis'];
				$kons_buncis=$_POST['kons_buncis'];
				$horti_ketimun=$_POST['horti_ketimun'];
				$ls_ketimun=$_POST['ls_ketimun'];
				$jml_ketimun=$_POST['jml_ketimun'];
				$kons_ketimun=$_POST['kons_ketimun'];
				$horti_siam=$_POST['horti_siam'];
				$ls_siam=$_POST['ls_siam'];
				$jml_siam=$_POST['jml_siam'];
				$kons_siam=$_POST['kons_siam'];
				$horti_kangkung=$_POST['horti_kangkung'];
				$ls_kangkung=$_POST['ls_kangkung'];
				$jml_kangkung=$_POST['jml_kangkung'];
				$kons_kangkung=$_POST['kons_kangkung'];
				$horti_bayam=$_POST['horti_bayam'];
				$ls_bayam=$_POST['ls_bayam'];
				$jml_bayam=$_POST['jml_bayam'];
				$kons_bayam=$_POST['kons_bayam'];
				$horti_jahe=$_POST['horti_jahe'];
				$ls_jahe=$_POST['ls_jahe'];
				$jml_jahe=$_POST['jml_jahe'];
				$kons_jahe=$_POST['kons_jahe'];
				$horti_laos=$_POST['horti_laos'];
				$ls_laos=$_POST['ls_laos'];
				$jml_laos=$_POST['jml_laos'];
				$kons_laos=$_POST['kons_laos'];
				$horti_kencur=$_POST['horti_kencur'];
				$ls_kencur=$_POST['ls_kencur'];
				$jml_kencur=$_POST['jml_kencur'];
				$kons_kencur=$_POST['kons_kencur'];
				$horti_kunyit=$_POST['horti_kunyit'];
				$ls_kunyit=$_POST['ls_kunyit'];
				$jml_kunyit=$_POST['jml_kunyit'];
				$kons_kunyit=$_POST['kons_kunyit'];
				$horti_serai=$_POST['horti_serai'];
				$ls_serai=$_POST['ls_serai'];
				$jml_serai=$_POST['jml_serai'];
				$kons_serai=$_POST['kons_serai'];
				$horti_blewah=$_POST['horti_blewah'];
				$ls_blewah=$_POST['ls_blewah'];
				$jml_blewah=$_POST['jml_blewah'];
				$kons_blewah=$_POST['kons_blewah'];
				$horti_petai=$_POST['horti_petai'];
				$ls_petai=$_POST['ls_petai'];
				$jml_petai=$_POST['jml_petai'];
				$kons_petai=$_POST['kons_petai'];
				$horti_jengkol=$_POST['horti_jengkol'];
				$ls_jengkol=$_POST['ls_jengkol'];
				$jml_jengkol=$_POST['jml_jengkol'];
				$kons_jengkol=$_POST['kons_jengkol'];
				$horti_bdaun=$_POST['horti_bdaun'];
				$ls_bdaun=$_POST['ls_bdaun'];
				$jml_bdaun=$_POST['jml_bdaun'];
				$kons_bdaun=$_POST['kons_bdaun'];
				$horti_cabe=$_POST['horti_cabe'];
				$ls_cabe=$_POST['ls_cabe'];
				$jml_cabe=$_POST['jml_cabe'];
				$kons_cabe=$_POST['kons_cabe'];
				$horti_jamur=$_POST['horti_jamur'];
				$ls_jamur=$_POST['ls_jamur'];
				$jml_jamur=$_POST['jml_jamur'];
				$kons_jamur=$_POST['kons_jamur'];
				/*Perkebunan*/
				$perkebunan=$_POST['perkebunan'];
				$kebun_karet=$_POST['kebun_karet'];
				$ls_karet=$_POST['ls_karet'];
				$tanam_karet=$_POST['tanam_karet'];
				$prod_karet=$_POST['prod_karet'];
				$kons_karet=$_POST['kons_karet'];
				$kebun_teh=$_POST['kebun_teh'];
				$ls_teh=$_POST['ls_teh'];
				$tanam_teh=$_POST['tanam_teh'];
				$prod_teh=$_POST['prod_teh'];
				$kons_teh=$_POST['kons_teh'];
				$kebun_kopi=$_POST['kebun_kopi'];
				$ls_kopi=$_POST['ls_kopi'];
				$tanam_kopi=$_POST['tanam_kopi'];
				$prod_kopi=$_POST['prod_kopi'];
				$kons_kopi=$_POST['kons_kopi'];
				$kebun_sawit=$_POST['kebun_sawit'];
				$ls_sawit=$_POST['ls_sawit'];
				$tanam_sawit=$_POST['tanam_sawit'];
				$prod_sawit=$_POST['prod_sawit'];
				$kons_sawit=$_POST['kons_sawit'];
				$kebun_tembakau=$_POST['kebun_tembakau'];
				$ls_tembakau=$_POST['ls_tembakau'];
				$tanam_tembakau=$_POST['tanam_tembakau'];
				$prod_tembakau=$_POST['prod_tembakau'];
				$kons_tembakau=$_POST['kons_tembakau'];
				$kebun_kakao=$_POST['kebun_kakao'];
				$ls_kakao=$_POST['ls_kakao'];
				$tanam_kakao=$_POST['tanam_kakao'];
				$prod_kakao=$_POST['prod_kakao'];
				$kons_kakao=$_POST['kons_kakao'];
				$kebun_lada=$_POST['kebun_lada'];
				$ls_lada=$_POST['ls_lada'];
				$tanam_lada=$_POST['tanam_lada'];
				$prod_lada=$_POST['prod_lada'];
				$kons_lada=$_POST['kons_lada'];
				$kebun_vanili=$_POST['kebun_vanili'];
				$ls_vanili=$_POST['ls_vanili'];
				$tanam_vanili=$_POST['tanam_vanili'];
				$prod_vanili=$_POST['prod_vanili'];
				$kons_vanili=$_POST['kons_vanili'];
				$kebun_tebu=$_POST['kebun_tebu'];
				$ls_tebu=$_POST['ls_tebu'];
				$tanam_tebu=$_POST['tanam_tebu'];
				$prod_tebu=$_POST['prod_tebu'];
				$kons_tebu=$_POST['kons_tebu'];
				$kebun_kelapa=$_POST['kebun_kelapa'];
				$ls_kelapa=$_POST['ls_kelapa'];
				$tanam_kelapa=$_POST['tanam_kelapa'];
				$prod_kelapa=$_POST['prod_kelapa'];
				$kons_kelapa=$_POST['kons_kelapa'];
				$kebun_pawit=$_POST['kebun_pawit'];
				$ls_pawit=$_POST['ls_pawit'];
				$tanam_pawit=$_POST['tanam_pawit'];
				$prod_pawit=$_POST['prod_pawit'];
				$kons_pawit=$_POST['kons_pawit'];
				$kebun_pala=$_POST['kebun_pala'];
				$ls_pala=$_POST['ls_pala'];
				$tanam_pala=$_POST['tanam_pala'];
				$prod_pala=$_POST['prod_pala'];
				$kons_pala=$_POST['kons_pala'];
				$kebun_dalam=$_POST['kebun_dalam'];
				$ls_dalam=$_POST['ls_dalam'];
				$tanam_dalam=$_POST['tanam_dalam'];
				$prod_dalam=$_POST['prod_dalam'];
				$kons_dalam=$_POST['kons_dalam'];
				$kebun_cengkeh=$_POST['kebun_cengkeh'];
				$ls_cengkeh=$_POST['ls_cengkeh'];
				$tanam_cengkeh=$_POST['tanam_cengkeh'];
				$prod_cengkeh=$_POST['prod_cengkeh'];
				$kons_cengkeh=$_POST['kons_cengkeh'];
				$kebun_kina=$_POST['kebun_kina'];
				$ls_kina=$_POST['ls_kina'];
				$tanam_kina=$_POST['tanam_kina'];
				$prod_kina=$_POST['prod_kina'];
				$kons_kina=$_POST['kons_kina'];
				$kebun_mete=$_POST['kebun_mete'];
				$ls_mete=$_POST['ls_mete'];
				$tanam_mete=$_POST['tanam_mete'];
				$prod_mete=$_POST['prod_mete'];
				$kons_mete=$_POST['kons_mete'];
				$kebun_kapuk=$_POST['kebun_kapuk'];
				$ls_kapuk=$_POST['ls_kapuk'];
				$tanam_kapuk=$_POST['tanam_kapuk'];
				$prod_kapuk=$_POST['prod_kapuk'];
				$kons_kapuk=$_POST['kons_kapuk'];
				$kebun_aren=$_POST['kebun_aren'];
				$ls_aren=$_POST['ls_aren'];
				$tanam_aren=$_POST['tanam_aren'];
				$prod_aren=$_POST['prod_aren'];
				$kons_aren=$_POST['kons_aren'];
				$kebun_pandan=$_POST['kebun_pandan'];
				$ls_pandan=$_POST['ls_pandan'];
				$tanam_pandan=$_POST['tanam_pandan'];
				$prod_pandan=$_POST['prod_pandan'];
				$kons_pandan=$_POST['kons_pandan'];
				$kebun_kapolaga=$_POST['kebun_kapolaga'];
				$ls_kapolaga=$_POST['ls_kapolaga'];
				$tanam_kapolaga=$_POST['tanam_kapolaga'];
				$prod_kapolaga=$_POST['prod_kapolaga'];
				$kons_kapolaga=$_POST['kons_kapolaga'];
				$ind_kebun=$_POST['ind_kebun'];
				$jml_indkebun=$_POST['jml_indkebun'];
				/*Peternakan*/
				$peternakan=$_POST['peternakan'];
				$sapi_potong=$_POST['sapi_potong'];
				$pop_sapi_potong=$_POST['pop_sapi_potong'];
				$pt_sapi_potong=$_POST['pt_sapi_potong'];
				$laju_sapi_potong=$_POST['laju_sapi_potong'];
				$rata_sapi_potong=$_POST['rata_sapi_potong'];
				$sapi_perah=$_POST['sapi_perah'];
				$pop_sapi_perah=$_POST['pop_sapi_perah'];
				$pt_sapi_perah=$_POST['pt_sapi_perah'];
				$laju_sapi_perah=$_POST['laju_sapi_perah'];
				$rata_sapi_perah=$_POST['rata_sapi_perah'];
				$prod_sapi_perah=$_POST['prod_sapi_perah'];
				$ternak_kecil=$_POST['ternak_kecil'];
				$pop_kambing=$_POST['pop_kambing'];
				$pop_domba=$_POST['pop_domba'];
				$pop_babi=$_POST['pop_babi'];
				$pop_kerbau=$_POST['pop_kerbau'];
				$pop_kuda=$_POST['pop_kuda'];
				$pop_rusa=$_POST['pop_rusa'];
				$pop_kelinci=$_POST['pop_kelinci'];
				$pop_kecil_lain=$_POST['pop_kecil_lain'];
				$ternak_unggas=$_POST['ternak_unggas'];
				$jml_buras=$_POST['jml_buras'];
				$ayam_petelur=$_POST['ayam_petelur'];
				$jml_petelur=$_POST['jml_petelur'];
				/*Kelautan dan Perikanan*/
				$laut_ikan=$_POST['laut_ikan'];
				$ikan_laut=$_POST['ikan_laut'];
				$jml_tangkap_ikan=$_POST['jml_tangkap_ikan'];
				$jml_kapal_ikan=$_POST['jml_kapal_ikan'];
				$prhu_nomotor=$_POST['prhu_nomotor'];
				$prhu_tempelmotor=$_POST['prhu_tempelmotor'];
				$kapal_motor=$_POST['kapal_motor'];
				$jml_lelang_ikan=$_POST['jml_lelang_ikan'];
				$hasil_laut=$_POST['hasil_laut'];
				$hsl_laut_prod=$_POST['hsl_laut_prod'];
				$garam=$_POST['garam'];
				$rajungan=$_POST['rajungan'];
				$kepiting=$_POST['kepiting'];
				$ubur=$_POST['ubur'];
				$kerang=$_POST['kerang'];
				$krapu=$_POST['krapu'];
				$teripang=$_POST['teripang'];
				$tuna=$_POST['tuna'];
				$udang=$_POST['udang'];
				$lobster=$_POST['lobster'];
				$kakap_merah=$_POST['kakap_merah'];
				$rumput_laut=$_POST['rumput_laut'];
				$mutiara=$_POST['mutiara'];
				$prod_laut_lain=$_POST['prod_laut_lain'];
				$vol_ekspor_laut=$_POST['vol_ekspor_laut'];
				$vol_garam=$_POST['vol_garam'];
				$vol_rajungan=$_POST['vol_rajungan'];
				$vol_kepiting=$_POST['vol_kepiting'];
				$vol_ubur=$_POST['vol_ubur'];
				$vol_kerang=$_POST['vol_kerang'];
				$vol_krapu=$_POST['vol_krapu'];
				$vol_teripang=$_POST['vol_teripang'];
				$vol_tuna=$_POST['vol_tuna'];
				$vol_udang=$_POST['vol_udang'];
				$vol_lobster=$_POST['vol_lobster'];
				$vol_kakap_merah=$_POST['vol_kakap_merah'];
				$vol_rumput_laut=$_POST['vol_rumput_laut'];
				$vol_mutiara=$_POST['vol_mutiara'];
				$vol_laut_lain=$_POST['vol_laut_lain'];
				$nilai_ekspor_laut=$_POST['nilai_ekspor_laut'];
				$nilai_garam=$_POST['nilai_garam'];
				$nilai_rajungan=$_POST['nilai_rajungan'];
				$nilai_kepiting=$_POST['nilai_kepiting'];
				$nilai_ubur=$_POST['nilai_ubur'];
				$nilai_kerang=$_POST['nilai_kerang'];
				$nilai_krapu=$_POST['nilai_krapu'];
				$nilai_teripang=$_POST['nilai_teripang'];
				$nilai_tuna=$_POST['nilai_tuna'];
				$nilai_udang=$_POST['nilai_udang'];
				$nilai_lobster=$_POST['nilai_lobster'];
				$nilai_kakap_merah=$_POST['nilai_kakap_merah'];
				$nilai_rumput_laut=$_POST['nilai_rumput_laut'];
				$nilai_mutiara=$_POST['nilai_mutiara'];
				$nilai_laut_lain=$_POST['nilai_laut_lain'];
				$ids_kelola_laut=$_POST['ids_kelola_laut'];
				$ids_garam=$_POST['ids_garam'];
				$ids_rumput_laut=$_POST['ids_rumput_laut'];
				$ids_lainnya=$_POST['ids_lainnya'];
				$areal_kelola_laut=$_POST['areal_kelola_laut'];
				$areal_garam=$_POST['areal_garam'];
				$areal_rumput_laut=$_POST['areal_rumput_laut'];
				$areal_lainnya=$_POST['areal_lainnya'];
				$ikan_darat=$_POST['ikan_darat'];
				$tambak=$_POST['tambak'];
				$ls_tambak=$_POST['ls_tambak'];
				$jml_prod_windu=$_POST['jml_prod_windu'];
				$jml_prod_udang=$_POST['jml_prod_udang'];
				$jml_prod_patin=$_POST['jml_prod_patin'];
				$jml_prod_bandeng=$_POST['jml_prod_bandeng'];
				$jml_prod_lainnya=$_POST['jml_prod_lainnya'];
				$nilai_prod_tambak=$_POST['nilai_prod_tambak'];
				$kolam_deras=$_POST['kolam_deras'];
				$ls_kolderas=$_POST['ls_kolderas'];
				$jml_prod_mas=$_POST['jml_prod_mas'];
				$jml_prod_mujair=$_POST['jml_prod_mujair'];
				$jml_prod_patinderas=$_POST['jml_prod_patinderas'];
				$jml_prod_tawarlain=$_POST['jml_prod_tawarlain'];
				$nilai_prod_deras=$_POST['nilai_prod_deras'];
				$kolam_tenang=$_POST['kolam_tenang'];
				$ls_koltenang=$_POST['ls_koltenang'];
				$jml_prod_sidat=$_POST['jml_prod_sidat'];
				$jml_prod_nila=$_POST['jml_prod_nila'];
				$jml_prod_lele=$_POST['jml_prod_lele'];
				$jml_prod_gurami=$_POST['jml_prod_gurami'];
				$jml_prod_tenanglain=$_POST['jml_prod_tenanglain'];
				$nilai_prod_tenang=$_POST['nilai_prod_tenang'];
				$keramba=$_POST['keramba'];
				$ls_keramba=$_POST['ls_keramba'];
				$jml_keramba=$_POST['jml_keramba'];
				$jml_prod_mujair=$_POST['jml_prod_mujair'];
				$jml_prod_tawes=$_POST['jml_prod_tawes'];
				$jml_prod_sepat=$_POST['jml_prod_sepat'];
				$jml_prod_gabus=$_POST['jml_prod_gabus'];
				$jml_prod_guramikrmb=$_POST['jml_prod_guramikrmb'];
				$jml_prod_betok=$_POST['jml_prod_betok'];
				$jml_prod_kerambalain=$_POST['jml_prod_kerambalain'];
				$nilai_prod_keramba=$_POST['nilai_prod_keramba'];
				$mina_padi=$_POST['mina_padi'];
				$ls_mina=$_POST['ls_mina'];
				$jml_mina=$_POST['jml_mina'];
				$jml_prod_masmina=$_POST['jml_prod_masmina'];
				$jml_prod_nilamina=$_POST['jml_prod_nilamina'];
				$jml_prod_hias=$_POST['jml_prod_hias'];
				$jml_prod_tawarmina=$_POST['jml_prod_tawarmina'];
				$nilai_prod_mina=$_POST['nilai_prod_mina'];
				$jaring_apung=$_POST['jaring_apung'];
				$ls_apung=$_POST['ls_apung'];
				$jml_apung=$_POST['jml_apung'];
				$jml_prod_kerapu=$_POST['jml_prod_kerapu'];
				$jml_prod_kaputih=$_POST['jml_prod_kaputih'];
				$jml_prod_kapmerah=$_POST['jml_prod_kapmerah'];
				$jml_prod_apunglain=$_POST['jml_prod_apunglain'];
				$nilai_usaha_apung=$_POST['nilai_usaha_apung'];
				$ikan_umum=$_POST['ikan_umum'];
				$ls_tangkap=$_POST['ls_tangkap'];
				$prod_tangkap=$_POST['prod_tangkap'];
				$nilai_tangkap=$_POST['nilai_tangkap'];
				$usaha_tawar=$_POST['usaha_tawar'];
				$jml_usaha_tawar=$_POST['jml_usaha_tawar'];
				$omset_usaha_tawar=$_POST['omset_usaha_tawar'];
				$usaha_laut=$_POST['usaha_laut'];
				$jml_usaha_laut=$_POST['jml_usaha_laut'];
				$omset_usaha_laut=$_POST['omset_usaha_laut'];
				$bbi=$_POST['bbi'];
				$jml_bbi=$_POST['jml_bbi'];
				$prod_usaha_benih=$_POST['prod_usaha_benih'];
				$nilai_prod_benih=$_POST['nilai_prod_benih'];
				$upr=$_POST['upr'];
				$jml_upr=$_POST['jml_upr'];
				$prod_benih_upr=$_POST['prod_benih_upr'];
				$nilai_benih_upr=$_POST['nilai_benih_upr'];
				$tot_prod_ikan=$_POST['tot_prod_ikan'];
				$jml_ikan_laut=$_POST['jml_ikan_laut'];
				$jml_ikan_darat=$_POST['jml_ikan_darat'];
				$target_prod_ikan=$_POST['target_prod_ikan'];
				$target_ikan_laut=$_POST['target_ikan_laut'];
				$target_ikan_darat=$_POST['target_ikan_darat'];
				$jml_kons_ikan=$_POST['jml_kons_ikan'];
				$kons_ikan_laut=$_POST['kons_ikan_laut'];
				$kons_ikan_darat=$_POST['kons_ikan_darat'];
				$target_kons_ikan=$_POST['target_kons_ikan'];
				$target_kons_laut=$_POST['target_kons_laut'];
				$target_kons_darat=$_POST['target_kons_darat'];
				/*Kehutanan*/
				$kehutanan=$_POST['kehutanan'];
				$hutan_nonhph=$_POST['hutan_nonhph'];
				$kayu_bulat=$_POST['kayu_bulat'];
				$kayu_gergaji=$_POST['kayu_gergaji'];
				$kayu_olahan=$_POST['kayu_olahan'];
				$hasil_hikutan=$_POST['hasil_hikutan'];
				$rotan=$_POST['rotan'];
				$gaharu=$_POST['gaharu'];
				$getah_jeluntung=$_POST['getah_jeluntung'];
				$gando_rukem=$_POST['gando_rukem'];
				$kemiri=$_POST['kemiri'];
				$kenari=$_POST['kenari'];
				$menyan=$_POST['menyan'];
				$asam=$_POST['asam'];
				$minyak_lawang=$_POST['minyak_lawang'];
				$kulit_medang=$_POST['kulit_medang'];
				$bambu=$_POST['bambu'];
				$sarang_walet=$_POST['sarang_walet'];
				$madu=$_POST['madu'];
				$sagu=$_POST['sagu'];
				$nipah=$_POST['nipah'];
				$ijuk=$_POST['ijuk'];
				$kemendangan=$_POST['kemendangan'];
				$biga=$_POST['biga'];
				$kayu_manis=$_POST['kayu_manis'];
				$kayu_putih=$_POST['kayu_putih'];
				/*Kelompok Sumber Daya Sosial*/
				$kel_sda_sos=$_POST['kel_sda_sos'];
				$tani_pake_air=$_POST['tani_pake_air'];
				$kel_tani=$_POST['kel_tani'];
				$kontak_tani=$_POST['kontak_tani'];
				$karang_taruna=$_POST['karang_taruna'];
				$penyuluh_tani=$_POST['penyuluh_tani'];
				$kel_ternak=$_POST['kel_ternak'];
				$kel_nelayan=$_POST['kel_nelayan'];
				$tani_bantu=$_POST['tani_bantu'];
				$nelayan_bantu=$_POST['nelayan_bantu'];
				$jml_padi_kelpetani=$_POST['jml_padi_kelpetani'];
				$jml_ikan_kelnelayan=$_POST['jml_ikan_kelnelayan'];
				$jml_pangan_setaun=$_POST['jml_pangan_setaun'];
				$jml_areal_daerah=$_POST['jml_areal_daerah'];

				$user=Yii::app()->user->username;
				$gabung1 = array($pertanian,$padi_sawah,$tanam_sawah,$panen_sawah,$gabah_sawah,$beras_sawah,$prod_sawah,$kons_sawah,$padi_ladang,$tanam_ladang,$panen_ladang,$gabah_ladang,$beras_ladang,$prod_ladang,$kons_ladang,$jagung,$tanam_jagung,$panen_jagung,$produksi_jagung,$prod_jagung,$kons_jagung,$kedelai,$tanam_kedelai,$panen_kedelai,$produksi_kedelai,$prod_kedelai,$kons_kedelai,$hijau,$tanam_hijau,$panen_hijau,$produksi_hijau,$prod_hijau,$kons_hijau,$tanah,$tanam_tanah,$panen_tanah,$produksi_tanah,$prod_tanah,$kons_tanah,$boled,$tanam_boled,$panen_boled,$produksi_boled,$prod_boled,$kons_boled,$muntul,$tanam_muntul,$panen_muntul,$produksi_muntul,$prod_muntul,$kons_muntul,$ls_pertanian,$lahan_basah,$lahan_kering,$lahan_tinggi,$jns_irisawah,$irigasi_teknis,$separo_teknis,$irigasi_sederhana,$irigasi_airdesa,$tadah_hujan,$irigasi_polder,$ind_tani,$jml_perusahaan,$omset_tani);
				$gabung2 = array($hortikultura,$horti_mangga,$ls_mangga,$jml_mangga,$kons_mangga,$prod_mangga,$horti_jeruk,$ls_jeruk,$jml_jeruk,$kons_jeruk,$prod_jeruk,$horti_pepaya,$ls_pepaya,$jml_pepaya,$kons_pepaya,$prod_pepaya,$horti_pisang,$ls_pisang,$jml_pisang,$kons_pisang,$prod_pisang,$horti_nanas,$ls_nanas,$jml_nanas,$kons_nanas,$prod_nanas,$horti_durian,$ls_durian,$jml_durian,$kons_durian,$prod_durian,$horti_manggis,$ls_manggis,$jml_manggis,$kons_manggis,$prod_manggis,$horti_melon,$ls_melon,$jml_melon,$kons_melon,$prod_melon,$horti_alpukat,$ls_alpukat,$jml_alpukat,$kons_alpukat,$prod_alpukat,$horti_naga,$ls_naga,$jml_naga,$kons_naga,$prod_naga,$horti_belimbing,$ls_belimbing,$jml_belimbing,$kons_belimbing,$prod_belimbing,$horti_dukuh,$ls_dukuh,$jml_dukuh,$kons_dukuh,$prod_dukuh,$horti_jbiji,$ls_jbiji,$jml_jbiji,$kons_jbiji,$prod_jbiji,$horti_jair,$ls_jair,$jml_jair,$kons_jair,$prod_jair,$horti_nangka,$ls_nangka,$jml_nangka,$kons_nangka,$prod_nangka,$horti_salak,$ls_salak,$jml_salak,$kons_salak,$prod_salak,$horti_rambutan,$ls_rambutan,$jml_rambutan,$kons_rambutan,$prod_rambutan,$horti_sawo,$ls_sawo,$jml_sawo,$kons_sawo,$prod_sawo,$horti_sirsak,$ls_sirsak,$jml_sirsak,$kons_sirsak,$prod_sirsak,$horti_markisa,$ls_markisa,$jml_markisa,$kons_markisa,$prod_markisa,$horti_sukun,$ls_sukun,$jml_sukun,$kons_sukun,$prod_sukun,$horti_melinjo,$ls_melinjo,$jml_melinjo,$kons_melinjo,$prod_melinjo,$horti_bmerah,$ls_bmerah,$jml_bmerah,$kons_bmerah,$horti_kentang,$ls_kentang,$jml_kentang,$kons_kentang,$horti_kubis,$ls_kubis,$jml_kubis,$kons_kubis,$horti_cabai,$ls_cabai,$jml_cabai,$kons_cabai,$horti_sawi,$ls_sawi,$jml_sawi,$kons_sawi,$horti_wortel,$ls_wortel,$jml_wortel,$kons_wortel,$horti_bputih,$ls_bputih,$jml_bputih,$kons_bputih,$horti_sledri,$ls_sledri,$jml_sledri,$kons_sledri,$horti_kolk,$ls_kolk,$jml_kolk,$kons_kolk,$horti_lobak,$ls_lobak,$jml_lobak,$kons_lobak,$horti_kmerah,$ls_kmerah,$jml_kmerah,$kons_kmerah,$horti_kpanjang,$ls_kpanjang,$jml_kpanjang,$kons_kpanjang,$horti_semangka,$ls_semangka,$jml_semangka,$kons_semangka,$horti_tomat,$ls_tomat,$jml_tomat,$kons_tomat,$horti_terung,$ls_terung,$jml_terung,$kons_terung,$horti_buncis,$ls_buncis,$jml_buncis,$kons_buncis,$horti_ketimun,$ls_ketimun,$jml_ketimun,$kons_ketimun,$horti_siam,$ls_siam,$jml_siam,$kons_siam,$horti_kangkung,$ls_kangkung,$jml_kangkung,$kons_kangkung,$horti_bayam,$ls_bayam,$jml_bayam,$kons_bayam,$horti_jahe,$ls_jahe,$jml_jahe,$kons_jahe,$horti_laos,$ls_laos,$jml_laos,$kons_laos,$horti_kencur,$ls_kencur,$jml_kencur,$kons_kencur,$horti_kunyit,$ls_kunyit,$jml_kunyit,$kons_kunyit,$horti_serai,$ls_serai,$jml_serai,$kons_serai,$horti_blewah,$ls_blewah,$jml_blewah,$kons_blewah,$horti_petai,$ls_petai,$jml_petai,$kons_petai,$horti_jengkol,$ls_jengkol,$jml_jengkol,$kons_jengkol,$horti_bdaun,$ls_bdaun,$jml_bdaun,$kons_bdaun,$horti_cabe,$ls_cabe,$jml_cabe,$kons_cabe,$horti_jamur,$ls_jamur,$jml_jamur,$kons_jamur);
				$gabung3 = array($perkebunan,$kebun_karet,$ls_karet,$tanam_karet,$prod_karet,$kons_karet,$kebun_teh,$ls_teh,$tanam_teh,$prod_teh,$kons_teh,$kebun_kopi,$ls_kopi,$tanam_kopi,$prod_kopi,$kons_kopi,$kebun_sawit,$ls_sawit,$tanam_sawit,$prod_sawit,$kons_sawit,$kebun_tembakau,$ls_tembakau,$tanam_tembakau,$prod_tembakau,$kons_tembakau,$kebun_kakao,$ls_kakao,$tanam_kakao,$prod_kakao,$kons_kakao,$kebun_lada,$ls_lada,$tanam_lada,$prod_lada,$kons_lada,$kebun_vanili,$ls_vanili,$tanam_vanili,$prod_vanili,$kons_vanili,$kebun_tebu,$ls_tebu,$tanam_tebu,$prod_tebu,$kons_tebu,$kebun_kelapa,$ls_kelapa,$tanam_kelapa,$prod_kelapa,$kons_kelapa,$kebun_pawit,$ls_pawit,$tanam_pawit,$prod_pawit,$kons_pawit,$kebun_pala,$ls_pala,$tanam_pala,$prod_pala,$kons_pala,$kebun_dalam,$ls_dalam,$tanam_dalam,$prod_dalam,$kons_dalam,$kebun_cengkeh,$ls_cengkeh,$tanam_cengkeh,$prod_cengkeh,$kons_cengkeh,$kebun_kina,$ls_kina,$tanam_kina,$prod_kina,$kons_kina,$kebun_mete,$ls_mete,$tanam_mete,$prod_mete,$kons_mete,$kebun_kapuk,$ls_kapuk,$tanam_kapuk,$prod_kapuk,$kons_kapuk,$kebun_aren,$ls_aren,$tanam_aren,$prod_aren,$kons_aren,$kebun_pandan,$ls_pandan,$tanam_pandan,$prod_pandan,$kons_pandan,$kebun_kapolaga,$ls_kapolaga,$tanam_kapolaga,$prod_kapolaga,$kons_kapolaga,$ind_kebun,$jml_indkebun);
				$gabung4 = array($peternakan,$sapi_potong,$pop_sapi_potong,$pt_sapi_potong,$laju_sapi_potong,$rata_sapi_potong,$sapi_perah,$pop_sapi_perah,$pt_sapi_perah,$laju_sapi_perah,$rata_sapi_perah,$prod_sapi_perah,$ternak_kecil,$pop_kambing,$pop_domba,$pop_babi,$pop_kerbau,$pop_kuda,$pop_rusa,$pop_kelinci,$pop_kecil_lain,$ternak_unggas,$jml_buras,$ayam_petelur,$jml_petelur);
				$gabung5 = array($laut_ikan,$ikan_laut,$jml_tangkap_ikan,$jml_kapal_ikan,$prhu_nomotor,$prhu_tempelmotor,$kapal_motor,$jml_lelang_ikan,$hasil_laut,$hsl_laut_prod,$garam,$rajungan,$kepiting,$ubur,$kerang,$krapu,$teripang,$tuna,$udang,$lobster,$kakap_merah,$rumput_laut,$mutiara,$prod_laut_lain,$vol_ekspor_laut,$vol_garam,$vol_rajungan,$vol_kepiting,$vol_ubur,$vol_kerang,$vol_krapu,$vol_teripang,$vol_tuna,$vol_udang,$vol_lobster,$vol_kakap_merah,$vol_rumput_laut,$vol_mutiara,$vol_laut_lain,$nilai_ekspor_laut,$nilai_garam,$nilai_rajungan,$nilai_kepiting,$nilai_ubur,$nilai_kerang,$nilai_krapu,$nilai_teripang,$nilai_tuna,$nilai_udang,$nilai_lobster,$nilai_kakap_merah,$nilai_rumput_laut,$nilai_mutiara,$nilai_laut_lain,$ids_kelola_laut,$ids_garam,$ids_rumput_laut,$ids_lainnya,$areal_kelola_laut,$areal_garam,$areal_rumput_laut,$areal_lainnya,$ikan_darat,$tambak,$ls_tambak,$jml_prod_windu,$jml_prod_udang,$jml_prod_patin,$jml_prod_bandeng,$jml_prod_lainnya,$nilai_prod_tambak,$kolam_deras,$ls_kolderas,$jml_prod_mas,$jml_prod_mujair,$jml_prod_patinderas,$jml_prod_tawarlain,$nilai_prod_deras,$kolam_tenang,$ls_koltenang,$jml_prod_sidat,$jml_prod_nila,$jml_prod_lele,$jml_prod_gurami,$jml_prod_tenanglain,$nilai_prod_tenang,$keramba,$ls_keramba,$jml_keramba,$jml_prod_mujair,$jml_prod_tawes,$jml_prod_sepat,$jml_prod_gabus,$jml_prod_guramikrmb,$jml_prod_betok,$jml_prod_kerambalain,$nilai_prod_keramba,$mina_padi,$ls_mina,$jml_mina	 ,$jml_prod_masmina,$jml_prod_nilamina,$jml_prod_hias,$jml_prod_tawarmina,$nilai_prod_mina,$jaring_apung,$ls_apung,$jml_apung,$jml_prod_kerapu,$jml_prod_kaputih,$jml_prod_kapmerah,$jml_prod_apunglain,$nilai_usaha_apung,$ikan_umum,$ls_tangkap,$prod_tangkap,$nilai_tangkap,$usaha_tawar,$jml_usaha_tawar,$omset_usaha_tawar,$usaha_laut,$jml_usaha_laut,$omset_usaha_laut,$bbi,$jml_bbi,$prod_usaha_benih,$nilai_prod_benih,$upr,$jml_upr,$prod_benih_upr,$nilai_benih_upr,$tot_prod_ikan,$jml_ikan_laut,$jml_ikan_darat,$target_prod_ikan,$target_ikan_laut,$target_ikan_darat,$jml_kons_ikan,$kons_ikan_laut,$kons_ikan_darat,$target_kons_ikan,$target_kons_laut,$target_kons_darat);
				$gabung6 = array($kehutanan,$hutan_nonhph,$kayu_bulat,$kayu_gergaji,$kayu_olahan,$hasil_hikutan,$rotan,$gaharu,$getah_jeluntung,$gando_rukem,$kemiri,$kenari,$menyan,$asam,$minyak_lawang,$kulit_medang,$bambu,$sarang_walet,$madu,$sagu,$nipah,$ijuk,$kemendangan,$biga,$kayu_manis,$kayu_putih);
				$gabung7 = array($kel_sda_sos,$tani_pake_air,$kel_tani,$kontak_tani,$karang_taruna,$penyuluh_tani,$kel_ternak,$kel_nelayan,$tani_bantu,$nelayan_bantu,$jml_padi_kelpetani,$jml_ikan_kelnelayan,$jml_pangan_setaun,$jml_areal_daerah);

				$isiin1 = implode("#", $gabung1);
				$isiin2 = implode("#", $gabung2);
				$isiin3 = implode("#", $gabung3);
				$isiin4 = implode("#", $gabung4);
				$isiin5 = implode("#", $gabung5);
				$isiin6 = implode("#", $gabung6);
				$isiin7 = implode("#", $gabung7);

				$query1 = "INSERT INTO log VALUES(NULL, 'sda_pertanian', '$user', '$tahunini', '$isiin1', '$waktuisi')";
				$query2 = "INSERT INTO log VALUES(NULL, 'sda_hortikultura', '$user', '$tahunini', '$isiin2', '$waktuisi')";
				$query3 = "INSERT INTO log VALUES(NULL, 'sda_perkebunan', '$user', '$tahunini', '$isiin3', '$waktuisi')";
				$query4 = "INSERT INTO log VALUES(NULL, 'sda_peternakan', '$user', '$tahunini', '$isiin4', '$waktuisi')";
				$query5 = "INSERT INTO log VALUES(NULL, 'sda_laut_ikan', '$user', '$tahunini', '$isiin5', '$waktuisi')";
				$query6 = "INSERT INTO log VALUES(NULL, 'sda_kehutanan', '$user', '$tahunini', '$isiin6', '$waktuisi')";
				$query7 = "INSERT INTO log VALUES(NULL, 'sda_kel_sos', '$user', '$tahunini', '$isiin7', '$waktuisi')";

				$conn=Yii::app()->db;

				$command1=$conn->createCommand($query1);
				$command2=$conn->createCommand($query2);
				$command3=$conn->createCommand($query3);
				$command4=$conn->createCommand($query4);
				$command5=$conn->createCommand($query5);
				$command6=$conn->createCommand($query6);
				$command7=$conn->createCommand($query7);

				$command1->execute();
				$command2->execute();
				$command3->execute();
				$command4->execute();
				$command5->execute();
				$command6->execute();
				$command7->execute();
				$this->redirect(array(
					'sda'));
			}
		}

		public function actionSimpanHidup(){
			if($_POST){
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				/*Lingkungan Hidup*/
				$linkhidup=$_POST['linkhidup'];
				$jml_kwsn_lindung=$_POST['jml_kwsn_lindung'];
				$taman_nas=$_POST['taman_nas'];
				$cagar_alam=$_POST['cagar_alam'];
				$suaka_alam=$_POST['suaka_alam'];
				$hutan_lindung=$_POST['hutan_lindung'];
				$cagar_budaya=$_POST['cagar_budaya'];
				$hutan_raya=$_POST['hutan_raya'];
				$kebun_raya=$_POST['kebun_raya'];
				$pencemaran=$_POST['pencemaran'];
				$cemar_tanah=$_POST['cemar_tanah'];
				$cemar_air=$_POST['cemar_air'];
				$cemar_udara=$_POST['cemar_udara'];
				$cemar_laut=$_POST['cemar_laut'];
				$nutfah_lindung=$_POST['nutfah_lindung'];
				$hewan_lindung=$_POST['hewan_lindung'];
				$tumbuhan_lindung=$_POST['tumbuhan_lindung'];
				$nutfah_punah=$_POST['nutfah_punah'];
				$hewan_punah=$_POST['hewan_punah'];
				$tumbuhan_punah=$_POST['tumbuhan_punah'];
				$nutfah_endemik=$_POST['nutfah_endemik'];
				$hewan_endemik=$_POST['hewan_endemik'];
				$tumbuhan_endemik=$_POST['tumbuhan_endemik'];
				$terumbu_karang=$_POST['terumbu_karang'];
				$ls_karang=$_POST['ls_karang'];
				$kondisi_karang=$_POST['kondisi_karang'];
				$karang_baiksekali=$_POST['karang_baiksekali'];
				$karang_baik=$_POST['karang_baik'];
				$karang_sedang=$_POST['karang_sedang'];
				$karang_buruk=$_POST['karang_buruk'];
				$hutan_bakau=$_POST['hutan_bakau'];
				$ls_bakau=$_POST['ls_bakau'];
				$kondisi_bakau=$_POST['kondisi_bakau'];
				$bakau_baik=$_POST['bakau_baik'];
				$bakau_sedang=$_POST['bakau_sedang'];
				$bakau_rusak=$_POST['bakau_rusak'];
				$hutan_lamun=$_POST['hutan_lamun'];
				$ls_lamun=$_POST['ls_lamun'];
				$kondisi_lamun=$_POST['kondisi_lamun'];
				$lamun_baik=$_POST['lamun_baik'];
				$lamun_sedang=$_POST['lamun_sedang'];
				$lamun_rusak=$_POST['lamun_rusak'];
				/*Kerusakan Lingkungan Hidup*/
				$rusak_linkhidup=$_POST['rusak_linkhidup'];
				$intrusi_airlaut=$_POST['intrusi_airlaut'];
				$abrasi_pantai=$_POST['abrasi_pantai'];
				$reklamasi_batu_bara=$_POST['reklamasi_batu_bara'];
				$erosi=$_POST['erosi'];
				$banjir=$_POST['banjir'];
				$gempa_bumi=$_POST['gempa_bumi'];
				$tsunami=$_POST['tsunami'];
				$badai=$_POST['badai'];
				$kawasan_hutan=$_POST['kawasan_hutan'];
				$kebakaran_hutan=$_POST['kebakaran_hutan'];
				$hutan_gundul=$_POST['hutan_gundul'];
				$tambang_liar=$_POST['tambang_liar'];
				$kekeringan=$_POST['kekeringan'];
				$lainnya_rsklinkhdp=$_POST['lainnya_rsklinkhdp'];
				/*Pelestarian Lingkungan Hidup*/
				$lestari_linkhidup=$_POST['lestari_linkhidup'];
				$remaja_karang=$_POST['remaja_karang'];
				$tanam_bakau=$_POST['tanam_bakau'];
				$reboisasi=$_POST['reboisasi'];
				$penghijauan=$_POST['penghijauan'];
				$hijau_wil_longsor=$_POST['hijau_wil_longsor'];
				$kasus_selesai_pemda=$_POST['kasus_selesai_pemda'];
				$jml_kasus_link=$_POST['jml_kasus_link'];
				$rehab_hutan_kritis=$_POST['rehab_hutan_kritis'];
				$tambang_liar_tertib=$_POST['tambang_liar_tertib'];
				/*Tata Ruang*/
				$tataruang=$_POST['tataruang'];
				$ls_kwsn_lindung=$_POST['ls_kwsn_lindung'];
				$lindung_hutan=$_POST['lindung_hutan'];
				$lindung_bknhutan=$_POST['lindung_bknhutan'];
				$kwsn_pemukiman=$_POST['kwsn_pemukiman'];
				$ls_pemukiman=$_POST['ls_pemukiman'];
				$jml_pemukiman=$_POST['jml_pemukiman'];
				$jml_mukim_roda4=$_POST['jml_mukim_roda4'];
				$kwsn_industri=$_POST['kwsn_industri'];
				$lahan_produktif=$_POST['lahan_produktif'];
				$lahan_kritis=$_POST['lahan_kritis'];
				$hutan_rakyat=$_POST['hutan_rakyat'];
				$ls_ruang_hijau=$_POST['ls_ruang_hijau'];
				$rencana_peruntukan=$_POST['rencana_peruntukan'];
				$realisasi_rtrw=$_POST['realisasi_rtrw'];
				$ls_wil_budidaya=$_POST['ls_wil_budidaya'];
				$ls_wil_prod=$_POST['ls_wil_prod'];
				$ls_wil_kota=$_POST['ls_wil_kota'];
				/*Pertanahan*/
				$pertanahan=$_POST['pertanahan'];
				$jml_tnh_sertifikat=$_POST['jml_tnh_sertifikat'];
				$hak_milik=$_POST['hak_milik'];
				$guna_bangunan=$_POST['guna_bangunan'];
				$guna_usaha=$_POST['guna_usaha'];
				$hak_pakai=$_POST['hak_pakai'];
				$girik=$_POST['girik'];
				$ls_tnh_sertifikat=$_POST['ls_tnh_sertifikat'];
				$ls_hak_milik=$_POST['ls_hak_milik'];
				$ls_guna_bangunan=$_POST['ls_guna_bangunan'];
				$ls_guna_usaha=$_POST['ls_guna_usaha'];
				$ls_hak_pakai=$_POST['ls_guna_usaha'];
				$ls_girik=$_POST['ls_girik'];
				$bangun_gedung=$_POST['bangun_gedung'];
				$sertifikat_gedung=$_POST['sertifikat_gedung'];
				$tnh_bersertifikat=$_POST['tnh_bersertifikat'];
				$gedung_sertifikat=$_POST['gedung_sertifikat'];
				$gd_hak_milik=$_POST['gd_hak_milik'];
				$jml_gd_milik=$_POST['jml_gd_milik'];
				$ls_gd_milik=$_POST['ls_gd_milik'];
				$gd_guna_bangunan=$_POST['gd_guna_bangunan'];
				$jml_gd_guna=$_POST['jml_gd_guna'];
				$ls_gd_guna=$_POST['ls_gd_guna'];
				$gd_pakai=$_POST['gd_pakai'];
				$jml_gd_pakai=$_POST['jml_gd_pakai'];
				$ls_gd_pakai=$_POST['ls_gd_pakai'];
				$ladang_sertifikat=$_POST['ladang_sertifikat'];
				$tnh_hak_milik=$_POST['tnh_hak_milik'];
				$jml_tnh_milik=$_POST['jml_tnh_milik'];
				$ls_tnh_milik=$_POST['ls_tnh_milik'];
				$tnh_guna_lahan=$_POST['tnh_guna_lahan'];
				$jml_tnh_guna=$_POST['jml_tnh_guna'];
				$ls_tnh_guna=$_POST['ls_tnh_guna'];
				$tnh_pakai=$_POST['tnh_pakai'];
				$jml_tnh_pakai=$_POST['jml_tnh_pakai'];
				$ls_tnh_pakai=$_POST['ls_tnh_pakai'];
				/*Sarana Pengendalian Lingkungan Hidup*/
				$sarana_kendalilink=$_POST['sarana_kendalilink'];
				$lab_penelitilink=$_POST['lab_penelitilink'];
				$pst_eva_bencana=$_POST['pst_eva_bencana'];
				$sarana_poludara=$_POST['sarana_poludara'];
				/*Sampah*/
				$sampah=$_POST['sampah'];
				$jml_tmpt_sampah=$_POST['jml_tmpt_sampah'];
				$kapasitas_tps=$_POST['kapasitas_tps'];
				$tpa=$_POST['tpa'];
				$tpst=$_POST['tpst'];
				$vol_prodsampah=$_POST['vol_prodsampah'];
				$vol_sampah_ditangani=$_POST['vol_sampah_ditangani'];
				/*Air Limbah*/
				$air_limbah=$_POST['air_limbah'];
				$buang_limbahpst=$_POST['buang_limbahpst'];
				$buang_limbahrt=$_POST['buang_limbahrt'];

				$user=Yii::app()->user->username;
				$gabung1 = array($linkhidup,$jml_kwsn_lindung,$taman_nas,$cagar_alam,$suaka_alam,$hutan_lindung,$cagar_budaya,$hutan_raya,$kebun_raya,$pencemaran,$cemar_tanah,$cemar_air,$cemar_udara,$cemar_laut,$nutfah_lindung,$hewan_lindung,$tumbuhan_lindung,$nutfah_punah,$hewan_punah,$tumbuhan_punah,$nutfah_endemik,$hewan_endemik,$tumbuhan_endemik,$terumbu_karang,$ls_karang,$kondisi_karang,$karang_baiksekali,$karang_baik,$karang_sedang,$karang_buruk,$hutan_bakau,$ls_bakau,$kondisi_bakau,$bakau_baik,$bakau_sedang,$bakau_rusak,$hutan_lamun,$ls_lamun,$kondisi_lamun,$lamun_baik,$lamun_sedang,$lamun_rusak);
				$gabung2 = array($rusak_linkhidup,$intrusi_airlaut,$abrasi_pantai,$reklamasi_batu_bara,$erosi,$banjir,$gempa_bumi,$tsunami,$badai,$kawasan_hutan,$kebakaran_hutan,$hutan_gundul,$tambang_liar,$kekeringan,$lainnya_rsklinkhdp);
				$gabung3 = array($lestari_linkhidup,$remaja_karang,$tanam_bakau,$reboisasi,$penghijauan,$hijau_wil_longsor,$kasus_selesai_pemda,$jml_kasus_link,$rehab_hutan_kritis,$tambang_liar_tertib);
				$gabung4 = array($tataruang,$ls_kwsn_lindung,$lindung_hutan,$lindung_bknhutan,$kwsn_pemukiman,$ls_pemukiman,$jml_pemukiman,$jml_mukim_roda4,$kwsn_industri,$lahan_produktif,$lahan_kritis,$hutan_rakyat,$ls_ruang_hijau,$rencana_peruntukan,$realisasi_rtrw,$ls_wil_budidaya,$ls_wil_prod,$ls_wil_kota);
				$gabung5 = array($pertanahan,$jml_tnh_sertifikat,$hak_milik,$guna_bangunan,$guna_usaha,$hak_pakai,$girik,$ls_tnh_sertifikat,$ls_hak_milik,$ls_guna_bangunan,$ls_guna_usaha,$ls_hak_pakai,$ls_girik,$bangun_gedung,$sertifikat_gedung,$tnh_bersertifikat,$gedung_sertifikat,$gd_hak_milik,$jml_gd_milik,$ls_gd_milik,$gd_guna_bangunan,$jml_gd_guna,$ls_gd_guna,$gd_pakai,$jml_gd_pakai,$ls_gd_pakai,$ladang_sertifikat,$tnh_hak_milik,$jml_tnh_milik,$ls_tnh_milik,$tnh_guna_lahan,$jml_tnh_guna,$ls_tnh_guna,$tnh_pakai,$jml_tnh_pakai,$ls_tnh_pakai);
				$gabung6 = array($sarana_kendalilink,$lab_penelitilink,$pst_eva_bencana,$sarana_poludara);
				$gabung7 = array($sampah,$jml_tmpt_sampah,$kapasitas_tps,$tpa,$tpst,$vol_prodsampah,$vol_sampah_ditangani);
				$gabung8 = array($air_limbah,$buang_limbahpst,$buang_limbahrt);

				$isiin1 = implode("#", $gabung1);
				$isiin2 = implode("#", $gabung2);
				$isiin3 = implode("#", $gabung3);
				$isiin4 = implode("#", $gabung4);
				$isiin5 = implode("#", $gabung5);
				$isiin6 = implode("#", $gabung6);
				$isiin7 = implode("#", $gabung7);
				$isiin8 = implode("#", $gabung8);

				$query1 = "INSERT INTO log VALUES(NULL, 'sda_linkhidup', '$user', '$tahunini', '$isiin1', '$waktuisi')";
				$query2 = "INSERT INTO log VALUES(NULL, 'sda_rusaklinkhidup', '$user', '$tahunini', '$isiin2', '$waktuisi')";
				$query3 = "INSERT INTO log VALUES(NULL, 'sda_pelestarianlink', '$user', '$tahunini', '$isiin3', '$waktuisi')";
				$query4 = "INSERT INTO log VALUES(NULL, 'sda_tataruang', '$user', '$tahunini', '$isiin4', '$waktuisi')";
				$query5 = "INSERT INTO log VALUES(NULL, 'sda_pertanahan', '$user', '$tahunini', '$isiin5', '$waktuisi')";
				$query6 = "INSERT INTO log VALUES(NULL, 'sda_kendalilink', '$user', '$tahunini', '$isiin6', '$waktuisi')";
				$query7 = "INSERT INTO log VALUES(NULL, 'sda_sampah', '$user', '$tahunini', '$isiin7', '$waktuisi')";
				$query8 = "INSERT INTO log VALUES(NULL, 'sda_air_limbah', '$user', '$tahunini', '$isiin8', '$waktuisi')";

				$conn=Yii::app()->db;

				$command1=$conn->createCommand($query1);
				$command2=$conn->createCommand($query2);
				$command3=$conn->createCommand($query3);
				$command4=$conn->createCommand($query4);
				$command5=$conn->createCommand($query5);
				$command6=$conn->createCommand($query6);
				$command7=$conn->createCommand($query7);
				$command8=$conn->createCommand($query8);

				$command1->execute();
				$command2->execute();
				$command3->execute();
				$command4->execute();
				$command5->execute();
				$command6->execute();
				$command7->execute();
				$command8->execute();
				$this->redirect(array(
					'sda'));
			}
		}

		public function actionSimpanEnergi(){
			if($_POST){
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				/*Pertambangan*/
				/*Energi*/
				$energi=$_POST['energi'];
				$sumber_listrik=$_POST['sumber_listrik'];
				$plta=$_POST['plta'];
				$jml_plta=$_POST['jml_plta'];
				$kapasitas_plta=$_POST['kapasitas_plta'];
				$cakupan_plta=$_POST['cakupan_plta'];
				$pltg=$_POST['pltg'];
				$jml_pltg=$_POST['jml_pltg'];
				$kapasitas_pltg=$_POST['kapasitas_pltg'];
				$cakupan_pltg=$_POST['cakupan_pltg'];
				$pltu=$_POST['pltu'];
				$jml_pltu=$_POST['jml_pltu'];
				$kapasitas_pltu=$_POST['kapasitas_pltu'];
				$cakupan_pltu=$_POST['cakupan_pltu'];
				$pltd=$_POST['pltd'];
				$jml_pltd=$_POST['jml_pltd'];
				$kapasitas_pltd=$_POST['kapasitas_pltd'];
				$cakupan_pltd=$_POST['cakupan_pltd'];
				$plts=$_POST['plts'];
				$jml_plts=$_POST['jml_plts'];
				$kapasitas_plts=$_POST['kapasitas_plts'];
				$cakupan_plts=$_POST['cakupan_plts'];
				$pltmh=$_POST['pltmh'];
				$jml_pltmh=$_POST['jml_pltmh'];
				$kapasitas_pltmh=$_POST['kapasitas_pltmh'];
				$cakupan_pltmh=$_POST['cakupan_pltmh'];
				$pltp=$_POST['pltp'];
				$jml_pltp=$_POST['jml_pltp'];
				$kapasitas_pltp=$_POST['kapasitas_pltp'];
				$cakupan_pltp=$_POST['cakupan_pltp'];
				$jangkauan_listrik=$_POST['jangkauan_listrik'];
				$klrg_guna_pln=$_POST['klrg_guna_pln'];
				$klrg_guna_nonpln=$_POST['klrg_guna_nonpln'];
				$klrg_belum_pln=$_POST['klrg_belum_pln'];
				$rt_guna_pln=$_POST['rt_guna_pln'];
				$rt_daya_450=$_POST['rt_daya_450'];
				$rt_daya_900=$_POST['rt_daya_900'];
				$rt_daya_1300=$_POST['rt_daya_1300'];
				$rt_daya_2200=$_POST['rt_daya_2200'];
				$rt_daya_lebih=$_POST['rt_daya_lebih'];
				$daya_terpasang=$_POST['daya_terpasang'];
				$kebutuhan_listrik=$_POST['kebutuhan_listrik'];
				$sarana_bbm=$_POST['sarana_bbm'];
				$spbu=$_POST['spbu'];
				$depo_latung=$_POST['depo_latung'];
				$uppdn=$_POST['uppdn'];
				$agen_lpg=$_POST['agen_lpg'];

				$user=Yii::app()->user->username;
				$gabung1 = array();
				$gabung2 = array($energi,$sumber_listrik,$plta,$jml_plta,$kapasitas_plta,$cakupan_plta,$pltg,$jml_pltg,$kapasitas_pltg,$cakupan_pltg,$pltu,$jml_pltu,$kapasitas_pltu,$cakupan_pltu,$pltd,$jml_pltd,$kapasitas_pltd,$cakupan_pltd,$plts,$jml_plts,$kapasitas_plts,$cakupan_plts,$pltmh,$jml_pltmh,$kapasitas_pltmh,$cakupan_pltmh,$pltp,$jml_pltp,$kapasitas_pltp,$cakupan_pltp,$jangkauan_listrik,$klrg_guna_pln,$klrg_guna_nonpln,$klrg_belum_pln,$rt_guna_pln,$rt_daya_450,$rt_daya_900,$rt_daya_1300,$rt_daya_2200,$rt_daya_lebih,$daya_terpasang,$kebutuhan_listrik,$sarana_bbm,$spbu,$depo_latung,$uppdn,$agen_lpg);

				$isiin1 = implode("#", $gabung1);
				$isiin2 = implode("#", $gabung2);

				$query1 = "INSERT INTO log VALUES(NULL, 'sda_pertambangan', '$user', '$tahunini', '$isiin1', '$waktuisi')";
				$query2 = "INSERT INTO log VALUES(NULL, 'sda_energi', '$user', '$tahunini', '$isiin2', '$waktuisi')";

				$conn=Yii::app()->db;

				$command1=$conn->createCommand($query1);
				$command2=$conn->createCommand($query2);

				$command1->execute();
				$command2->execute();
				$this->redirect(array(
					'sda'));
			}
		}

		public function actionSimpanRumah(){
			if($_POST){
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				/*Perumahan*/
				$perumahan=$_POST['perumahan'];
				$perumnas=$_POST['perumnas'];
				$statrmh=$_POST['statrmh'];
				$rmhdewek=$_POST['rmhdewek'];
				$rmhsewa=$_POST['rmhsewa'];
				$sediarmh=$_POST['sediarmh'];
				$kprbtn=$_POST['kprbtn'];
				$realestate=$_POST['realestate'];
				$kurangrmh=$_POST['kurangrmh'];
				$rmhsusun=$_POST['rmhsusun'];
				$perumperorangan=$_POST['perumperorangan'];
				$kebrumah=$_POST['kebrumah'];
				$jasainstalasi=$_POST['jasainstalasi'];
				$jasainstalasipln=$_POST['jasainstalasipln'];
				$jasainstalasipdam=$_POST['jasainstalasipdam'];
				$jmlrmhviabgn=$_POST['jmlrmhviabgn'];
				$jmlrmhpermanen=$_POST['jmlrmhpermanen'];
				$jmlrmhsemi=$_POST['jmlrmhsemi'];
				$jmlrmhnonpermanen=$_POST['jmlrmhnonpermanen'];
				/*Jumlah Rumah*/
				$jmlrmh=$_POST['jmlrmh'];
				$rmhlayakhuni=$_POST['rmhlayakhuni'];
				$rmhdesa=$_POST['rmhdesa'];
				$rmhkota=$_POST['rmhkota'];
				$rmhtlayakhuni=$_POST['rmhtlayakhuni'];
				$rmhtdesa=$_POST['rmhtdesa'];
				$rmhtkota=$_POST['rmhtkota'];
				/*Luas Rumah per Kapita*/
				$lrmhkapita=$_POST['lrmhkapita'];
				$rkplayakhuni=$_POST['rkplayakhuni'];
				$rkptdesa=$_POST['rkptdesa'];
				$rkptkota=$_POST['rkptkota'];
				$rkptlayakhuni=$_POST['rkptlayakhuni'];
				$rkpttdesa=$_POST['rkpttdesa'];
				$rkpttkota=$_POST['rkpttkota'];
				/*Luas Areal Pemukiman*/
				$lmukim=$_POST['lmukim'];
				$layakhuni=$_POST['layakhuni'];
				$lhunidesa=$_POST['lhunidesa'];
				$lhunikota=$_POST['lhunikota'];
				$tlayakhuni=$_POST['tlayakhuni'];
				$tlhunidesa=$_POST['tlhunidesa'];
				$tlhunikota=$_POST['tlhunikota'];
				/*Jumlah Bangunan*/
				$jml_bangunan=$_POST['jml_bangunan'];
				$bangun_imb=$_POST['bangun_imb'];
				$bangun_nonimb=$_POST['bangun_nonimb'];
				/*Tinkgat Kekumuhan*/
				$tkt_kumiskritis=$_POST['tkt_kumiskritis'];
				$tkt_kumuh=$_POST['tkt_kumuh'];
				$ls_kumuh=$_POST['ls_kumuh'];
				$penduduk_kumuh=$_POST['penduduk_kumuh'];
				$keluarga_kumuh=$_POST['keluarga_kumuh'];
				$tkt_kritis=$_POST['tkt_kritis'];
				$keluarga_kritis=$_POST['keluarga_kritis'];
				/*Pemukiman Ilegal*/
				$mukim_ilegal=$_POST['mukim_ilegal'];
				$ilegal_negara=$_POST['ilegal_negara'];
				$ls_ilnegara=$_POST['ls_ilnegara'];
				$penduduk_ilnegara=$_POST['penduduk_ilnegara'];
				$keluarga_ilnegara=$_POST['keluarga_ilnegara'];
				$ilegal_hijau=$_POST['ilegal_hijau'];
				$ls_ilhijau=$_POST['ls_ilhijau'];
				$penduduk_ilhijau=$_POST['penduduk_ilhijau'];
				$keluarga_ilhijau=$_POST['keluarga_ilhijau'];
				$ilegal_orang=$_POST['ilegal_orang'];
				$ls_ilorang=$_POST['ls_ilorang'];
				$penduduk_ilorang=$_POST['penduduk_ilorang'];
				$keluarga_ilorang=$_POST['keluarga_ilorang'];
				/*Pemukiman Bantaran Sungai*/
				$mukim_bantaran=$_POST['mukim_bantaran'];
				$ls_bantaran=$_POST['ls_bantaran'];
				$penduduk_bantaran=$_POST['penduduk_bantaran'];
				$keluarga_bantaran=$_POST['keluarga_bantaran'];
				/*Pemukiman dibawah SUTET*/
				$mukim_sutet=$_POST['mukim_sutet'];
				$ls_sutet=$_POST['ls_sutet'];
				$penduduk_sutet=$_POST['penduduk_sutet'];
				$keluarga_sutet=$_POST['keluarga_sutet'];
				/*Jumlah Ruang Publik*/
				$ruang_publik=$_POST['ruang_publik'];
				$balai_temu=$_POST['balai_temu'];
				$gd_seni=$_POST['gd_seni'];
				$gor=$_POST['gor'];
				$stadion=$_POST['stadion'];
				$tmpt_rekreasi=$_POST['tmpt_rekreasi'];
				$rpublik_berubah=$_POST['rpublik_berubah'];
				/*Rumah Tinggal Bersanitasi*/
				$rmh_sanitasi=$_POST['rmh_sanitasi'];
				$fas_air=$_POST['fas_air'];
				$buang_tinja=$_POST['buang_tinja'];
				$buang_limbah=$_POST['buang_limbah'];
				$buang_sampah=$_POST['buang_sampah'];

				$user=Yii::app()->user->username;
				$gabung1 = array($perumahan,$perumnas,$statrmh,$rmhdewek,$rmhsewa,$sediarmh,$kprbtn,$realestate,$kurangrmh,$rmhsusun,$perumperorangan,$kebrumah,$jasainstalasi,$jasainstalasipln,$jasainstalasipdam,$jmlrmhviabgn,$jmlrmhpermanen,$jmlrmhsemi,$jmlrmhnonpermanen);
				$gabung2 = array($jmlrmh,$rmhlayakhuni,$rmhdesa,$rmhkota,$rmhtlayakhuni,$rmhtdesa,$rmhtkota);
				$gabung3 = array($lrmhkapita,$rkplayakhuni,$rkptdesa,$rkptkota,$rkptlayakhuni,$rkpttdesa,$rkpttkota);
				$gabung4 = array($lmukim,$layakhuni,$lhunidesa,$lhunikota,$tlayakhuni,$tlhunidesa,$tlhunikota);
				$gabung5 = array($jml_bangunan,$bangun_imb,$bangun_nonimb);
				$gabung6 = array($tkt_kumiskritis,$tkt_kumuh,$ls_kumuh,$penduduk_kumuh,$keluarga_kumuh,$tkt_kritis,$keluarga_kritis);
				$gabung7 = array($mukim_ilegal,$ilegal_negara,$ls_ilnegara,$penduduk_ilnegara,$keluarga_ilnegara,$ilegal_hijau,$ls_ilhijau,$penduduk_ilhijau,$keluarga_ilhijau,$ilegal_orang,$ls_ilorang,$penduduk_ilorang,$keluarga_ilorang);
				$gabung8 = array($mukim_bantaran,$ls_bantaran,$penduduk_bantaran,$keluarga_bantaran);
				$gabung9 = array($mukim_sutet,$ls_sutet,$penduduk_sutet,$keluarga_sutet);
				$gabung10 = array($ruang_publik,$balai_temu,$gd_seni,$gor,$stadion,$tmpt_rekreasi,$rpublik_berubah);
				$gabung11 = array($rmh_sanitasi,$fas_air,$buang_tinja,$buang_limbah,$buang_sampah);

				$isiin1 = implode("#", $gabung1);
				$isiin2 = implode("#", $gabung2);
				$isiin3 = implode("#", $gabung3);
				$isiin4 = implode("#", $gabung4);
				$isiin5 = implode("#", $gabung5);
				$isiin6 = implode("#", $gabung6);
				$isiin7 = implode("#", $gabung7);
				$isiin8 = implode("#", $gabung8);
				$isiin9 = implode("#", $gabung9);
				$isiin10 = implode("#", $gabung10);
				$isiin11 = implode("#", $gabung11);

				$query1 = "INSERT INTO log VALUES(NULL, 'infra_perumahan', '$user', '$tahunini', '$isiin1', '$waktuisi')";
				$query2 = "INSERT INTO log VALUES(NULL, 'infra_jmlrmh', '$user', '$tahunini', '$isiin2', '$waktuisi')";
				$query3 = "INSERT INTO log VALUES(NULL, 'infra_lsrmh', '$user', '$tahunini', '$isiin3', '$waktuisi')";
				$query4 = "INSERT INTO log VALUES(NULL, 'infra_arealmukim', '$user', '$tahunini', '$isiin4', '$waktuisi')";
				$query5 = "INSERT INTO log VALUES(NULL, 'infra_jmlbangun', '$user', '$tahunini', '$isiin5', '$waktuisi')";
				$query6 = "INSERT INTO log VALUES(NULL, 'infra_kumuh', '$user', '$tahunini', '$isiin6', '$waktuisi')";
				$query7 = "INSERT INTO log VALUES(NULL, 'infra_ilegal', '$user', '$tahunini', '$isiin7', '$waktuisi')";
				$query8 = "INSERT INTO log VALUES(NULL, 'infra_bantaran', '$user', '$tahunini', '$isiin8', '$waktuisi')";
				$query9 = "INSERT INTO log VALUES(NULL, 'infra_sutet', '$user', '$tahunini', '$isiin9', '$waktuisi')";
				$query10 = "INSERT INTO log VALUES(NULL, 'infra_rpublik', '$user', '$tahunini', '$isiin10', '$waktuisi')";
				$query11 = "INSERT INTO log VALUES(NULL, 'infra_rmhsanitasi', '$user', '$tahunini', '$isiin11', '$waktuisi')";

				$conn=Yii::app()->db;

				$command1=$conn->createCommand($query1);
				$command2=$conn->createCommand($query2);
				$command3=$conn->createCommand($query3);
				$command4=$conn->createCommand($query4);
				$command5=$conn->createCommand($query5);
				$command6=$conn->createCommand($query6);
				$command7=$conn->createCommand($query7);
				$command8=$conn->createCommand($query8);
				$command9=$conn->createCommand($query9);
				$command10=$conn->createCommand($query10);
				$command11=$conn->createCommand($query11);

				$command1->execute();
				$command2->execute();
				$command3->execute();
				$command4->execute();
				$command5->execute();
				$command6->execute();
				$command7->execute();
				$command8->execute();
				$command9->execute();
				$command10->execute();
				$command11->execute();
				$this->redirect(array(
					'infrastruktur'));
			}
		}

		public function actionSimpanPu(){
			if($_POST){
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				/*Panjang Jalan Berdasarkan Kelas*/
				$jln_kelas=$_POST['jln_kelas'];
				$jln_nasional=$_POST['jln_nasional'];
				$jln_propinsi=$_POST['jln_propinsi'];
				$jln_kota=$_POST['jln_kota'];
				$jln_lokal=$_POST['jln_lokal'];
				$jln_tol=$_POST['jln_tol'];
				$jln_tolruas=$_POST['jln_tolruas'];
				$jln_tolperator=$_POST['jln_tolperator'];
				/*Kondisi Jalan*/
				$kondisi_jln=$_POST['kondisi_jln'];
				$jln_aspal=$_POST['jln_aspal'];
				$jln_batu=$_POST['jln_batu'];
				$jln_hotmix=$_POST['jln_hotmix'];
				$jln_beton=$_POST['jln_beton'];
				$jln_kerikil=$_POST['jln_kerikil'];
				$jln_tanah=$_POST['jln_tanah'];
				/*Panjang Jalan Berdasrkan Kondisi*/
				$jln_kondisi=$_POST['jln_kondisi'];
				$jln_baik=$_POST['jln_baik'];
				$jln_ringan=$_POST['jln_ringan'];
				$jln_berat=$_POST['jln_berat'];
				/*Jalan Penghubung*/
				$jln_penghub=$_POST['jln_penghub'];
				$hub_kotamukim=$_POST['hub_kotamukim'];
				$jln_setapak=$_POST['jln_setapak'];
				/*Jembatan*/
				$jembatan=$_POST['jembatan'];
				$pj_jembatan=$_POST['pj_jembatan'];
				$jml_jembatan=$_POST['jml_jembatan'];
				/*Panjang Jalan Berdasarkan Fungsi*/
				$jln_fungsi=$_POST['jln_fungsi'];
				$jln_arteri=$_POST['jln_arteri'];
				$jln_kolektor=$_POST['jln_kolektor'];
				$jln_lokal=$_POST['jln_lokal'];
				$jln_lingkungan=$_POST['jln_lingkungan'];
				/*Tempat Pemakaman*/
				$tmpt_makam=$_POST['tmpt_makam'];
				$ls_umum=$_POST['ls_umum'];
				$ls_bknumum=$_POST['ls_bknumum'];
				$ls_khsus=$_POST['ls_khsus'];
				$ls_pahlawan=$_POST['ls_pahlawan'];
				/*Jenis Prasarana Irigasi*/
				$irigasi_air=$_POST['irigasi_air'];
				$irigasi_nontek=$_POST['irigasi_nontek'];
				$irigasi_teknis=$_POST['irigasi_teknis'];
				$teknis_primer=$_POST['teknis_primer'];
				$teknis_sekunder=$_POST['teknis_sekunder'];
				$teknis_tersier=$_POST['teknis_tersier'];
				$ls_irigasi=$_POST['ls_irigasi'];
				$irigasi_baik=$_POST['irigasi_baik'];
				$irigasi_nonsawah=$_POST['irigasi_nonsawah'];
				/*Panjang Jalan yg memiliki*/
				$jln_miliki=$_POST['jln_miliki'];
				$miliki_trotoar=$_POST['miliki_trotoar'];
				$miliki_drainase=$_POST['miliki_drainase'];
				$miliki_sempadan=$_POST['miliki_sempadan'];
				$miliki_rmhliar=$_POST['miliki_rmhliar'];
				/*Sempadan Sungai*/
				$sempadan_sungai=$_POST['sempadan_sungai'];
				$pj_sempadan=$_POST['pj_sempadan'];
				$pakai_sempadan=$_POST['pakai_sempadan'];
				/*Drainase*/
				$drainase=$_POST['drainase'];
				$drainase_tersumbat=$_POST['drainase_tersumbat'];
				$drainase_sungai=$_POST['drainase_sungai'];
				$drainase_sistem=$_POST['drainase_sistem'];
				/*Turap*/
				$turap=$_POST['turap'];
				$lokasi_turap=$_POST['lokasi_turap'];
				$rawan_longsor=$_POST['rawan_longsor'];
				$mukim_tertata=$_POST['mukim_tertata'];
				/*Sumber Air Minum*/
				$sumber_air=$_POST['sumber_air'];
				$air_hujan=$_POST['air_hujan'];
				$mata_air=$_POST['mata_air'];
				$pam_kemasan=$_POST['pam_kemasan'];
				$pompa_air=$_POST['pompa_air'];
				$air_sumur=$_POST['air_sumur'];
				$sungai_danau=$_POST['sungai_danau'];
				$air_lainnya=$_POST['air_lainnya'];
				/*Mutu Air*/
				$mutu_air=$_POST['mutu_air'];
				$air_mukim=$_POST['air_mukim'];
				$mukim_sma=$_POST['mukim_sma'];
				$mutu_sma=$_POST['mutu_sma'];
				$air_industri=$_POST['air_industri'];
				$industri_sma=$_POST['industri_sma'];
				$ind_pantau=$_POST['ind_pantau'];
				/*Daya Tampung Makam*/
				$tampung_makam=$_POST['tampung_makam'];
				$makam_umum=$_POST['makam_umum'];
				$makam_bknumum=$_POST['makam_bknumum'];
				$makam_khusus=$_POST['makam_khusus'];
				$makam_pahlawan=$_POST['makam_pahlawan'];

				$user=Yii::app()->user->username;
				$gabung1 = array($jln_kelas,$jln_nasional,$jln_propinsi,$jln_kota,$jln_lokal,$jln_tol,$jln_tolruas,$jln_tolperator);
				$gabung2 = array($kondisi_jln,$jln_aspal,$jln_batu,$jln_hotmix,$jln_beton,$jln_kerikil,$jln_tanah);
				$gabung3 = array($jln_kondisi,$jln_baik,$jln_ringan,$jln_berat);
				$gabung4 = array($jln_penghub,$hub_kotamukim,$jln_setapak);
				$gabung5 = array($jembatan,$pj_jembatan,$jml_jembatan);
				$gabung6 = array($jln_fungsi,$jln_arteri,$jln_kolektor,$jln_lokal,$jln_lingkungan);
				$gabung7 = array($tmpt_makam,$ls_umum,$ls_bknumum,$ls_khsus,$ls_pahlawan);
				$gabung8 = array($irigasi_air,$irigasi_nontek,$irigasi_teknis,$teknis_primer,$teknis_sekunder,$teknis_tersier,$ls_irigasi,$irigasi_baik,$irigasi_nonsawah);
				$gabung9 = array($jln_miliki,$miliki_trotoar,$miliki_drainase,$miliki_sempadan,$miliki_rmhliar);
				$gabung10 = array($sempadan_sungai,$pj_sempadan,$pakai_sempadan);
				$gabung11 = array($drainase,$drainase_tersumbat,$drainase_sungai,$drainase_sistem);
				$gabung12 = array($turap,$lokasi_turap,$rawan_longsor,$mukim_tertata);
				$gabung13 = array($sumber_air,$air_hujan,$mata_air,$pam_kemasan,$pompa_air,$air_sumur,$sungai_danau,$air_lainnya);
				$gabung14 = array($mutu_air,$air_mukim,$mukim_sma,$mutu_sma,$air_industri,$industri_sma,$ind_pantau);
				$gabung15 = array($tampung_makam,$makam_umum,$makam_bknumum,$makam_khusus,$makam_pahlawan);

				$isiin1 = implode("#", $gabung1);
				$isiin2 = implode("#", $gabung2);
				$isiin3 = implode("#", $gabung3);
				$isiin4 = implode("#", $gabung4);
				$isiin5 = implode("#", $gabung5);
				$isiin6 = implode("#", $gabung6);
				$isiin7 = implode("#", $gabung7);
				$isiin8 = implode("#", $gabung8);
				$isiin9 = implode("#", $gabung9);
				$isiin10 = implode("#", $gabung10);
				$isiin11 = implode("#", $gabung11);
				$isiin12 = implode("#", $gabung12);
				$isiin13 = implode("#", $gabung13);
				$isiin14 = implode("#", $gabung14);
				$isiin15 = implode("#", $gabung15);

				$query1 = "INSERT INTO log VALUES(NULL, 'infra_pjjln', '$user', '$tahunini', '$isiin1', '$waktuisi')";
				$query2 = "INSERT INTO log VALUES(NULL, 'infra_kondisijln', '$user', '$tahunini', '$isiin2', '$waktuisi')";
				$query3 = "INSERT INTO log VALUES(NULL, 'infra_pjkondisi', '$user', '$tahunini', '$isiin3', '$waktuisi')";
				$query4 = "INSERT INTO log VALUES(NULL, 'infra_penghubung', '$user', '$tahunini', '$isiin4', '$waktuisi')";
				$query5 = "INSERT INTO log VALUES(NULL, 'infra_jembatan', '$user', '$tahunini', '$isiin5', '$waktuisi')";
				$query6 = "INSERT INTO log VALUES(NULL, 'infra_pjfungsi', '$user', '$tahunini', '$isiin6', '$waktuisi')";
				$query7 = "INSERT INTO log VALUES(NULL, 'infra_pemakaman', '$user', '$tahunini', '$isiin7', '$waktuisi')";
				$query8 = "INSERT INTO log VALUES(NULL, 'infra_pengairan', '$user', '$tahunini', '$isiin8', '$waktuisi')";
				$query9 = "INSERT INTO log VALUES(NULL, 'infra_pjmilik', '$user', '$tahunini', '$isiin9', '$waktuisi')";
				$query10 = "INSERT INTO log VALUES(NULL, 'infra_sempadan', '$user', '$tahunini', '$isiin10', '$waktuisi')";
				$query11 = "INSERT INTO log VALUES(NULL, 'infra_drainase', '$user', '$tahunini', '$isiin11', '$waktuisi')";
				$query12 = "INSERT INTO log VALUES(NULL, 'infra_turap', '$user', '$tahunini', '$isiin12', '$waktuisi')";
				$query13 = "INSERT INTO log VALUES(NULL, 'infra_sam', '$user', '$tahunini', '$isiin13', '$waktuisi')";
				$query14 = "INSERT INTO log VALUES(NULL, 'infra_mutuair', '$user', '$tahunini', '$isiin14', '$waktuisi')";
				$query15 = "INSERT INTO log VALUES(NULL, 'infra_dayamakam', '$user', '$tahunini', '$isiin15', '$waktuisi')";

				$conn=Yii::app()->db;

				$command1=$conn->createCommand($query1);
				$command2=$conn->createCommand($query2);
				$command3=$conn->createCommand($query3);
				$command4=$conn->createCommand($query4);
				$command5=$conn->createCommand($query5);
				$command6=$conn->createCommand($query6);
				$command7=$conn->createCommand($query7);
				$command8=$conn->createCommand($query8);
				$command9=$conn->createCommand($query9);
				$command10=$conn->createCommand($query10);
				$command11=$conn->createCommand($query11);
				$command12=$conn->createCommand($query12);
				$command13=$conn->createCommand($query13);
				$command14=$conn->createCommand($query14);
				$command15=$conn->createCommand($query15);

				$command1->execute();
				$command2->execute();
				$command3->execute();
				$command4->execute();
				$command5->execute();
				$command6->execute();
				$command7->execute();
				$command8->execute();
				$command9->execute();
				$command10->execute();
				$command11->execute();
				$command12->execute();
				$command13->execute();
				$command14->execute();
				$command15->execute();
				$this->redirect(array(
					'infrastruktur'));
			}
		}

		public function actionSimpanTi(){
			if($_POST){
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				/*Pariwisata*/
				$parwis=$_POST['parwis'];
				$jml_parwis=$_POST['jml_parwis'];
				$alam_parwis=$_POST['alam_parwis'];
				$buatan_parwis=$_POST['buatan_parwis'];
				$jml_hotel=$_POST['jml_hotel'];
				$bintang_lima=$_POST['bintang_lima'];
				$bintang_empat=$_POST['bintang_empat'];
				$bintang_tiga=$_POST['bintang_tiga'];
				$bintang_dua=$_POST['bintang_dua'];
				$bintang_satu=$_POST['bintang_satu'];
				$non_bintang=$_POST['non_bintang'];
				$jns_parwis=$_POST['jns_parwis'];
				$wisata_marina=$_POST['wisata_marina'];
				$tot_marina=$_POST['tot_marina'];
				$dom_marina=$_POST['dom_marina'];
				$man_marina=$_POST['man_marina'];
				$wisata_tirta=$_POST['wisata_tirta'];
				$tot_tirta=$_POST['tot_tirta'];
				$dom_tirta=$_POST['dom_tirta'];
				$man_tirta=$_POST['man_tirta'];
				$wisata_sejarah=$_POST['wisata_sejarah'];
				$tot_sejarah=$_POST['tot_sejarah'];
				$dom_sejarah=$_POST['dom_sejarah'];
				$man_sejarah=$_POST['man_sejarah'];
				$suaka_alam=$_POST['suaka_alam'];
				$tot_suakal=$_POST['tot_suakal'];
				$dom_suakal=$_POST['dom_suakal'];
				$man_suakal=$_POST['man_suakal'];
				$capai_wisata=$_POST['capai_wisata'];
				$jln_wisata=$_POST['jln_wisata'];
				$jml_wisatawan=$_POST['jml_wisatawan'];
				$wisatawan_man=$_POST['wisatawan_man'];
				$wisatawan_dom=$_POST['wisatawan_dom'];
				$wisatawan_capai=$_POST['wisatawan_capai'];
				$jml_hunian=$_POST['jml_hunian'];
				$jml_penginapan=$_POST['jml_penginapan'];
				$rata_penginapan=$_POST['rata_penginapan'];
				$penginapan_isi=$_POST['penginapan_isi'];
				$jumting_hunian=$_POST['jumting_hunian'];
				$hiburan_rekreasi=$_POST['hiburan_rekreasi'];
				$gd_bioskop=$_POST['gd_bioskop'];
				$hiburan_lainnya=$_POST['hiburan_lainnya'];
				/*POS*/
				$pos_telkom=$_POST['pos_telkom'];
				$kantor_pos=$_POST['kantor_pos'];
				$jar_isp=$_POST['jar_isp'];
				$telekomunikasi=$_POST['telekomunikasi'];
				$kaps_sentral=$_POST['kaps_sentral'];
				$kaps_pasang=$_POST['kaps_pasang'];
				$kaps_pakai=$_POST['kaps_pakai'];
				$pelanggan_telkom=$_POST['pelanggan_telkom'];
				$telp_koin=$_POST['telp_koin'];
				$wartel=$_POST['wartel'];
				$warnet=$_POST['warnet'];
				$rt_langganan=$_POST['rt_langganan'];
				$pend_hptelp=$_POST['pend_hptelp'];
				$jar_hp=$_POST['jar_hp'];
				$jar_telepon=$_POST['jar_telepon'];
				$stasiun_radio=$_POST['stasiun_radio'];
				$stasiun_relay=$_POST['stasiun_relay'];
				/*Surat Kabar*/
				$srt_kabar=$_POST['srt_kabar'];
				$koran_lokal=$_POST['koran_lokal'];
				$koran_inter=$_POST['koran_inter'];
				/*Media Elektronik*/
				$siar_medel=$_POST['siar_medel'];
				$siar_tv=$_POST['siar_tv'];
				$tv_lokal=$_POST['tv_lokal'];
				$tv_inter=$_POST['tv_inter'];
				$siar_radio=$_POST['siar_radio'];
				$radio_lokal=$_POST['radio_lokal'];
				$radio_inter=$_POST['radio_inter'];
				/*SI Pemda*/
				$jml_sip=$_POST['jml_sip'];
				$simpeda=$_POST['simpeda'];
				$web_daerah=$_POST['web_daerah'];

				$user=Yii::app()->user->username;
				$gabung1 = array($parwis,$jml_parwis,$alam_parwis,$buatan_parwis,$jml_hotel,$bintang_lima,$bintang_empat,$bintang_tiga,$bintang_dua,$bintang_satu,$non_bintang,$jns_parwis,$wisata_marina,$tot_marina,$dom_marina,$man_marina,$wisata_tirta,$tot_tirta,$dom_tirta,$man_tirta,$wisata_sejarah,$tot_sejarah,$dom_sejarah,$man_sejarah,$suaka_alam,$tot_suakal,$dom_suakal,$man_suakal,$capai_wisata,$jln_wisata,$jml_wisatawan,$wisatawan_man,$wisatawan_dom,$wisatawan_capai,$jml_hunian,$jml_penginapan,$rata_penginapan,$penginapan_isi,$jumting_hunian,$hiburan_rekreasi,$gd_bioskop,$hiburan_lainnya);
				$gabung2 = array($pos_telkom,$kantor_pos,$jar_isp,$telekomunikasi,$kaps_sentral,$kaps_pasang,$kaps_pakai,$pelanggan_telkom,$telp_koin,$wartel,$warnet,$rt_langganan,$pend_hptelp,$jar_hp,$jar_telepon,$stasiun_radio,$stasiun_relay);
				$gabung3 = array($srt_kabar,$koran_lokal,$koran_inter);
				$gabung4 = array($siar_medel,$siar_tv,$tv_lokal,$tv_inter,$siar_radio,$radio_lokal,$radio_inter);
				$gabung5 = array($jml_sip,$simpeda,$web_daerah);

				$isiin1 = implode("#", $gabung1);
				$isiin2 = implode("#", $gabung2);
				$isiin3 = implode("#", $gabung3);
				$isiin4 = implode("#", $gabung4);
				$isiin5 = implode("#", $gabung5);

				$query1 = "INSERT INTO log VALUES(NULL, 'infra_pariwisata', '$user', '$tahunini', '$isiin1', '$waktuisi')";
				$query2 = "INSERT INTO log VALUES(NULL, 'infra_telekomunikasi', '$user', '$tahunini', '$isiin2', '$waktuisi')";
				$query3 = "INSERT INTO log VALUES(NULL, 'infra_srtkabar', '$user', '$tahunini', '$isiin3', '$waktuisi')";
				$query4 = "INSERT INTO log VALUES(NULL, 'infra_penyiaran', '$user', '$tahunini', '$isiin4', '$waktuisi')";
				$query5 = "INSERT INTO log VALUES(NULL, 'infra_sip', '$user', '$tahunini', '$isiin5', '$waktuisi')";

				$conn=Yii::app()->db;

				$command1=$conn->createCommand($query1);
				$command2=$conn->createCommand($query2);
				$command3=$conn->createCommand($query3);
				$command4=$conn->createCommand($query4);
				$command5=$conn->createCommand($query5);

				$command1->execute();
				$command2->execute();
				$command3->execute();
				$command4->execute();
				$command5->execute();
				$this->redirect(array(
					'infrastruktur'));
			}
		}

		public function actionSimpanHub(){
			if($_POST){

				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				/*Perhubungan*/
				$perhubungan=$_POST['perhubungan'];
				$trans_darat=$_POST['trans_darat'];
				$angk_darat=$_POST['angk_darat'];
				$angkut_angkum=$_POST['angkut_angkum'];
				$jml_angkdar=$_POST['jml_angkdar'];
				$term_penumpang=$_POST['term_penumpang'];
				$term_a=$_POST['term_a'];
				$term_b=$_POST['term_b'];
				$term_c=$_POST['term_c'];
				$term_lalui=$_POST['term_lalui'];
				$barang_lalui=$_POST['barang_lalui'];
				$term_darat=$_POST['term_darat'];
				$term_barang=$_POST['term_barang'];
				$term_orang=$_POST['term_orang'];
				$angkut_sebrang=$_POST['angkut_sebrang'];
				$dermaga=$_POST['dermaga'];
				$sebrang_komersil=$_POST['sebrang_komersil'];
				$sebrang_perintis=$_POST['sebrang_perintis'];
				$kapal_ferry=$_POST['kapal_ferry'];
				$sebrang_rodaemp=$_POST['sebrang_rodaemp'];
				$dermaga_orang=$_POST['dermaga_orang'];
				$dermaga_barang=$_POST['dermaga_barang'];
				$jml_timbang=$_POST['jml_timbang'];
				$angkutan_kai=$_POST['angkutan_kai'];
				$jml_stasiun=$_POST['jml_stasiun'];
				$pasang_rambu=$_POST['pasang_rambu'];
				$harus_rambu=$_POST['harus_rambu'];
				$trans_laut=$_POST['trans_laut'];
				$jml_pelabuhan=$_POST['jml_pelabuhan'];
				$usaha_pelabuhan=$_POST['usaha_pelabuhan'];
				$peti_kemas=$_POST['peti_kemas'];
				$semi_kemas=$_POST['semi_kemas'];
				$non_kemas=$_POST['non_kemas'];
				$tidak_pelabuhan=$_POST['tidak_pelabuhan'];
				$darat_ikan=$_POST['darat_ikan'];
				$labuh_kapal=$_POST['labuh_kapal'];
				$labuh_penumpang=$_POST['labuh_penumpang'];
				$pelni=$_POST['pelni'];
				$jml_labuh1=$_POST['jml_labuh1'];
				$kaps_labuh=$_POST['kaps_labuh'];
				$labuh_swasta=$_POST['labuh_swasta'];
				$jml_labuh2=$_POST['jml_labuh2'];
				$trans_udara=$_POST['trans_udara'];
				$jml_bandara=$_POST['jml_bandara'];
				$bandara_inter=$_POST['bandara_inter'];
				$bandara_lokal=$_POST['bandara_lokal'];
				$bandara_orang=$_POST['bandara_orang'];
				$bandara_barang=$_POST['bandara_barang'];
				$jml_maskapai=$_POST['jml_maskapai'];
				$jml_tumpang=$_POST['jml_tumpang'];
				$tumpang_bis=$_POST['tumpang_bis'];
				$tumpang_kereta=$_POST['tumpang_kereta'];
				$tumpang_kapal=$_POST['tumpang_kapal'];
				$tumpang_pesawat=$_POST['tumpang_pesawat'];
				/*Angkutan Umum*/
				$angkum=$_POST['angkum'];
				$jml_angkum=$_POST['jml_angkum'];
				$mobil_angkum=$_POST['mobil_angkum'];
				$bus_angkum=$_POST['bus_angkum'];
				$barang_angkum=$_POST['barang_angkum'];
				$gandeng_angkum=$_POST['gandeng_angkum'];
				$tempel_angkum=$_POST['tempel_angkum'];
				$jml_trayek=$_POST['jml_trayek'];
				$trayek_akap=$_POST['trayek_akap'];
				$trayek_kota=$_POST['trayek_kota'];
				$trayek_desa=$_POST['trayek_desa'];
				$jml_ujikir=$_POST['jml_ujikir'];
				$mobil_ujikir=$_POST['mobil_ujikir'];
				$bus_ujikir=$_POST['bus_ujikir'];
				$barang_ujikir=$_POST['barang_ujikir'];
				$gandeng_ujikir=$_POST['gandeng_ujikir'];
				$tempel_ujikir=$_POST['tempel_ujikir'];
				$lama_ujikir=$_POST['lama_ujikir'];
				$mobil_lamakir=$_POST['mobil_lamakir'];
				$bus_lamakir=$_POST['bus_lamakir'];
				$barang_lamakir=$_POST['barang_lamakir'];
				$gandeng_lamakir=$_POST['gandeng_lamakir'];
				$tempel_lamakir=$_POST['tempel_lamakir'];
				$biaya_ujikir=$_POST['biaya_ujikir'];
				$mobil_biayakir=$_POST['mobil_biayakir'];
				$bus_biayakir=$_POST['bus_biayakir'];
				$barang_biayakir=$_POST['barang_biayakir'];
				$gandeng_biayakir=$_POST['gandeng_biayakir'];
				$tempel_biayakir=$_POST['tempel_biayakir'];
				/*Pelayanan Transportasi*/
				$peltran=$_POST['peltran'];
				$dukung_kslmtn=$_POST['dukung_kslmtn'];
				$perkap_jln=$_POST['perkap_jln'];
				$trotoar=$_POST['trotoar'];
				$jalur_sepeda=$_POST['jalur_sepeda'];
				$penyebrangan=$_POST['penyebrangan'];
				$halte=$_POST['halte'];
				$fas_khusus=$_POST['fas_khusus'];
				$jaring_rambu=$_POST['jaring_rambu'];
				$jaring_akngkot=$_POST['jaring_akngkot'];
				$man_rekayasa=$_POST['man_rekayasa'];
				$pel_angkot=$_POST['pel_angkot'];
				$jln_terang=$_POST['jln_terang'];
				/*Jumlah Kendaraan Bermotor*/
				$jml_bermotor=$_POST['jml_bermotor'];
				$jml_mobil=$_POST['jml_mobil'];
				$jml_bus=$_POST['jml_bus'];
				$jml_truk=$_POST['jml_truk'];
				$jml_motor=$_POST['jml_motor'];

				$user=Yii::app()->user->username;
				$gabung1 = array($perhubungan,$trans_darat,$angk_darat,$angkut_angkum,$jml_angkdar,$term_penumpang,$term_a,$term_b,$term_c,$term_lalui,$barang_lalui,$term_darat,$term_barang,$term_orang,$angkut_sebrang,$dermaga,$sebrang_komersil,$sebrang_perintis,$kapal_ferry,$sebrang_rodaemp,$dermaga_orang,$dermaga_barang,$jml_timbang,$angkutan_kai,$jml_stasiun,$pasang_rambu,$harus_rambu,$trans_laut,$jml_pelabuhan,$usaha_pelabuhan,$peti_kemas,$semi_kemas,$non_kemas,$tidak_pelabuhan,$darat_ikan,$labuh_kapal,$labuh_penumpang,$pelni,$jml_labuh1,$kaps_labuh,$labuh_swasta,$jml_labuh2,$trans_udara,$jml_bandara,$bandara_inter,$bandara_lokal,$bandara_orang,$bandara_barang,$jml_maskapai,$jml_tumpang,$tumpang_bis,$tumpang_kereta,$tumpang_kapal,$tumpang_pesawat);
				$gabung2 = array($angkum,$jml_angkum,$mobil_angkum,$bus_angkum,$barang_angkum,$gandeng_angkum,$tempel_angkum,$jml_trayek,$trayek_akap,$trayek_kota,$trayek_desa,$jml_ujikir,$mobil_ujikir,$bus_ujikir,$barang_ujikir,$gandeng_ujikir,$tempel_ujikir,$lama_ujikir,$mobil_lamakir,$bus_lamakir,$barang_lamakir,$gandeng_lamakir,$tempel_lamakir,$biaya_ujikir,$mobil_biayakir,$bus_biayakir,$barang_biayakir,$gandeng_biayakir,$tempel_biayakir);
				$gabung3 = array($peltran,$dukung_kslmtn,$perkap_jln,$trotoar,$jalur_sepeda,$penyebrangan,$halte,$fas_khusus,$jaring_rambu,$jaring_akngkot,$man_rekayasa,$pel_angkot,$jln_terang);
				$gabung4 = array($jml_bermotor,$jml_mobil,$jml_bus,$jml_truk,$jml_motor);

				$isiin1 = implode("#", $gabung1);
				$isiin2 = implode("#", $gabung2);
				$isiin3 = implode("#", $gabung3);
				$isiin4 = implode("#", $gabung4);

				$query1 = "INSERT INTO log VALUES(NULL, 'infra_perhubungan', '$user', '$tahunini', '$isiin1', '$waktuisi')";
				$query2 = "INSERT INTO log VALUES(NULL, 'infra_angkum', '$user', '$tahunini', '$isiin2', '$waktuisi')";
				$query3 = "INSERT INTO log VALUES(NULL, 'infra_transportasi', '$user', '$tahunini', '$isiin3', '$waktuisi')";
				$query4 = "INSERT INTO log VALUES(NULL, 'infra_bermotor', '$user', '$tahunini', '$isiin4', '$waktuisi')";

				$conn=Yii::app()->db;

				$command1=$conn->createCommand($query1);
				$command2=$conn->createCommand($query2);
				$command3=$conn->createCommand($query3);
				$command4=$conn->createCommand($query4);

				$command1->execute();
				$command2->execute();
				$command3->execute();
				$command4->execute();
				$this->redirect(array(
					'infrastruktur'));
			}
		}

		public function actionSimpanIndus()
		{
			if($_POST){
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				/*Industri*/
				$industri=$_POST['industri'];				
				$industri_kecil=$_POST['industri_kecil'];
				$indcil_unker=$_POST['indcil_unker'];
				$indcil_tenker=$_POST['indcil_tenker'];
				$indcil_niprod=$_POST['indcil_niprod'];
				$indcil_kerajinan=$_POST['indcil_kerajinan'];
				$kerajinan_kulit=$_POST['kerajinan_kulit'];
				$kerajinan_kayu=$_POST['kerajinan_kayu'];
				$kerajinan_logam=$_POST['kerajinan_logam'];
				$kerajinan_kramik=$_POST['kerajinan_kramik'];
				$kerajinan_tenun=$_POST['kerajinan_tenun'];
				$kerajinan_mamin=$_POST['kerajinan_mamin'];
				$kerajinan_rambut=$_POST['kerajinan_rambut'];
				$kerajinan_tekstil=$_POST['kerajinan_tekstil'];
				$kerajinan_pakaian=$_POST['kerajinan_pakaian'];
				$kerajinan_kertas=$_POST['kerajinan_kertas'];
				$kerajinan_tercetak=$_POST['kerajinan_tercetak'];
				$kerajinan_bagimigas=$_POST['kerajinan_bagimigas'];
				$kerajinan_kimia=$_POST['kerajinan_kimia'];
				$kerajinan_karet=$_POST['kerajinan_karet'];
				$kerajinan_daul=$_POST['kerajinan_daul'];
				$kerajinan_rokok=$_POST['kerajinan_rokok'];
				$industri_mikro=$_POST['industri_mikro'];
				$indmik_unker=$_POST['indmik_unker'];
				$indmik_tenker=$_POST['indmik_tenker'];
				$indmik_niprod=$_POST['indmik_niprod'];
				$jml_indmik=$_POST['jml_indmik'];
				$industri_menengah=$_POST['industri_menengah'];
				$indmen_unker=$_POST['indmen_unker'];
				$indmen_tenker=$_POST['indmen_tenker'];
				$indmen_niprod=$_POST['indmen_niprod'];
				$jml_indmen=$_POST['jml_indmen'];
				$industri_besar=$_POST['industri_besar'];
				$indbes_unker=$_POST['indbes_unker'];
				$indbes_tenker=$_POST['indbes_tenker'];
				$indbes_niprod=$_POST['indbes_niprod'];
				$industri_rt=$_POST['industri_rt'];
				$jml_unsah=$_POST['jml_unsah'];
				$jml_tenker=$_POST['jml_tenker'];
				$wajib_amdal=$_POST['wajib_amdal'];
				$amdal_awas=$_POST['amdal_awas'];
				/*Perdagangan*/
				$perdagangan=$_POST['perdagangan'];
				$sarana_dagang=$_POST['sarana_dagang'];
				$pasar_tadisional=$_POST['pasar_tadisional'];
				$pasar_toserba=$_POST['pasar_toserba'];
				$hipermarket=$_POST['hipermarket'];
				$pasar_grosir=$_POST['pasar_grosir'];
				$mal_plaza=$_POST['mal_plaza'];
				$towarki=$_POST['towarki'];
				$resto_rm=$_POST['resto_rm'];
				$restaurant=$_POST['restaurant'];
				$jj_resto=$_POST['jj_resto'];
				$jj_tinggi=$_POST['jj_tinggi'];
				$jj_tengah=$_POST['jj_tengah'];
				$jj_rendah=$_POST['jj_rendah'];
				$jk_resto=$_POST['jk_resto'];
				$jk_a=$_POST['jk_a'];
				$jk_b=$_POST['jk_b'];
				$jk_c=$_POST['jk_c'];
				$jk_d=$_POST['jk_d'];
				$rumah_makan=$_POST['rumah_makan'];
				$jj_rm=$_POST['jj_rm'];
				$jjrm_tinggi=$_POST['jjrm_tinggi'];
				$jjrm_tengah=$_POST['jjrm_tengah'];
				$jjrm_rendah=$_POST['jjrm_rendah'];
				$jk_rm=$_POST['jk_rm'];
				$jkrm_a=$_POST['jkrm_a'];
				$jkrm_b=$_POST['jkrm_b'];
				$jkrm_c=$_POST['jkrm_c'];
				$jkrm_d=$_POST['jkrm_d'];
				$jns_bangpasar=$_POST['jns_bangpasar'];
				$bangun_persemi=$_POST['bangun_persemi'];
				$no_persemi=$_POST['no_persemi'];
				$pusat_dagang=$_POST['pusat_dagang'];
				$potong_hewan=$_POST['potong_hewan'];
				/*Usaha Nasional*/
				$kembang_unas=$_POST['kembang_unas'];
				$koperasi=$_POST['koperasi'];
				$koperasi_aktif=$_POST['koperasi_aktif'];
				$kop_pasif=$_POST['kop_pasif'];
				$induk_kop=$_POST['induk_kop'];
				$kop_primer=$_POST['kop_primer'];
				$jml_kud=$_POST['jml_kud'];
				$jml_nokud=$_POST['jml_nokud'];
				$jml_pengusaha=$_POST['jml_pengusaha'];
				$pengusaha_kecil=$_POST['pengusaha_kecil'];
				$pengusaha_menengah=$_POST['pengusaha_menengah'];
				$pengusaha_besar=$_POST['pengusaha_besar'];
				$nilai_ekspor=$_POST['nilai_ekspor'];
				$nilai_impor=$_POST['nilai_impor'];
				/*EksIm Non Migas*/
				$eksin_nomigas=$_POST['eksin_nomigas'];
				$eks_nomigas=$_POST['eks_nomigas'];
				$im_nomigas=$_POST['im_nomigas'];
				$jml_k3=$_POST['jml_k3'];
				$jml_informal=$_POST['jml_informal'];
				/*IO Industri*/
				$io_industri=$_POST['io_industri'];
				$in_bbm=$_POST['in_bbm'];
				$tot_inimpor=$_POST['tot_inimpor'];
				$tot_indomestik=$_POST['tot_indomestik'];
				$tot_inlokal=$_POST['tot_inlokal'];
				$tot_out=$_POST['tot_out'];
				$nilai_tambah=$_POST['nilai_tambah'];
				$tot_tambah=$_POST['tot_tambah'];
				$tot_tk=$_POST['tot_tk'];
				$tot_subsidi=$_POST['tot_subsidi'];
				$tot_pjklangsung=$_POST['tot_pjklangsung'];
				$tambah_prodsektor=$_POST['tambah_prodsektor'];
				$prod_pertanian=$_POST['prod_pertanian'];
				$prod_galitam=$_POST['prod_galitam'];
				$prod_indkelola=$_POST['prod_indkelola'];
				$prod_ligasber=$_POST['prod_ligasber'];
				$prod_konstruksi=$_POST['prod_konstruksi'];
				$prod_ganghore=$_POST['prod_ganghore'];
				$prod_petan=$_POST['prod_petan'];
				$prod_jasa=$_POST['prod_jasa'];
				$tot_pa=$_POST['tot_pa'];
				/*Lembaga Perijinan*/
				$lembaga_ijin=$_POST['lembaga_ijin'];
				$ptsp=$_POST['ptsp'];
				$ptsp_spipise=$_POST['ptsp_spipise'];
				$urus_ijin=$_POST['urus_ijin'];
				$lama_ijin=$_POST['lama_ijin'];
				$lama_siup=$_POST['lama_siup'];
				$lama_tdp=$_POST['lama_tdp'];
				$lama_iui=$_POST['lama_iui'];
				$lama_tdi=$_POST['lama_tdi'];
				$lama_imb=$_POST['lama_imb'];
				$lama_ho=$_POST['lama_ho'];
				$dokumen_ijin=$_POST['dokumen_ijin'];
				$dok_siup=$_POST['dok_siup'];
				$dok_tdp=$_POST['dok_tdp'];
				$dok_iui=$_POST['dok_iui'];
				$dok_tdi=$_POST['dok_tdi'];
				$dok_imb=$_POST['dok_imb'];
				$dok_ho=$_POST['dok_ho'];
				$biaya_ijin=$_POST['biaya_ijin'];
				$biaya_siup=$_POST['biaya_siup'];
				$biaya_tdp=$_POST['biaya_tdp'];
				$biaya_iui=$_POST['biaya_iui'];
				$biaya_tdi=$_POST['biaya_tdi'];
				$biaya_imb=$_POST['biaya_imb'];
				$biaya_ho=$_POST['biaya_ho'];
				$dagang_bina=$_POST['dagang_bina'];
				$kel_rajin=$_POST['kel_rajin'];
				$rajin_bantu=$_POST['rajin_bantu'];
				$interima_petani=$_POST['interima_petani'];
				$inbyr_petani=$_POST['inbyr_petani'];
				/*Industri Besar*/
				$ind_besar=$_POST['ind_besar'];
				$makan_minum=$_POST['makan_minum'];
				$tembakau=$_POST['tembakau'];
				$tekstil=$_POST['tekstil'];
				$pakaian_jadi=$_POST['pakaian_jadi'];
				$kulit_barang=$_POST['kulit_barang'];
				$kayu_anyaman=$_POST['kayu_anyaman'];
				$kertas_barang=$_POST['kertas_barang'];
				$terbit_cetak=$_POST['terbit_cetak'];
				$batu_nuklir=$_POST['batu_nuklir'];
				$kimia_barang=$_POST['kimia_barang'];
				$karet_plastik=$_POST['karet_plastik'];
				$bukan_logam=$_POST['bukan_logam'];
				$logam_dasar=$_POST['logam_dasar'];
				$logam_alat=$_POST['logam_alat'];
				$mesin_lengkap=$_POST['mesin_lengkap'];
				$kantor_akuntan=$_POST['kantor_akuntan'];
				$mesinlistrik_lenkap=$_POST['mesinlistrik_lenkap'];
				$radio_tv=$_POST['radio_tv'];
				$dokter_optik=$_POST['dokter_optik'];
				$kendaraan_bermotor=$_POST['kendaraan_bermotor'];
				$alat_angkut=$_POST['alat_angkut'];
				$furnitur=$_POST['furnitur'];
				$daur_ulang=$_POST['daur_ulang'];

				$user=Yii::app()->user->username;
				$gabung1 = array($kerajinan_kramik,$kerajinan_tenun,$kerajinan_mamin,$kerajinan_rambut,$kerajinan_tekstil,$kerajinan_pakaian,$kerajinan_kertas,$kerajinan_tercetak,$kerajinan_bagimigas,$kerajinan_kimia,$kerajinan_karet,$kerajinan_daul,$kerajinan_rokok,$industri_mikro,$indmik_unker,$indmik_tenker,$indmik_niprod,$jml_indmik,$industri_menengah,$indmen_unker,$indmen_tenker,$indmen_niprod,$jml_indmen,$industri_besar,$indbes_unker,$indbes_tenker,$indbes_niprod,$industri_rt,$jml_unsah,$jml_tenker,$wajib_amdal,$amdal_awas);
				$gabung2 = array($perdagangan,$sarana_dagang,$pasar_tadisional,$pasar_toserba,$hipermarket,$pasar_grosir,$mal_plaza,$towarki,$resto_rm,$restaurant,$jj_resto,$jj_tinggi,$jj_tengah,$jj_rendah,$jk_resto,$jk_a,$jk_b,$jk_c,$jk_d,$rumah_makan,$jj_rm,$jjrm_tinggi,$jjrm_tengah,$jjrm_rendah,$jk_rm,$jkrm_a,$jkrm_b,$jkrm_c,$jkrm_d,$jns_bangpasar,$bangun_persemi,$no_persemi,$pusat_dagang,$potong_hewan);
				$gabung3 = array($kembang_unas,$koperasi,$koperasi_aktif,$kop_pasif,$induk_kop,$kop_primer,$jml_kud,$jml_nokud,$jml_pengusaha,$pengusaha_kecil,$pengusaha_menengah,$pengusaha_besar,$nilai_ekspor,$nilai_impor);
				$gabung4 = array($eksin_nomigas,$eks_nomigas,$im_nomigas,$jml_k3,$jml_informal);
				$gabung5 = array($io_industri,$in_bbm,$tot_inimpor,$tot_indomestik,$tot_inlokal,$tot_out,$nilai_tambah,$tot_tambah,$tot_tk,$tot_subsidi,$tot_pjklangsung,$tambah_prodsektor,$prod_pertanian,$prod_galitam,$prod_indkelola,$prod_ligasber,$prod_konstruksi,$prod_ganghore,$prod_petan,$prod_jasa,$tot_pa);
				$gabung6 = array($lembaga_ijin,$ptsp,$ptsp_spipise,$urus_ijin,$lama_ijin,$lama_siup,$lama_tdp,$lama_iui,$lama_tdi,$lama_imb,$lama_ho,$dokumen_ijin,$dok_siup,$dok_tdp,$dok_iui,$dok_tdi,$dok_imb,$dok_ho,$biaya_ijin,$biaya_siup,$biaya_tdp,$biaya_iui,$biaya_tdi,$biaya_imb,$biaya_ho,$dagang_bina,$kel_rajin,$rajin_bantu,$interima_petani,$inbyr_petani);
				$gabung7 = array($ind_besar,$makan_minum,$tembakau,$tekstil,$pakaian_jadi,$kulit_barang,$kayu_anyaman,$kertas_barang,$terbit_cetak,$batu_nuklir,$kimia_barang,$karet_plastik,$bukan_logam,$logam_dasar,$logam_alat,$mesin_lengkap,$kantor_akuntan,$mesinlistrik_lenkap,$radio_tv,$dokter_optik,$kendaraan_bermotor,$alat_angkut,$furnitur,$daur_ulang);
				
				$isiin1 = implode("#", $gabung1);
				$isiin2 = implode("#", $gabung2);
				$isiin3 = implode("#", $gabung3);
				$isiin4 = implode("#", $gabung4);
				$isiin5 = implode("#", $gabung5);
				$isiin6 = implode("#", $gabung6);
				$isiin7 = implode("#", $gabung7);
				
				$query1 = "INSERT INTO log VALUES(NULL, 'eko_industri', '$user', '$tahunini', '$isiin1', '$waktuisi')";
				$query2 = "INSERT INTO log VALUES(NULL, 'eko_perdagangan', '$user', '$tahunini', '$isiin2', '$waktuisi')";
				$query3 = "INSERT INTO log VALUES(NULL, 'eko_usahanas', '$user', '$tahunini', '$isiin3', '$waktuisi')";
				$query4 = "INSERT INTO log VALUES(NULL, 'eko_einonmigas', '$user', '$tahunini', '$isiin4', '$waktuisi')";
				$query5 = "INSERT INTO log VALUES(NULL, 'eko_ioindustri', '$user', '$tahunini', '$isiin5', '$waktuisi')";
				$query6 = "INSERT INTO log VALUES(NULL, 'eko_perijinan', '$user', '$tahunini', '$isiin6', '$waktuisi')";
				$query7 = "INSERT INTO log VALUES(NULL, 'eko_indsubsektor', '$user', '$tahunini', '$isiin7', '$waktuisi')";

				$conn=Yii::app()->db;

				$command1=$conn->createCommand($query1);
				$command2=$conn->createCommand($query2);
				$command3=$conn->createCommand($query3);
				$command4=$conn->createCommand($query4);
				$command5=$conn->createCommand($query5);
				$command6=$conn->createCommand($query6);
				$command7=$conn->createCommand($query7);

				$command1->execute();$command2->execute();$command3->execute();$command4->execute();$command5->execute();$command6->execute();$command7->execute();
				$this->redirect(array(
					'ekonomi'));
			}
		}

		public function actionSimpanBumd(){
			if($_POST){
				$tahunini=date("YYYY");
				$waktuisi=date("Y-m-d");
				/*PMA*/
				$proyek_pma=$_POST['proyek_pma'];
				$realisasi_pma=$_POST['realisasi_pma'];
				$p3k_pma=$_POST['p3k_pma'];
				$tambang_pma=$_POST['tambang_pma'];
				$pengolahan_pma=$_POST['pengolahan_pma'];
				$ligasber_pma=$_POST['ligasber_pma'];
				$bangunan_pma=$_POST['bangunan_pma'];
				$dagang_pma=$_POST['dagang_pma'];
				$angkom_pma=$_POST['angkom_pma'];
				$estate_pma=$_POST['estate_pma'];
				$jasa_pma=$_POST['jasa_pma'];
				/*PMDN*/
				$proyek_pmdn=$_POST['proyek_pmdn'];
				$realisasi_pmdn=$_POST['realisasi_pmdn'];
				$p3k=$_POST['p3k'];
				$tambang_pmdn=$_POST['tambang_pmdn'];
				$ind_pengolahan=$_POST['ind_pengolahan'];
				$ligas_aber=$_POST['ligas_aber'];
				$realisasi_bangunan=$_POST['realisasi_bangunan'];
				$dagang_restohotel=$_POST['dagang_restohotel'];
				$angkut_komunikasi=$_POST['angkut_komunikasi'];
				$real_estate=$_POST['real_estate'];
				$jasa_jasa=$_POST['jasa_jasa'];
				$investasi_pmdn=$_POST['investasi_pmdn'];
				$inv_pusat=$_POST['inv_pusat'];
				$inv_pemda=$_POST['inv_pemda'];
				$inv_swasta=$_POST['inv_swasta'];
				/*BPR*/
				$bank_pr=$_POST['bank_pr'];
				$bpr_konvensional=$_POST['bpr_konvensional'];
				$bpr_syariah=$_POST['bpr_syariah'];
				/*Bank Umum*/
				$bank_umum=$_POST['bank_umum'];
				$bkumum_konvensional=$_POST['bkumum_konvensional'];
				$bkumum_syariah=$_POST['bkumum_syariah'];
				/*Asuransi Rugi*/
				$asuransi_rugi=$_POST['asuransi_rugi'];
				$asrugi_konvensional=$_POST['asrugi_konvensional'];
				$asrugi_syariah=$_POST['asrugi_syariah'];
				/*Asuransi Jiwa*/
				$asuransi_jiwa=$_POST['asuransi_jiwa'];
				$asjiwa_syariah=$_POST['asjiwa_syariah'];
				$asjiwa_konvensional=$_POST['asjiwa_konvensional'];
				$jml_pdam=$_POST['jml_pdam'];
				/*Investor Nasional*/
				$inv_nasional=$_POST['inv_nasional'];
				$pma=$_POST['pma'];
				$bumn_asing=$_POST['bumn_asing'];
				$swasta_asing=$_POST['swasta_asing'];
				$pmdn=$_POST['pmdn'];
				$pmdn_bumd=$_POST['pmdn_bumd'];
				$pmdn_bumn=$_POST['pmdn_bumn'];
				$pmdn_swata=$_POST['pmdn_swata'];
				$pmdn_campuran=$_POST['pmdn_campuran'];
				/*Jasa Keuangan*/
				$jasa_uang=$_POST['jasa_uang'];
				$lmbg_nbank=$_POST['lmbg_nbank'];
				$modal_ventura=$_POST['modal_ventura'];
				$uang_mikro=$_POST['uang_mikro'];
				$usaha_asuransi=$_POST['usaha_asuransi'];
				$cabang_asuransi=$_POST['cabang_asuransi'];
				$lmbg_bank=$_POST['lmbg_bank'];
				$bank_pemerintah=$_POST['bank_pemerintah'];
				$bank_swasta=$_POST['bank_swasta'];
				$bank_asing=$_POST['bank_asing'];
				$bank_pemda=$_POST['bank_pemda'];
				$bank_pemsing=$_POST['bank_pemsing'];
				$bank_campuran=$_POST['bank_campuran'];
				$jml_pemerintah=$_POST['jml_pemerintah'];
				$jml_swasta=$_POST['jml_swasta'];
				$jml_asing=$_POST['jml_asing'];
				$jml_pemda=$_POST['jml_pemda'];
				$jml_pemsing=$_POST['jml_pemsing'];
				$jml_campuran=$_POST['jml_campuran'];
				/*UKM non BPR*/
				$ukm_nonbpr=$_POST['ukm_nonbpr'];
				$jml_ukm=$_POST['jml_ukm'];
				$jml_bpr=$_POST['jml_bpr'];
				$ukm_bpr=$_POST['ukm_bpr'];
				/*Lembaga Uang Perbankan*/
				$uang_bank=$_POST['uang_bank'];
				$non_bank=$_POST['non_bank'];
				$jml_bank=$_POST['jml_bank'];

				$user=Yii::app()->user->username;

				$gabung1 = array($proyek_pma,$realisasi_pma,$p3k_pma,$tambang_pma,$pengolahan_pma,$ligasber_pma,$bangunan_pma,$dagang_pma,$angkom_pma,$estate_pma,$jasa_pma);
				$gabung2 = array($proyek_pmdn,$realisasi_pmdn,$p3k,$tambang_pmdn,$ind_pengolahan,$ligas_aber,$realisasi_bangunan,$dagang_restohotel,$angkut_komunikasi,$real_estate,$jasa_jasa,$investasi_pmdn,$inv_pusat,$inv_pemda,$inv_swasta);
				$gabung3 = array($bank_pr,$bpr_konvensional,$bpr_syariah);
				$gabung4 = array($bank_umum,$bkumum_konvensional,$bkumum_syariah);
				$gabung5 = array($asuransi_rugi,$asrugi_konvensional,$asrugi_syariah);
				$gabung6 = array($asuransi_jiwa,$asjiwa_syariah,$asjiwa_konvensional,$jml_pdam);
				$gabung7 = array($inv_nasional,$pma,$bumn_asing,$swasta_asing,$pmdn,$pmdn_bumd,$pmdn_bumn,$pmdn_swata,$pmdn_campuran);
				$gabung8 = array($jasa_uang,$lmbg_nbank,$modal_ventura,$uang_mikro,$usaha_asuransi,$cabang_asuransi,$lmbg_bank,$bank_pemerintah,$bank_swasta,$bank_asing,$bank_pemda,$bank_pemsing,$bank_campuran,$jml_pemerintah,$jml_swasta,$jml_asing,$jml_pemda,$jml_pemsing,$jml_campuran);
				$gabung9 = array($ukm_nonbpr,$jml_ukm,$jml_bpr,$ukm_bpr);
				$gabung10 = array($uang_bank,$non_bank,$jml_bank);

				$isiin1 = implode("#", $gabung1);
				$isiin2 = implode("#", $gabung2);
				$isiin3 = implode("#", $gabung3);
				$isiin4 = implode("#", $gabung4);
				$isiin5 = implode("#", $gabung5);
				$isiin6 = implode("#", $gabung6);
				$isiin7 = implode("#", $gabung7);
				$isiin8 = implode("#", $gabung8);
				$isiin9 = implode("#", $gabung9);
				$isiin10 = implode("#", $gabung10);

				$query1 = "INSERT INTO log VALUES(NULL, 'eko_pma', '$user', '$tahunini', '$isiin1', '$waktuisi')";
				$query2 = "INSERT INTO log VALUES(NULL, 'eko_pmdn', '$user', '$tahunini', '$isiin2', '$waktuisi')";
				$query3 = "INSERT INTO log VALUES(NULL, 'eko_bpr', '$user', '$tahunini', '$isiin3', '$waktuisi')";
				$query4 = "INSERT INTO log VALUES(NULL, 'eko_bankumum', '$user', '$tahunini', '$isiin4', '$waktuisi')";
				$query5 = "INSERT INTO log VALUES(NULL, 'eko_asrugi', '$user', '$tahunini', '$isiin5', '$waktuisi')";
				$query6 = "INSERT INTO log VALUES(NULL, 'eko_asjiwa', '$user', '$tahunini', '$isiin6', '$waktuisi')";
				$query7 = "INSERT INTO log VALUES(NULL, 'eko_invnas', '$user', '$tahunini', '$isiin7', '$waktuisi')";
				$query8 = "INSERT INTO log VALUES(NULL, 'eko_jasauang', '$user', '$tahunini', '$isiin8', '$waktuisi')";
				$query9 = "INSERT INTO log VALUES(NULL, 'eko_ukmnon', '$user', '$tahunini', '$isiin9', '$waktuisi')";
				$query10 = "INSERT INTO log VALUES(NULL, 'eko_perbankan', '$user', '$tahunini', '$isiin10', '$waktuisi')";

				$conn=Yii::app()->db;

				$command1=$conn->createCommand($query1);
				$command2=$conn->createCommand($query2);
				$command3=$conn->createCommand($query3);
				$command4=$conn->createCommand($query4);
				$command5=$conn->createCommand($query5);
				$command6=$conn->createCommand($query6);
				$command7=$conn->createCommand($query7);
				$command8=$conn->createCommand($query8);
				$command9=$conn->createCommand($query9);
				$command10=$conn->createCommand($query10);

				$command1->execute();$command2->execute();$command3->execute();$command4->execute();$command5->execute();$command6->execute();$command7->execute();$command8->execute();$command9->execute();$command10->execute();
				$this->redirect(array(
					'ekonomi'));
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