﻿using UnityEngine;
using System.Collections;
using CORE;

//********************************************************************************************************
//
//********************************************************************************************************

public class Deferred : MonoBehaviour
{
	//****************************************************************************************************
	//
	//****************************************************************************************************

	public delegate void Call();

	//****************************************************************************************************
	//
	//****************************************************************************************************

	private const int CAPACITY = 64;

	//****************************************************************************************************
	//
	//****************************************************************************************************

	static private Deferred m_instance = null;

	static private Call[]   m_queue    = new Call[ CAPACITY ];

	static private int      m_size     = 0;

	//****************************************************************************************************
	//
	//****************************************************************************************************

	static public void Push      ( Call call ) { if( m_size < CAPACITY ) m_queue[ m_size++ ] = call; }
	
	       private void Start    ()            { if( m_instance == null ) m_instance = this; }

	       private void OnDestroy()            { if( m_instance == this ) m_instance = null; }

	//****************************************************************************************************
	//
	//****************************************************************************************************

	private void Update()
	{
		if( m_instance != this ) return;

		for( int entry = 0; entry < m_size; ++entry )
		{
			( m_queue[ entry ] )();
		}

		m_size = 0;
	}
}