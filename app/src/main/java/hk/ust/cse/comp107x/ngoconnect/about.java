package hk.ust.cse.comp107x.ngoconnect;

import android.app.Fragment;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v7.app.AppCompatActivity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;

import com.google.firebase.auth.FirebaseAuth;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

/**
 * Created by Padhavi on 08-07-2017.
 */



public class about extends Fragment {

    private int id;
    private DatabaseReference mDatabase;
    Button searchbtn;

    private String uid, currentUserName,currentUserEmail,currentphno,currentEventsname;
    private TextView womanname1,details;
    private FirebaseAuth auth;
    private View myView;



    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
        ((AppCompatActivity) getActivity()).getSupportActionBar().setTitle("REGISTRATION FORM");
        myView = inflater.inflate(R.layout.register, container, false);
        //reference to the database
        mDatabase= FirebaseDatabase.getInstance().getReference();
        auth = FirebaseAuth.getInstance();
        uid=auth.getCurrentUser().getUid();
        final DatabaseReference[] ref2 = new DatabaseReference[1];
       searchbtn=(Button)myView.findViewById(R.id.search);
        womanname1=(TextView)myView.findViewById(R.id.id);
        details=(TextView)myView.findViewById(R.id.name);





        searchbtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //Creating firebase object

                mDatabase= FirebaseDatabase.getInstance().getReference();


                //Getting values to store
                String textextract = womanname1.getText().toString().trim();


           /*     mDatabase.child("applicant").addValueEventListener(new ValueEventListener() {
                    @Override

                    public void onDataChange(DataSnapshot dataSnapshot) {
                        //  bookName = dataSnapshot.child("bookName").getValue(String.class);
                        txt = dataSnapshot.child("txt").getValue(String.class);


                        detailstxt.append(txt);


                    }

                    @Override
                    public void onCancelled(DatabaseError databaseError) {
                        if (auth.getCurrentUser() != null) ;
                        // Log.d(LOG_TAG, "getUser:onCancelled", databaseError.toException());
                    }
                });

*/





            }
        });


        return myView;

    }




}
