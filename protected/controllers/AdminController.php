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
					$sql16 = "SELECT*FROM huk_jktd";
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
					$command16 = $connection->createCommand($sql16);
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
					$r16 = $command16->queryAll();
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
						'dataProvider16' => $r16,
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

				$user=Yii::app()->user->username;
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


				$user=Yii::app()->user->username;
				$implod1=array($adminpmr,$jmlkec,$jmlkel,$jmldes,$klasdesa,$dswad,$dswak,$dswas,$dpes,$dhut,$indjas,$dkeb,$dlad,$dsaw,$dpertambang,$dpet,$dwis,$jmlrw,$jmlrt,$jmldusun);
				$implod2=array($statusotonomi,$otobaru,$dinduk,$dmekar,$dnonmekar);
				$implod3=array($perdaijin,$perdaterbit,$revisisjkterbit,$perdaout,$perdartrw,$imb,$ijinprinsip,$ijinusaha,$ijinusahakebun,$ijinusahahutan,$ijinusahatambang,$ijininvesPMA,$ijininvesPMDN,$RPJPDperda,$RPJMDperda,$perdaijin,$RKPDtahunini,$RPJMDtahunini,$ijinlokasi,$singmohonlokasi,$perdaiklimusah,$langgarperda,$tegakperda,$jmlperdaijin,$perdalalin,$perdataker);
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
					'sosbud'));
			}
		}

		public function actionSimpanDemografi()
		{
			if ($_POST) {
				
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