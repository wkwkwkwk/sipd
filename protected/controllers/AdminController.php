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
					'dataProvider28' => $r28));
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

		public function actionSimpanDataUmum()
		{
			if ($_POST) {
				//ambil dat adari masing-masing atribut
				$tahunini=date("YYYY");
				$datar=$_POST['datar'];
				$bergelombang=$_POST['bergelombang'];
				$curam=$_POST['curam'];
				$sgtcuram=$_POST['sgtcuram'];
				$tinggidpl=$_POST['tinggidpl'];

				$user=Yii::app()->user->username;
				$implod=array($datar,$bergelombang,$curam,$sgtcuram,$tinggidpl);

				$masukisi=implode("#", $implod);

				$i=0;
				for ($i=0; $i < 5; $i++) { 
					$n=$i+1;
					$sql3="UPDATE geo_topografi SET '2015'=$implod[$i] WHERE id=$n";
				}
				
				$sql2="INSERT INTO log VALUES('','geo_topografi','$user','$tahunini','$masukisi')";
				//query simpan data
				/*$sql2="INSERT INTO geo_topografi(datar,bergelombang,curam,sgtcuram,tinggidpl)
				VALUES('$datar','$bergelombang','$curam','$sgtcuram','$tinggidpl')";*/
				$conn=Yii::app()->db;

				//eksekusi query simpan data
				$command=$conn->createCommand($sql2);

				//binding param untuk menangani karakter injection
				/*$command->bindParam(":datar",$datar,PDO::PARAM_STR);
				$command->bindParam(":bergelombang",$bergelombang,PDO::PARAM_STR);*/

				//eksekusi query atau non-query
				$command->execute();
				$this->redirect(array(
					'dataumum'));
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