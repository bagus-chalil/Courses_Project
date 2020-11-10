package com.example.simplenavbar.ui.biodata;

import android.app.AlertDialog;
import android.content.DialogInterface;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.fragment.app.Fragment;


import com.example.simplenavbar.R;

public class BiodataFragment extends Fragment {
    Button btn_finish;
    public View onCreateView(@NonNull LayoutInflater inflater,
                             ViewGroup container, Bundle savedInstanceState) {
        View rootView = inflater.inflate(R.layout.fragment_biodata, container, false);
        btn_finish = (Button)rootView.findViewById(R.id.btn_selesai);

        btn_finish.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                new AlertDialog.Builder(getActivity())
                        .setTitle("Alert")
                        .setMessage("Apakah kamu yakin ingin menyimpan Data")
                        .setPositiveButton("YA", new DialogInterface.OnClickListener() {
                            @Override
                            public void onClick(DialogInterface dialog, int which) {
                                //Toast.makeText(getActivity(), "Kamu Memilih YES", Toast.LENGTH_LONG).show();
                                dialog.cancel();
                                getActivity().finish();
                            }
                        })
                        .setNegativeButton("TIDAK", new DialogInterface.OnClickListener() {
                            @Override
                            public void onClick(DialogInterface dialog, int which) {
                                Toast.makeText(getActivity(), "Kamu Memilih TIDAK Ingin Keluar", Toast.LENGTH_LONG).show();
                                dialog.cancel();
                            }
                        }).show();
            }
        });
        alertOpen();
        return rootView;
    }


    public void alertOpen() {
        new AlertDialog.Builder(getActivity())
                .setTitle("Alert")
                .setMessage(
                        "Mohon Masukkan Data dengan jujur")
                .setPositiveButton("OK",
                        new DialogInterface.OnClickListener() {

                            @Override
                            public void onClick(DialogInterface dialog,
                                                int which) {
                                dialog.cancel();
                            }
                        }).show();
    }

}